<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <?php
        
        $link = mysqli_connect("localhost","root","","quiz");
        if(!$link){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM PREGUNTAS;";
        $resul = mysqli_query($link,$sql);
        
        echo "<table border = ><tr><th>Email</th><th>Enunciado</th><th>Respuesta Correcta</th><th>Respuesta Incorrecta 1</th> <th>Respuesta Incorrecta 2</th><th>Respuesta Incorrecta 3</th><th>Complejidad</th><th>Tema</th><th>Imagen</th></tr>";
        while($row = mysqli_fetch_array($resul)){

            echo "<tr><td>".$row['email']."</td><td>".$row['enunciado']."</td><td>".$row['respuestac']."</td><td>".$row['respuestai1']."</td><td>".$row['respuestai2']."</td><td>".$row['respuestai3']."</td><td>".$row['complejidad']."</td><td>".$row['tema']."</td><td><img src=\"data:image/*;base64, ".$row['imagen']."\" alt=\"Imagen\"/></td></tr>";
        }
        echo "</table>";
        mysqli_close($link);
    ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
