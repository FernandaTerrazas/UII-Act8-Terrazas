<?php include ("header.php");?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Telcel es la red</h1>
			</div>

			<div class="articulo">
				<article>
                 <?php         
       
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <h2>Registrate</h2>
      
      <form method = "post" action = "/php/php_form_introduction.htm">
         <table>
            <tr>
               <td>Nombre:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>Correo Electronico:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Contraseña:</td>
               <td><input type = "password" name = "website"></td>
            </tr>
                               
            <tr>
               <td>Genero:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Femenino
                  <input type = "radio" name = "gender" value = "male">Masculino
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Enviar">
               </td>
            </tr>
         </table>
      </form>
      
      <?php
         echo "<h3>Tus datos enviados son: </h3>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
      </article>
			</div>
			<?php include ("sidebar.php");?>
		</div>
	</section>
    <?php include ("footer.php");?>
</body>