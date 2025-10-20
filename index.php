<h1> While loop </h1>


<?php
/*==================================
      While loop
==================================*/



/* loop -----> jokhon Akta kaj/design barbar/repetedly dekhate/use korte hoy, tokhon barbar aki design/kaj na likhe akta design akbar korey barbar use korar jonno 'loop' use kora hoy.
akhane shodo 'loop' k bole diley chole j, ami koto bar ae design ta dekhate chai.



// while loop syntex / structure

while ( condition/ loop ta kotobar cholbe ) {
   loop body / loop ta protibar kon kajta korbe;

}

*/
//example-1

$count = 1;

while ($count <= 5) {
   echo "Masud <br>"; // <br> is used for break
   $count++; // ata oporer variable er value er shate ak ak kore jog korbe.
}


echo "<br>";  //<br> is used for break


//example-2

$count = 1;

while ($count <= 5) {
   echo "Masud $count <br>"; // ami jodi $count variable er value ta dekhate chai, tahole avabe likhbo.
   $count++; // ata oporer variable er value er shate ak ak kore jog korbe.
}


echo "<br>";


//example-3

$count = 1;

while ($count <= 5) {
   echo "Masud $count <br>"; // ami jodi $count variable er value ta dekhate chai, tahole avabe likhbo.
   $count += 2; // ata variable shate 2 kore jog korbe.
}

// Note: loop chalanor shomoy kheyal rakhte hobe je, akta nirdisto somoy pore jeno condition ta 'false' hoye jai. ta na hole loop unlimited cholte thakbe and webstie hang hoye jabe.


echo "<br>";
?>



<!-- Work on html  -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>while loop use in a form</title>
</head>

<body>

   <form action="#">
      Year
      <select name="" id="">

         <?php

         $year = 2000;
         while ($year <= 2050) {
            ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>  

            <?php
            $year++;
         }
         ?>

      </select>
   </form>
  
<!-- Note: oporer method ta use korar somoy kheyal rakhte hobe je, jekhon amra 'php' tag er modde 'html' er design/tag use korbo, tokhon oi 'php' er tag k first karlibrases '{' er por close korte hobe and html er code/design er por abar 'php' tag soro korte hobe. mane holo '} ?>' er age soro korte hobe. 

Note: akta design er j part ta k dynamic korbo, tik tar opor 'php' tag use kore loop chalate hobe. jemon ta opore dekhano hoyeche.
-->


   <!--===== or  ====-->

   <form action="#">
      Years
      <select name="" id="">
         <?php
         $years = 2010;
         while ($years <= 2050) {

            echo "<option value='$years'>$years</option>"; // avabe use korle double quatetion and single quatetion er bisoyta kheyel rakhte hobe. akhane jevabe use kore hoyeche avabe use korte hobe.

            $years++;
         }

         ?>
      </select>
   </form>

</body>

</html>