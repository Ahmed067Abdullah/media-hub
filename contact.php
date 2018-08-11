<?php require "./includes/header.php" ?>

<?php
    if(isset($_POST['submit'])){
      $name = $_POST['nam'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      runQuery("INSERT into users_feedback (name,phone,email,message) VALUES ('$name','$phone','$email','$message')");  
    }
?>

<div class="contact-page container-fluid" style='height:527px;'>
    <div class="container" >
	    <h1 class='top-heading'>Contact Us</h1>
            
        <div class="contact-section"> 
            <div class="contact-form">
                <form action = "contact.php" method="POST">
                	<input type="text" placeholder="Name" name = "nam" required> 
                	<input type="text" placeholder="Telephone" name = "phone" required>
                    <input type="email" placeholder="Email Address" name = "email" required>
                    <textarea placeholder="Enter your details and message" name = "message" required></textarea>
                    <button class="btn-sub" name = "submit">SUBMIT</button>
                </form>
                <?php if(isset($_POST['submit'])) echo "<p>Form Submitted</p>"?>
            </div>
                
            <div class="contact-detail">
                <p><b>Address:</b> Karachi, Pakistan</p>
                <p><b>Phone No:</b> 021-34208791</p>
                <p><b>Mobile No:</b> 0333-8438617</p>
                <p><b>E-mail:</b> <a href="#">hello@downloadcentrepro.com</a></p>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<?php require "./includes/footer.php" ?>