<html>  
<head>  
<title>Formulario.</title>  
</head>  

<body>  

<form method="POST" action="procesa_datos.php"> 
    <p>Nombre: <input type="text" name="T1" size="20"></p> 
    <p>Apellidos: <input type="text" name="T2" size="20"></p> 
    <p><input type="submit" value="Enviar" name="B1"></p> 
</form> 

</body> 
</html> 
=============================== 
<html>  
<head>  
<title>Formulario.</title>  
</head>  

<body>  

<?php 
$nombre = $_POST['T1']; 
$apellidos = $_POST['T2']; 

echo "$nombre $apellidos"; 
?> 

</body> 
</html>