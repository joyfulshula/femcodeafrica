<?php
require_once 'header.php';
?>
<section class="view2 hm-black-light pt-4 mt-4">
    <div class="full-bg-img flex-center"><h1 class="bold">Contact Us</h1></div>
</section>
<section class="mb-5">
	<div class="container pt-5">
       <p class="section-description"> Get in touch with us, we can't wait to hear from you.</p>
       <!--Grid row-->
       <div class="row">

        <!--Grid column-->
        <div class="col-md-12">

            <!--Form with header-->
            <div class="card">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-body form">
                            <!--Header-->
                            <div class="formHeader mb-1">
                                <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                            </div>

                            <br>

                            <form action="#" method="POST">
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" placeholder="Full Name" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="email" placeholder="Email" name="email" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="tel" placeholder="Phone Number" name="phone" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" placeholder="Reason For Contact" name="reason" class="form-control" required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" placeholder="Your Message" name="message" class="md-textarea" required></textarea>
                                            
                                            <button type="submit" name="send" class="btn-floating btn-lg blue"><i class="fa fa-send-o"></i><i class="" id="spinner"></i></button>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-4" >
                        <div class="card-body contact text-center" style="background-color: #000066">
                            <div class="container">
                                <div class="mb-5">
                                    <h3>Contact information</h3>
                                </div>
                                <div class="text-left">
                                	<p> <i class="fa fa-map-marker pr-3"></i><?php echo CONTACT_ADDRESS?></p>
                                	<p><i class="fa fa-phone pr-3"></i> <?php echo CONTACT_PHONE?></p>
                                	<p><i class="fa fa-phone pr-3"></i> <?php echo CONTACT_PHONE2?></p>
                                	<p><i class="fa fa-envelope pr-3"></i> <?php echo CONTACT_EMAIL?></p>
                                </div>
                                
                                <hr class="hr-light mb-4 mt-4">

                                <ul class="inline-ul text-center list-unstyled">
                                    <li><a target="_blank" href="https://web.facebook.com/FemCodeAfrica/?_rdc=1&_rdr" class="icons-sm tw-ic"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/femcodea?lang=en" class="icons-sm li-ic"><i class="fa fa-twitter-square"> </i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/fem_code/" class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                                    <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=2349017434810&text&app_absent=0" class="icons-sm ins-ic"><i class="fa fa-whatsapp"> </i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!--/Form with header-->
            
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>
</section>
<?php
require_once 'footer.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $reason = $_POST['reason'];
        $message = $_POST['message'];

        $msg = "New Contact Message From FemCode Africa Website \nName : $name \nEmail : $email \nPhone Number : $phone \nReason For Contact : $reason \nMessage : $message";

        if (mail('hello@femcodeafrica.org', 'New Contact Mesage', $msg)) {
            echo '
                <script>
                    alert("Thank you for reaching out to us. We will get back to you shortly")
                </script>
            ';
        }else{
            echo '
                <script>
                    alert("Sorry, there was an error sending your message, please refresh and try again")
                </script>
            ';
        }

}


?>