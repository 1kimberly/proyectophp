<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php 
  echo"<H1> Hola mundo </H1> ";
  $nombre= "kimberly Morales";
  $edad="16";
  
  echo '<h3>'.$nombre.'edad:'.$edad.'años</h3>';

  $edad .=10 ;
  echo "´<h3>.$edad.</h3>´";
//condicionales
if($edad > 17){
    echo '<h3>Es mayor de edad</h3>';
} else {
    echo '<h3>Es menor de edad</h3>';
}
 for ($k =1 ; $k<=5; $k++){
     echo ' <h5> iteracion #' .$k.'</h5>';
 }
 
 function sayhello(){
     echo '<h2> hola khe hace</h2>';
 }

 function suma(){
     $suma1= 5;
     $suma2= 10;

     return $suma1 + $suma2;
 }
   sayhello();

   echo suma()."\n";

   $array=array(
       0 => "jeimmy",
       1 => "kimberly",
       2 => "patricio Estrella"
   );

  

   for($j=0; $j < 3; $j++){
       echo $array[$j]."\n";
   }


 ?>


  

  

</body>
</html>