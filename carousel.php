<!doctype html>
<html lang="en">
<?php include './common/head.php' ?>
<body class="home">

   <?php include './common/topmenu.php' ?>

    

     <section class="container partners">
        <div class="row">
            <h3>Companies we've Partnered</h3>
        </div>
        <div class="row">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class=""></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class=""></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active" >
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">      
    </div>
    <div class="carousel-item" >
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">  
    </div>
    <div class="carousel-item ">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">  
    </div>
  </div>

</div>
        </div>
    </section> 
    
<section>
<div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel"> 

  <div class="carousel-inner">
    <div class="carousel-item active" >
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">      
    </div>
    <div class="carousel-item" >
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">  
    </div>
    <div class="carousel-item ">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">
        <img src="./images/partner1.jpg" class="" alt="...">  
    </div>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleDark1" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleDark1" role="button" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
    
</div>
</section>






<!-- Sliding div starts here -->
<div id="sliderenquiry" style="right:-280px;">
    <div id="sidebar" onclick="open_panel()"><img src="images/enquiry.jpg"></div>
    <div id="headerenquiry">
        <form class="footer-contact-form text-align-center" action="" method="POST" id="formSide">
            <div class="row margin-10">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="sr-only" for="FirstName">First Name</label>
                        <input placeholder="Name" name="cust_name" id="FirstName" class="form-control" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="InputEmail">Email Address</label>
                        <input placeholder="Email Address" name="cust_email" id="InputEmail" class="form-control" required="required" type="email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="PhoneNumber">Phone Number</label>
                        <input placeholder="Phone Number" name="cust_contact" id="PhoneNumber" class="form-control" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="">Message</label>
                        <textarea placeholder="Message" rows="3" name="cust_message" class="form-control" required="required"></textarea>
                    </div>
                    <div class="form-group captcha-container">
                        <label class="sr-only" for="">Captcha</label>
                        <img src="http://www.jawlatechnology.in/captcha.php?rand=1098496384" id='captchaimg'>
                        <br>
                        <input id="captcha_code" name="captcha_code" type="text" placeholder="Captcha">
                    </div>
                </div>
            </div>
            <div class="error_message error"></div>
            <div class="success_message success"></div>
            <input type="submit" class="btn btn-default submit-btn" value="Send Message" name="side_form">
        </form>
    </div>
</div>
<!-- Sliding div ends here -->

    <?php  include './common/footer.php' ?>

    
</body>
</html>
