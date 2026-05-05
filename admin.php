<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

// Load DB credentials (protected by .htaccess)
require __DIR__ . "/php/DB_readonly.php";

// ---------------------- API HANDLER ----------------------
if (isset($_GET['api'])) {

    // LOGIN
    if ($_GET['api'] === "login") {
        $data = json_decode(file_get_contents("php://input"), true);
        $pass = trim($data['password'] ?? '');
        $pass = htmlspecialchars($pass, ENT_QUOTES);

        if (hash_equals($password, $pass)) {
            $_SESSION['token'] = bin2hex(random_bytes(32));
            echo json_encode(["success" => true, "token" => $_SESSION['token']]);
        } else {
            echo json_encode(["success" => false]);
        }
        exit;
    }

    // AUTH CHECK
    $auth = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
    if (!isset($_SESSION['token']) || $auth !== $_SESSION['token']) {
        http_response_code(403);
        echo json_encode(["error" => "Unauthorized"]);
        exit;
    }

    // DB CONNECT
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(["error" => "DB connection failed"]);
        exit;
    }

    // LIST MESSAGES
    if ($_GET['api'] === "list") {
        $result = $conn->query("SELECT * FROM Messages ORDER BY id DESC");
        $rows = [];
        while ($r = $result->fetch_assoc()) $rows[] = $r;
        echo json_encode($rows);
        exit;
    }

    // DELETE MESSAGE
    if ($_GET['api'] === "delete") {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("DELETE FROM Messages WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo json_encode(["success" => true]);
        exit;
    }

    echo json_encode(["error" => "Invalid API"]);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light">

<div class="container mt-5">

    <h2 class="text-center">Secure Admin Panel</h2>

    <!-- LOGIN BOX -->
    <div id="loginBox" class="mt-4 text-center">
        <p class="lead">Enter Admin Password</p>
        <input type="password" id="adminPass" class="form-control w-50 mx-auto">
        <button class="btn btn-primary mt-3" onclick="login()">Login</button>
        <div id="loginError" class="text-danger mt-2"></div>
    </div>

    <!-- CONTENT BOX -->
    <div id="contentBox" class="mt-5" style="display:none;">
        <h3>Messages</h3>
        <table class="table table-dark table-bordered" id="msgTable">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Time</th><th>Delete</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div>

<script>
let authToken = null;

// ---------------------- LOGIN ----------------------
function login() {
    const pass = document.getElementById("adminPass").value.trim();

    fetch("admin.php?api=login", {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({ password: pass })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            authToken = data.token;
            document.getElementById("loginBox").style.display = "none";
            document.getElementById("contentBox").style.display = "block";
            loadMessages();
        } else {
            document.getElementById("loginError").innerText = "Invalid password";
        }
    });
}

// ---------------------- LOAD MESSAGES ----------------------
function loadMessages() {
    fetch("admin.php?api=list", {
        headers: { "Authorization": authToken }
    })
    .then(res => res.json())
    .then(rows => {
        const tbody = document.querySelector("#msgTable tbody");
        tbody.innerHTML = "";

        rows.forEach(r => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${r.id}</td>
                <td>${escapeHtml(r.name)}</td>
                <td>${escapeHtml(r.email)}</td>
                <td>${escapeHtml(r.message)}</td>
                <td>${r.created_at}</td>
                <td><button class="btn btn-danger btn-sm" onclick="deleteMsg(${r.id})">Delete</button></td>
            `;
            tbody.appendChild(tr);
        });
    });
}

// ---------------------- DELETE MESSAGE ----------------------
function deleteMsg(id) {
    if (!confirm("Delete this message")) return;

    fetch("admin.php?api=delete&id=" + id, {
        method: "DELETE",
        headers: { "Authorization": authToken }
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) loadMessages();
    });
}

// ---------------------- SANITIZE OUTPUT ----------------------
function escapeHtml(text) {
    return text.replace(/[&<>"']/g, m => ({
        "&": "&amp;", "<": "&lt;", ">": "&gt;",
        '"': "&quot;", "'": "&#039;"
    }[m]));
}
</script>

</body>
</html>
