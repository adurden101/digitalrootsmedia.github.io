<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $message = $_POST['message'];
 

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
         echo "<span class='form-error'>Please fill in all fields!</span>";
         $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Write a valid email address!</span>";
        $errorEmail = true;
    }

    else { 
        echo "<span class='form-success'>Thank you! Your message has been sent!</span>";
    }
}

else {
    echo "There was an error!";
}

?>



<script>
$("#mail-name, #mail-email, #mail-phone, #mail-message").removeClass("input-error");

 var errorEmpty = "<?php echo $errorEmpty; ?>";
 var errorEmail = "<?php echo $errorEmail; ?>";


 if (errorEmpty == true) {
     $("#mail-name, #mail-email, #mail-phone, #mail-message").addClass("input-error");
 }

 if (errorEmail == true) {
    $("#mail-email").addClass("input-error");
 }

 if (errorEmpty == false && errorEmail == false) {
    $("#mail-name, #mail-email, #mail-phone, #mail-message").val("");
 }

</script>