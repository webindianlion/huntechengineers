<!DOCTYPE html>
<html>
<?php include './common/head.php' ?>
<body>
    <?php include './common/topmenu.php' ?>
    <div class="containerr videoContainer">
        <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="homeBgvid" playsinline autoplay muted loop>
            <!--- Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
            WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
            <source src="images/video_inwebservices_4.mp4" type="video/webm">
            <!-- <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4"> -->              
        </video>   
        <div class="videoText">
            <h1> <span> inwebservices is commited to assist their business clients to develop and maintain their websites. </span> </h1>
        </div>           
    </div>


</body>
</html>