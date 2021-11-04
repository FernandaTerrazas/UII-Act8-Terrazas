<?php include ("header.php");?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Telcel es la red</h1>
			</div>

			<div class="articulo">
				<article>
                <h1>Inicia Sesion</h1>

<form action="/action_page.php">
  <label for="fname">Nombre:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Apellido:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="fname">Contraseña</label>
  <input type="password" id="fname" name="fname"><br><br>
  <input type="submit" value="Enviar"><br>
  </form>
<p><br> Presiona el boton "Enviar" para guardar la informacion del formlario en el servidor.</p>
				</article>
			</div>
			<?php include ("sidebar.php");?>
		</div>
	</section>
    <?php include ("footer.php");?>
</body>