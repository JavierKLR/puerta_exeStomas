<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<script type="text/javascript">
  function actualizar(){location.reload(true);}
//Función para actualizar cada 4 segundos(4000 milisegundos)
  setInterval("actualizar()",4000);
</script>
<nav class="red-text.text-accent-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Puerta.EXE</a>
    
  </nav>

<body>
  <style>
    #doce{
  border: 1px solid black;
    }

    
  </style>

  <?php
  $data = json_decode(file_get_contents("https://api.thingspeak.com/channels/873320/feeds.json?results=50/api_key=field1"),true);
  echo"<br>";
  

$longitud = count($data);
echo"<br>";
echo"<br>";
$d = $data['feeds'];
$doce ="doce";

echo "<div class= 'container'>";
echo "<table class='striped highlight' id=".$doce.">
      <thead>
      <th>ID</th>
      <th>FECHA</th>
      <th>USUARIO</th>
      </thead>";
for ($i = sizeof($d) - 1 ; $i > -1 ; $i--) {
  $value = $d[$i];
  

  //foreach ($d as $key => $value) {
    //<td>".( (new DateTime($value["created_at"]))->format("Y-m-d H:i") )."</td>"; hora antigua
  echo "
    <tr>
    <td>".($value["entry_id"])."</td>

    
    <td>".($value["field2"])."</td>";
    if ($value["field1"]  == "No encontrado") {
      echo"<td  style= 'color:#ff0000;'>".($value["field1"])."</td>";
      
    }else{
      $str = $value["field1"];
      $lol = explode('.',$str);
       // echo"<td>".substr(($value["field1"]),0,-4)."</td>";    
       echo"<td>".$lol[0]."</td>";  
    }
    
    echo"</tr>";
    
    

}
  echo"</table>";

echo "</div>";


//$jpg = "asdas.jpg";
//print_r(explode('.',$jpg[1]));
//print(substr($jpg, 0,-4)); 
echo"<br>";
$str = "Hello.weas";
$lol = explode('.',$str);
 

?>   

</body>


    
        
    

</body>
</html>
