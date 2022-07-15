<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP functions</title>
</head>
<body>
   <?php
   echo "Hello functions!";
   echo "</br>";
   echo ucfirst("émile");
   echo "</br>";
   echo date('Y');
   echo "</br>";
   echo date('l jS \of F Y h:i:s A');
   echo "</br>";
   
   function sum($nb0ne, $nbTwo){
      if(gettype($nb0ne) === "integer" && gettype($nbTwo) === "integer"){
         return $nb0ne + $nbTwo;
      } else {
         return "Error: argument is the not a number.";
      };
   };
   echo sum(99, 1223);

   $words = explode(" ", "In code we trust!");
   echo "<pre>";
   echo var_dump($words);
   echo "</pre>";
   echo "</br>";
   foreach ($words as $w) {
      $acronym .= strtoupper(mb_substr($w, 0, 1));
   }
   echo $acronym;


   $word = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
   $word2 = array("cæcotrophie", "chænichthys","microsphæra", "sphærotheca");
   echo "</br>";
   function replaceAe($word){
      foreach($word as $w){
         echo str_replace("ae", "æ", $w);
         echo "</br>";
      };
   }
   function replaceAeInvert($word){
      foreach($word as $w){
         echo str_replace("æ", "ae", $w);
         echo "</br>";
      };
   }
   replaceAe($word);
   echo "</br>";
   replaceAeInvert($word2);

   function feedback($message, $classValue = "info"){
      echo "<div class='{$classValue}'>{$message}</div>";
   };
   echo "</br>";
   feedback("Incorrect email address");

   echo "</br>";
   echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

   echo "</br>";
   function calculate_cone_volume($height, $ray){
      $volume = $ray * $ray * 3.14 * $height * (1/3);
      echo "The volume of a cone which ray is ${$ray} and height is ${height} = $volume cm<sup>3</sup><br />";
   };

   calculate_cone_volume(2,5);
   calculate_cone_volume(3,4);
   ?>
</body>
</html>