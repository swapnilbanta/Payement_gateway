<?php 
require_once('config.php'); 
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


  <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="100"
        data-buttontext="Pay with Razorpay"
        data-name="Donation"
        data-description="Donate some money . You can save someone life"
        data-image="https://your-awesome-site.com/your_logo.jpg"
      data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>



