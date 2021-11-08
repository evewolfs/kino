<?php
   include "../public/config.php";
?>
<!doctype html>
<html locale="<?= $_SESSION["locale"]; ?>">
   <head>
   <link rel="shortcut icon" type="image/x-icon" href="https://kinostelux.lu/public/assets/img/browser-img.jpg">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../public/assets/scss/style.css">
      <!-- Adobe -->
      <link rel="stylesheet" href="https://use.typekit.net/dtq7qfb.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <title>Gregory Berghman</title>
   </head>
   <body>
      <?php require '../public/includes/navbar.php' ?>

      <div class="container-fluid">



<div class="row">
      <div class="col-lg-4 col-12">
                  <div class="doctor-name">Gregory Berghman</div>
            <div class="doctor-job"><?= $doctor["gregory"]["doctor_job"] ?></div>
            <!-- <img src="https://kinostelux.lu/public/assets/img/doctor-picture.jpg" class="doctor-picture" alt=""> -->
            <div class="doctor-icons">
               <a href="https://goo.gl/maps/gYWE6ajmfqPt8Svv6" target="blank">
                  <div class="doctor-icon-container">
                     <div class="icon-box">
                        <i class="bi bi-geo-alt"></i>
                           <h6>LU</h6>
                     </div>
               </div>
             </a>
               <a href="mailto:gregosteopathie@gmail.com">
                  <div class="doctor-icon-container">
                     <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                           <h6>EMAIL</h6>
                     </div>
                  </div> 
               </a>
               <a href="tel:0035224873092">
                  <div class="doctor-icon-container">
                     <div class="icon-box">
                        <i class="bi bi-telephone"> </i>
                           <h6>+352 248 730 92</h6>
                     </div>
                  </div>             
</div>
</a>  
</div> 

<div class="col-lg-4 col-12">
<br/>
<div class="doctor-spec-title"><?= $doctor["titles"]["title_speciality"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["gregory"]["specialities"] as &$val) { ?>
                <li><?= $val ?></li>
               <?php } ?>
            </ul>
</div>
            <div class="col-lg-4 col-12">
               <br/>
            <div class="doctor-spec-title"><?= $doctor["titles"]["title_language"] ?></div>
            <ul class="doctor-description">
               <?= $doctor["gregory"]["doctor_lang"] ?>
</ul> 
         <div class="doctor-spec-title"><?= $doctor["titles"]["title_formation"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["gregory"]["formation"] as &$val) { ?>
             <li>   <?= $val ?>
               <?php } ?></li>
            </ul>

         
            </div>
            </div>
            </div>
        
            <div class="row">
     <!-- <div class="col-12 mikrono-box">
     <div id="mikrono"></div>
            <script type="text/javascript" language="javascript" src="https://backup.mikrono.com/myagenda/myagenda.nocache.js"></script>
            <script type="text/javascript" language="javascript" src="https://backup.mikrono.com/js/lz-string.min.js"></script>
            <script type="text/javascript" language="javascript">
               var owner_id="6123640b592f2052d5179b4d";
            </script>
            <a href="../public/cabinet.php">
    <button>
        <?= $home['availability'] ?>
    </button>
</a>
</div> -->

<script src="//widget.simplybook.it/v2/widget/widget.js"></script>
<script>var widget = new SimplybookWidget({"widget_type":"iframe","url":"https:\/\/kinostelux.simplybook.it","theme":"dainty","theme_settings":{"timeline_show_end_time":"1","timeline_hide_unavailable":"1","hide_past_days":"1","sb_base_color":"#353f5e","secondary_color":"#e4ebf5","sb_text_color":"#a1a1a1","display_item_mode":"list","body_bg_color":"#ffffff","sb_background_image":"","sb_review_image":"","dark_font_color":"#353f5e","light_font_color":"#ffffff","sb_company_label_color":"#ffffff","sb_cancellation_color":"#ffb8b8","hide_img_mode":"1"},"timeline":"modern_week","datepicker":"inline_datepicker","is_rtl":false,"app_config":{"allow_switch_to_ada":0,"predefined":{"provider":"1","service":"1"}}});</script>
<!-- <iframe src="https://app.squarespacescheduling.com/schedule.php?owner=24532864&calendarID=6210861" title="Prendre rendez-vous" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script> -->
</div>
     </div>
     <br/>
   </body>
</html>
