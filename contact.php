

<!DOCTYPE html>
<html>
<?php include './common/head.php' ?>
<body class="bodyContact">
    <?php include './common/topmenu.php' ?>
    <div class="containerr videoContainer"> 
        <div id="particles-js">
            <canvas class="particles-js-canvas-el" width="659" height="572"></canvas>
        </div>
        <form action="./server.php" method="post" class="formContact">
        <h1>Customer Care <br>(+91 9810272223)</h1>
            <div class="form-group">
                <input type="text" name="cname" placeholder="Name" class="form-control" id="">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" id="" aria-describedby="emailHelp">
            </div>        
            <div class="form-group">
                <input type="text" name="mobile" placeholder="Mobile" class="form-control" id="">
            </div>
            <button class="g-recaptcha" 
                data-sitekey="6LdmOvoZAAAAAKUCJsdxeCXPHLxWp-uPVUNKVADK" 
                data-callback='onSubmit' 
                data-action='submit'>Submit</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    

    <?php include './common/footer.php' ?>
</body>
</html>