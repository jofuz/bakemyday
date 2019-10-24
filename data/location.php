<?php
// if the $_POST information exists, execute the following commands
if (isset($_POST['lat'], $_POST['lng'])) {
   // set the version and encoding for the XML file
   $xml =  new DomDocument("1.0", "UTF-8");

   // open the visitors.xml file
   $xml->load("visitors.xml");

   // assign the latitude value to latVal
   $latVal = $_POST['lat'];

   // assign the longitude value to lngVal
   $lngVal = $_POST['lng'];

   // set the root tag of the XML file as <visitors>
   $rootTag = $xml->getElementsByTagName("visitors")->item(0);

   // create the <visitor> tag
   $visitor = $xml->createElement("visitor");

   // create the <latitude> tag and insert the latitude value
   $latitude = $xml->createElement("latitude", $latVal);

   // create the <longitude> tag and insert the longitude value
   $longitude = $xml->createElement("longitude", $lngVal);

   // close the latitude tag - </latitude>
   $visitor->appendChild($latitude);
   // close the longitude tag - </longitude>
   $visitor->appendChild($longitude);

   // close the root tage - </visitor>
   $rootTag->appendChild($visitor);

   // save the file
   $xml->save("visitors.xml");
}
