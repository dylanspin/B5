<?php
  $xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
  header("Content-type: text/xml");
  echo "<?xml version='1.0' encoding='UTF-8'?>";
  echo "<people>";
  for($i=0; $i<Count($xml->person); $i++)
  {
    echo "<person>
               <name>".$xml->person[$i]->name."</name>
               <lastName>".$xml->person[$i]->lastName."</lastName>
               <gender>".$xml->person[$i]->gender."</gender>
               <hairColor>".$xml->person[$i]->hairColor."</hairColor>
               <height>".$xml->person[$i]->height."</height>
               <age>".$xml->person[$i]->age."</age>
             </person>";
  }
  echo "</people>";
 ?>
