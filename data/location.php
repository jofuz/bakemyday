<?php
if (isset($_POST['lat'],$_POST['lng'])) {
   $xml =  new DomDocument("1.0", "UTF-8");
   $xml->load("visitors.xml");

   $latVal = $_POST['lat'];
   $lngVal = $_POST['lng'];

   $rootTag = $xml->getElementByTagName("visitors")->item(0);

      $visitor = $xml->createElement("visitor");

         $latitude = $xml->createElement("latitude", $latVal);
         $longitude = $xml->createElement("longitude", $lngVal);

      $visitor->appendChild($latitude);
      $visitor->appendChild($longitude);

   $rootTag->appendChild($visitor);


   $xml->save("visitors.xml");
}
?>