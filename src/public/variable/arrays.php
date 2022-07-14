<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP arrays</title>
</head>
<body>
   <?php
   $familyName = array("A", "B", "C", "D", "E");
   print_r($familyName);
   echo "</br>";
   var_dump($familyName); 
   echo "</br>";
   $favRecipes = ["couscous","pizza", "burger", "pasta"];
   print_r($favRecipes[1]);
   $favCountries = array();
   $favCountries[0] = "Belgium";
   $favCountries[1] = "Australia";
   $favCountries[2] = "England"; 
   echo "<pre>";
   print_r($favCountries);
   echo "</pre>";
   array_push($favCountries, "Germany");
   echo "<pre>";
   print_r($favCountries);
   echo "</pre>";

   $me = array(
      "firstName" => "Louis",
      "lastName" => "Collard",
      "age" => "25",
      "country" => "Belgium"
   );
   echo "<pre>";
   print_r($me["firstName"]);
   echo "</pre>";

   // Last exercise 

   $web_development = array(
      'frontend' => array(),
      'backend' => array()
   );

   array_push($web_development["frontend"], "xhtml");
   array_push($web_development["backend"], "Ruby on Rails");
   array_push($web_development["frontend"], "CSS");
   array_push($web_development["backend"], "Flash");
   array_push($web_development["frontend"], "JavaScript");
   $web_development["frontend"][0] = "html";
   array_pop($web_development["backend"]);

   echo "<pre>";
   print_r($web_development);
   echo "</pre>";

   ?> 
</body>
</html>