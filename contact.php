<?php 
include "/home/vol1_4/infinityfree.com/if0_34795783/htdocs/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include $phproot."head.php";
?>
<script src="<?php echo $htmlroot;?>javascript/validation.js"></script>
<body>
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
                <button type="submit" style="min-width: fit-content;" class="btn mx-2 mb-3 mt-4 col-2 col-sm-3 col-md-2 btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php
require_once $phproot."php/dbconn.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST["Full_name"]&&$_POST["Email"]&&$_POST["Message"]){
        $name = $_POST['Full_name'];
        $name = stripslashes($name);
        $email = $_POST['Email'];
        $email = stripslashes($email);
        strpos($email,"@");
        $Message = $_POST['Message'];
        $statement = "INSERT INTO messages Values (NULL,'$name','$email','$Message')";
        // echo $statement;99
        if($conn->query($statement)){
            echo "Message has been submitted." ;
            require_once $phproot."php/mailconfig.php";
            $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
echo mail("bipulbimali@gmail.com","My subject",$msg);
        }
        else{
            echo "Error sending message try again Later";
            location:'./index.php';
        }


    }
}
?>