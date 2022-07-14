<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Loops</title>
</head>
<body>
   <?php
   echo "Hello Loops! </br>";

   $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
   foreach($pronouns as $pronoun){
      if($pronoun === "He/She"){
         echo "${pronoun} codes </br>";
      }else{
         echo "${pronoun} code </br>";
      }
   };
   echo "</br>";

   $amount_of_lines = 1;
   while ($amount_of_lines <= 100)
   {
      echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
      $amount_of_lines ++; 
   }
   echo "</br>";

   $iWhile = 0;
   while($iWhile <= 120){
      echo "${iWhile}</br>";
      $iWhile++;
   }

   for($iFor = 0; $iFor <= 120; $iFor++){
      echo "${iFor}</br>";
   }

   $nameStartup = array("name1", "name2", "name3", "name4", "name5");
   foreach($nameStartup as $name){
      echo "${name}</br>";
   }

   $countries = array("BE" => "Belgium", "EN" => "England", "FN" => "Finland", "GE" =>"Germany", "ESP" =>"Spain", "JP" => "Japan" , "KOR" =>"South Korea","AU" =>"Australia", "WA" =>"Wales", "IRE" =>"Ireland");
   echo "<select name='country>";
   foreach($countries as $country){
      echo "<option value='country'>${country}</option>";
   };
   echo "</select>"

   ?>
</body>
</html>