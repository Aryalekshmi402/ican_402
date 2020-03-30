<!doctype html>
<?php
include('../../../config.php');
$stu_id=$_GET['stu_id'];
$fee_id=$_GET['fee_id'];
$r=mysqli_query($con,"select * from student_dues where id='$fee_id'");
$fee_deatils=mysqli_fetch_array($r);

?>
<a href="student_fees.php">Back </a>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Secure-Payment</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>.padding {
    padding: 5rem !important
}

.form-control:focus {
    box-shadow: 10px 0px 0px 0px #ffffff !important;
    border-color: #4ca746
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>$(function($) {
$('[data-numeric]').payment('restrictNumeric');
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$.fn.toggleInputError = function(erred) {
this.parent('.form-group').toggleClass('has-error', erred);
return this;
};
$('form').submit(function(e) {

var cardType = $.payment.cardType($('.cc-number').val());
$('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
$('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
$('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
$('.cc-brand').text(cardType);

});
});</script>
                            </head>
                            <body>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
<div class="padding">
    <div class="row">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT &nbsp;Pay Amount : Rs.<?php echo $fee_deatils['amount']; ?></span> </div>
                            <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                        </div>
                    </div>
                    <form method="POST" action="">
                    <div class="card-body" style="height: 350px">
                        <input type='hidden' name="amount" value="<?php echo $fee_deatils['amount']; ?>">
                        <input type='hidden' name="fee_id" value="<?php echo $fee_id?>">
                        <input type='hidden' name="Stud_id" value="<?php echo $stu_id; ?>">
                        <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" name="card_no" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" name="expiry" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" name="cvv" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                            </div>
                        </div>
                        <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input name="holder" type="text" class="input-lg form-control"> </div>
                        <div class="form-group"> 
                            <input  type="submit" name="pay" value="MAKE PAYMENT" class="btn btn-success btn-lg form-control" style="font-size: .8rem;"> 
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <?php
            if(isset($_POST['pay'])){
                $card_no=$_POST['card_no'];
                $expiry=$_POST['expiry'];
                $cvv=$_POST['cvv'];
                $holder=$_POST['holder'];
                $amount=$_POST['amount'];
                $fee_id=$_POST['fee_id'];
                $Stud_id=$_POST['Stud_id'];
                $date=date('Y-m-d');
                $query="insert into payments(amount,fees_id,student_id,card_no,expiry,cvv,holder_name,status,payment_date) values ('$amount','$fee_id','$Stud_id','$card_no','$expiry','$cvv','$holder','Completed','$date')";
                $upd="update student_dues set status='Payment Completed',payment_date='$date' where id='$fee_id'";
                if(mysqli_query($con,$query)){
                    mysqli_query($con,$upd);
                    ?>
                    <script>
                        alert('Payment Completed'); 
                        window.location.href="student_fees.php";
                        </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Payment Failed.Please try again'); 
                        window.location.href="student_fees.php";
                        </script>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>