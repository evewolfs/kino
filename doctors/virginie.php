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
    
      <title>Virginie Ledouppe</title>
   </head>
   <body>
      <?php require '../public/includes/navbar.php' ?>

      <div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-12">
            <!-- <img src="https://kinostelux.lu/public/assets/img/doctor-picture.jpg" class="doctor-picture" alt=""> -->
           
            <div class="doctor-name">Virginie Ledouppe</div>
            <div class="doctor-job"><?= $doctor["virginie"]["doctor_job"] ?></div>
      
            <div class="doctor-icons">
 <a href="https://goo.gl/maps/gYWE6ajmfqPt8Svv6" target="blank"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-geo-alt"><h6><?= $doctor["titles"]["title_cabinet"] ?></h6></div></i></a></div>
          <a href="mailto:vledouppe.kine@gmail.com"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-envelope"><h6>EMAIL</h6></div></div></i></a>
         <a href="tel:00352621236973"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-telephone"><h6>+352 621 236 973</h6></div></div></i></a>
</div>
</div>
<div class="col-lg-4 col-12">

   <div class="doctor-spec-title"><?= $doctor["titles"]["title_speciality"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["virginie"]["specialities"] as &$val) { ?>
                <li><?= $val ?></li>
               <?php } ?>
            </ul>
     
</div>
<div class="col-lg-4 col-12">
<div class="doctor-spec-title"><?= $doctor["titles"]["title_language"] ?></div>
            <ul class="doctor-description">
               <?= $doctor["virginie"]["doctor_lang"] ?>
            </ul> 
         <div class="doctor-spec-title"><?= $doctor["titles"]["title_formation"] ?></div>
            <ul class="doctor-description">
            <?php foreach ($doctor["virginie"]["formation"] as &$val) { ?>
                <?= $val ?>
               <?php } ?>
            </ul>

</div>
            </div>
            <hr id="line-text">
            <!-- <div class="row">
     <div class="col-12 mikrono-box">
     <div id="mikrono"></div>
            <script type="text/javascript" language="javascript" src="https://backup.mikrono.com/myagenda/myagenda.nocache.js"></script>
            <script type="text/javascript" language="javascript" src="https://backup.mikrono.com/js/lz-string.min.js"></script>
            <script type="text/javascript" language="javascript">
               var owner_id="612364ab592f2052d5179c2f";
            </script>
            <a href="../public/cabinet.php">
    <button>
        <?= $home['availability'] ?>
    </button>
</a>
</div>
      </div> -->

      <iframe src="https://app.squarespacescheduling.com/schedule.php?owner=24532864" title="Prendre rendez-vous" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
     </div>
     <br/>
   </body>
</html>
