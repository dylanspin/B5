 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/guestBook.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="Images/logo.png" type="image/x-icon">
     <script src="Js/custom.js"></script>
     <title>Xml table</title>
   </head>
   <body>
     <h1 class="kop">Guest Book</h1>
     <hr>
     <?php
         echo "<?xml version='1.0' encoding='UTF-8'?>";
         $xml = simplexml_load_file("gastenBoek.xml") or die("Error");

         for($i=0; $i<Count($xml->note); $i++)
         {
            echo '<div class="note">
                     <h1>'.$xml->note[$i]->title.'</h1>
                     <h4>
                        To : '.$xml->note[$i]->to.'
                        From : '.$xml->note[$i]->from.'
                     </h4>
                     <p>'
                      .$xml->note[$i]->message.
                    '</p>
                    <div class="line"></div>
                   </div>';
         }
      ?>
   </body>
 </html>
