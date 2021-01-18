<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Images/logo.png" type="image/x-icon">
    <script src="Js/custom.js"></script>
    <title>Xml table</title>
  </head>
  <body>
    <h1 class="kop">Xml table</h1>

    <div class="line"></div>
    <table datasrc="#people" onclick="test()">
        <?php
            echo "<?xml version='1.0' encoding='UTF-8'?>";
            $xml = simplexml_load_file("personen.xml") or die("Error");

            for($i=0; $i<Count($xml->person); $i++)
            {
                echo "<tr>
                        <td>".$xml->person[$i]->name."</td>
                        <td>".$xml->person[$i]->lastName."</td>
                        <td>".$xml->person[$i]->gender."</td>
                        <td>".$xml->person[$i]->hairColor."</td>
                        <td>".$xml->person[$i]->height."</td>
                        <td>".$xml->person[$i]->age."</td>
                      <tr>";
            }
         ?>
    </table>
  </body>
</html>
