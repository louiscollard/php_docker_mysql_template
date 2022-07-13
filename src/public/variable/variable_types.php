<html>
 <head></head>
 <body>
   <?php 
   $first_name = "Louis";
   $age = 25;
   $eyes_color = "green";
   $name_of_people = array(
      0 => "name1",
      1 => "name2",
      2 => "name3",
      3 => "name4",
   );
   $are_you_hungry = true;
   ?>
   <p>Hi! My name is <?php echo $first_name ?></p>
   <p>I am  <?php echo $age ?> years old.</p>
   <p>My eyes are <?php echo $eyes_color ?></p>
   <p>The first person is <?php echo $name_of_people[0] ?></p>
   <p>Are you hungry? <?php if($are_you_hungry){echo "Yes, I'm hungry!";}else{ echo "No, I'm fine";}?></p>
 </body>
</html>