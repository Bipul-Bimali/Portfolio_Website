<?php 
include __DIR__. '/config.php';
?>


<?php
$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'Contact Bipul Bimali (AirCorp) for Web Development projetcs, Cybersecurity Consultation, or software inquiries, Get a quick response here!',
    'keywords' => 'Bipul Bimali (AirCorp)contact, cybresecurity consulting, web dev quote, hire developer, reach out',
    'author' => 'Bipul Bimali',
    'title' => isset($title) ? "Bipul Bimali | AirCorp $title" : 'Bipul Bimali | AirCorp',
    'og' => [
        'title' => "Contact Bipul Bimali -Let's Start a Project",
        'description' => 'Connect with Bipul Bimali directly for web Development, Cybersecurity, or collaboration opportunities',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/index.php',
        'type' => 'website'
    ]
];

$assets = [
    // --- CSS Assets ---
    'css' => [
        // 1. Primary Stylesheet
        [
            'path' => 'bootstrap-5.3.3/dist/css/bootstrap.min.css',
            'attributes' => '' 
        ],
        // 2. Example: Print-only stylesheet
        [
            // 'path' => 'css/print-styles.css',
            // 'attributes' => 'media="print"' 
        ]
    ],
    
    // --- JavaScript Assets ---
    'js' => [
        // 1. Bootstrap Bundle (Critical library)
        [
            'path' => 'bootstrap-5.3.3/dist/js/bootstrap.bundle.js'
           // 'attributes' => 'defer' // Recommended for performance
        ],
        // 2. Custom Main Script (Your logic)
        [
            'path' => 'javascript/main.js',
            // Example of multiple attributes: defer and a custom ID
            'attributes' => 'defer id="main-script"' 
        ],
        // 3. Example: External script that requires 'async'
        [
             'path' => 'https://challenges.cloudflare.com/turnstyle/v0/api.js',
             'attributes' => 'async defer' 
        ]
    ],
    
    // --- Other Assets ---
    'favicon' => 'icon/icon.svg'
];
?>


<!DOCTYPE html>
<html lang="en">


<?php 
include $phproot."head.php";
?>


<script src="<?php echo $htmlroot;?>javascript/validation.js"></script>
<body data-bs-theme="dark">
    <main> 
        <?php 
        include $phproot."header.php";
        ?>
        <div class="container">
            <form id="form"  class="row"  method="POST" action=""  >
                <div class="mb-3 col-12 col-sm-6 col-md-4">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="Full_name" required>
                </div>
                <div class="mb-3 col-12 col-sm-6 col-md-4">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="Email" aria-describedby="emailHelp" name="Email" required >
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3 col-12 col-sm-8 col-md-4">
                    <label for="Message" class="form-label">Message</label>
                    <input type="text" class="form-control" id="Message" name="Message" required >
                </div>
                <!-- <div class="mb-3  form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->

                <div class="col-12 mb-3">
                    <div class="cf-turnstile" data-sitekey="0x4AAAAAAFajSJOncyEcYEKy" data-action="contact" data-theme="dark"></div>
                </div>
                <button type="submit" style="min-width: fit-content;" class="btn mx-2 mb-3 mt-4 col-2 col-sm-3 col-md-2 btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>


<?php
function VerifyTurnstile(string $token, string $ip, string $phproot): bool {
    $cfg = require $phproot."php/turnstile.php";
    if ($token === '' || strlen($token) > 2048 ||  empty($cfg['secret']) || empty($cfg['hostnames'])) {
        return false ;
    }


//test 
$fields = ['secret' => $cfg['secret'], 'response' => $token];
$ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($fields),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT        => 10,
    ]);

    $raw  = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($raw === false || $code !== 200) return false;   // fail closed
    $r = json_decode($raw, true);
    return is_array($r)
        && ($r['success'] ?? false) === true
        && ($r['action'] ?? '') === 'contact'
        && in_array($r['hostname'] ?? '', $cfg['hostnames'], true);



}

function getPostClientIp(): ?string
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return null;
    }

    return $_SERVER['REMOTE_ADDR'] ?? null;
}
require_once $phproot."php/Dbconn.php";
require_once $phproot."php/turnstile.php";
if($_SERVER['REQUEST_METHOD']=="POST"){

$token = is_string($_POST['cf-turnstile-response'] ?? null) ? $_POST['cf-turnstile-response'] : '';

    if (!VerifyTurnstile($token, $_SERVER['REMOTE_ADDR'] ?? '', $phproot)) {
        echo "Verification failed. Please reload the page and try again.";
    }

    elseif($_POST["Full_name"]&&$_POST["Email"]&&$_POST["Message"]){
        $name = $_POST['Full_name'];
        $name = stripslashes($name);
        $email = $_POST['Email'];
        $email = stripslashes($email);
        strpos($email,"@");
        $Message = $_POST['Message'];
        $ip = getPostClientIp();
        $statement = $conn->prepare("INSERT INTO Messages (`Full Name`, `Email`, `Message`,`my_date`,`IP`, `Category`) VALUES (?, ?, ?,NOW(),? , 'Portfolio')");
        if ($statement){ 
            $statement->bind_param("ssss", $name, $email, $Message,$ip);
            if($statement->execute()){
                require_once $phproot."php/mailconfig.php";
                if (sendContactMail($name, $email, $Message, $mailConfig)) {
                    echo "Message has been submitted and email sent.";
                }
                else {
                    echo "Message saved, but email could not be sent.";
                }
            }
            else{
                echo "Error sending message try again Later";
                location:'./index.php';
            }
        }
    }   
    else{
            echo "Please fill all the fields";
    }   
}   
else{
    echo "Please fill the form to submit your message";
}
?>