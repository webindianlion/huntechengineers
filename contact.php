

<!DOCTYPE html>
<html>
<?php include './common/head.php' ?>
<body class="bodyContact">
    <?php include './common/topmenu.php' ?>
    <main>
    <section class="container-flude">
        <div class="container contactMain">
        <div class="row">
        <h2 class="text-center ttl">Get In Touch</h2>
            <div class="col-md-6">
                <form action="https://inwebservice.com/mail_handler.php" method="post" name="form">
                    <div class="mb-3">
                        <input type="text" placeholder="Name" class="form-control" id="" name="uname" required > 
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Company Name" class="form-control" id="" name="cname" required >
                    </div>
                    <div img class="mb-3">
                        <input type="email" placeholder="Email" class="form-control" id="" name="uemail" required >
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Phone Number" class="form-control" id="" name="uphone" required >
                    </div>
                    <div class="mb-3">
                        <textarea name="umessage" placeholder="Message" id="" rows="3"></textarea>                        
                    </div>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >
                    <input type="submit" name="submit" value="Submit"  class="btn btn-primary">
                    
                </form> <br>
                <h3 class="whatapp">
                    <a href="https://api.whatsapp.com/send?phone=919911796297text=welcome" class="text-decoration-none btn btn-primary  w-100 text-center"  role="button">                
                        Chat with Us <img src="./images/whatsapp.svg" width="30px" class="ms-2" alt="">                     
                    </a>                
                </h3>
                
            </div>
            <div class="col-md-6">
                <div class="col-sm-12">
                    <h3> <i class="bi bi-geo-fill"></i> Address</h3>
                    <p>Plot No. 2386, Sant Nagar, Opp. Railway Road, Faridabad, Haryana-121002, info@huntechengineers.com, huntechengineers@gmail.com</p>
                </div>
                <div class="col-sm-12">
                    <h6>Ummed Singh</h6>
                    <p>
                        9911796296
                        <a href="https://api.whatsapp.com/send?phone=919911796296text=welcome" class="text-decoration-none text-center ms-5"  role="button">                
                        Chat with Me <img src="./images/whatsapp.svg" width="30px" class="ms-2" > </a> 
                    </p>
                </div>
                <div class="col-sm-12">
                    <h6>Nirbhay Gupta</h6>
                    <p>
                        9911796297
                        <a href="https://api.whatsapp.com/send?phone=919911796297text=welcome" class="text-decoration-none text-center ms-5"  role="button">                
                        Chat with Me <img src="./images/whatsapp.svg" width="30px" class="ms-2" > </a>
                    </p>
                </div>
                <div class="col-sm-12">
                    <h6>Satish Kumar</h6>
                    <p>
                        9911796298
                        <a href="https://api.whatsapp.com/send?phone=919911796298text=welcome" class="text-decoration-none text-center ms-5"  role="button">                
                        Chat with Me <img src="./images/whatsapp.svg" width="30px" class="ms-2" > </a>
                    </p>
                </div>
            </div>
        
            <!-- <hr class="border-bottom border-primary border-1"> -->

            </div>
        </div>
    </section>

    
    <section class="container-flude">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <h2 class="text-center ttl">Find us on Map </h2>
                    <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.1447253420065!2d77.30551211491812!3d28.414889582504195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdd80607d7777%3A0x228139c1651d6836!2sHuntech%20Engineers!5e0!3m2!1sen!2sin!4v1609575779279!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    </main>
    <?php include './common/footer.php' ?>

    <script src='https://www.google.com/recaptcha/api.js?render=6LeCtG4aAAAAAARSnOrurvP298Th4W7EusWdaD-p'></script>
    <script>
      grecaptcha.ready(function() {
      grecaptcha.execute('6LeCtG4aAAAAAARSnOrurvP298Th4W7EusWdaD-p', {action: 'submit'})
      .then(function(token) {
          //console.log(token);
          document.getElementById('g-recaptcha-response').value=token;
      });
      });
  </script>
</body>
</html>