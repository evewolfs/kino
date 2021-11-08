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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <title>Quentin Pellegrini</title>
   </head>
   <body>
      <?php require '../public/includes/navbar.php' ?>

      <div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-12">
            <!-- <img src="https://kinostelux.lu/public/assets/img/doctor-picture.jpg" class="doctor-picture" alt=""> -->
           
            <div class="doctor-name">Quentin Pellegrini</div>
            <div class="doctor-job"><?= $doctor["quentin"]["doctor_job"] ?></div>
      
            <div class="doctor-icons">
 <a href="https://goo.gl/maps/gYWE6ajmfqPt8Svv6" target="blank"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-geo-alt"><h6><?= $doctor["titles"]["title_cabinet"] ?></h6></div></i></a></div>
          <a href="mailto:pellegrinikinesitherapie@gmail.com"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-envelope"><h6>EMAIL</h6></div></div></i></a>
         <a href="tel:0035224873092"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-telephone"><h6>+352 24 87 30 92</h6></div></div></i></a>
</div>
</div>
<div class="col-lg-4 col-12">

   <div class="doctor-spec-title"><?= $doctor["titles"]["title_speciality"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["quentin"]["specialities"] as &$val) { ?>
                <li><?= $val ?></li>
               <?php } ?>
            </ul>
     
</div>
<div class="col-lg-4 col-12">
<div class="doctor-spec-title"><?= $doctor["titles"]["title_language"] ?></div>
            <ul class="doctor-description">
               <?= $doctor["quentin"]["doctor_lang"] ?>
            </ul> 
         <div class="doctor-spec-title"><?= $doctor["titles"]["title_formation"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["quentin"]["formation"] as &$val) { ?>
                <?= $val ?>
               <?php } ?>
            </ul>

</div>
            </div>
            <script src="//widget.simplybook.it/v2/widget/widget.js"></script>
<script>var widget = new SimplybookWidget({"widget_type":"iframe","url":"https:\/\/kinostelux.simplybook.it","theme":"dainty","theme_settings":{"timeline_show_end_time":"1","timeline_hide_unavailable":"1","hide_past_days":"1","sb_base_color":"#353f5e","secondary_color":"#e4ebf5","sb_text_color":"#a1a1a1","display_item_mode":"list","body_bg_color":"#ffffff","sb_background_image":"","sb_review_image":"","dark_font_color":"#353f5e","light_font_color":"#ffffff","sb_company_label_color":"#ffffff","sb_cancellation_color":"#ff7a93","hide_img_mode":"1"},"timeline":"modern_week","datepicker":"inline_datepicker","is_rtl":false,"app_config":{"allow_switch_to_ada":0,"predefined":{"provider":"3"}}});</script>
     </div>
     <br/>
   </body>
</html>
