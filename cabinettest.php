<!doctype html>
<html lang="fr">
   <head>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-MG3RRWK');</script>
      <!-- End Google Tag Manager -->
      <link rel="shortcut icon" type="image/x-icon" href="https://kinostelux.lu/public/assets/img/browser-img.jpg">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../public/assets/scss/style.css"> 
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!-- Adobe -->
      <link rel="stylesheet" href="https://use.typekit.net/dtq7qfb.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- font-awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />  
      <!-- localize -->
      <script src="https://global.localizecdn.com/localize.js"></script>
      <script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>
      <script>
         Localize.initialize({
            key: 'RleGNc5cAS1Xw',
            rememberLanguage: true,
         });
      </script>
      <title>cabinet</title>
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe id="localize_iframe" src="https://www.googletagmanager.com/ns.html?id=GTM-MG3RRWK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->  
      <div class="logo"><a href="#"><img src="../public/assets/img/kinostelux-logo1210.svg"></a></div>
      <br/>
      <br/>
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="doctor-name">Toutes les disponibilités du cabinet</div>
               <div class="doctor-icons">
                  <a href="https://goo.gl/maps/gYWE6ajmfqPt8Svv6" target="blank">
                     <div class="doctor-icon-container">
                        <div class="icon-box">
                           <i class="bi bi-geo-alt"></i>
                           <h6>ADRESSE</h6>
                        </div>
                     </div> 
                  </a>
               
                  <a href="mailto:kinostelux@gmail.com">
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
                           <i class="bi bi-telephone"></i>
                           <h6>+352 24 87 30 92 </h6>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <br/>
      <br/>
      <br/>

      <!-- localize end -->
      <script>
         // Set up a listener so we can set the language to whatever the language is in the parent window.
         window.addEventListener("message", receiveMessage, false);

         function receiveMessage(event) {
            console.log('post message', event.data && event.data.to)
            if (event.origin !== "https://kinostelux.lu" && !event.origin.includes('localhost')) return;
            console.log('event', event.origin, event.data)
            if (event.data && event.data.to) {
               console.log('aa', Localize.setLanguage)
               Localize.setLanguage(event.data.to);
            }
         }

         Localize.on("setLanguage", function(data) {
            const nodelist = document.querySelectorAll('iframe[id^="widget_"]');
            if (nodelist.length) {
               const iframe = nodelist[0]
               iframe.contentWindow.postMessage(data, '*');
               console.log('message  posted')
            } else {
               console.warn("Iframe not found")
            }
         });

         // Localize.initialize({
         //    key: 'RleGNc5cAS1Xw', 
         //    rememberLanguage: true,
         //    disableWidget: true,
         // });
      </script>
      <!-- localize end -->
      <script src="//widget.simplybook.it/v2/widget/widget.js"></script>
      <script>var widget = new SimplybookWidget({"widget_type":"iframe","url":"https:\/\/kinostelux.simplybook.it","theme":"dainty","theme_settings":{"timeline_show_end_time":"1","timeline_hide_unavailable":"1","hide_past_days":"0","sb_base_color":"#353f5e","secondary_color":"#e4ebf5","sb_text_color":"#a1a1a1","display_item_mode":"list","body_bg_color":"#ffffff","sb_background_image":"","sb_review_image":"","dark_font_color":"#353f5e","light_font_color":"#ffffff","sb_company_label_color":"#ffffff","sb_cancellation_color":"#ff7a93","hide_img_mode":"1"},"timeline":"modern_week","datepicker":"inline_datepicker","is_rtl":false,"app_config":{"allow_switch_to_ada":0,"predefined":[]}});</script>
   </body>
</html>
