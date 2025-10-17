<?php
	$alumnos = ["AGUILAR",
				"AVIÑA",
				"BARAJAS",
				"CARMONA",
				"CASTAÑO",
				"CASTILLO",
				"COLIN",
				"CORTES",
				"MONDRAGON",
				"VASQUEZ"];
	$calificaciones = ["0","1","2","3","4","5","6","7","8","9","10","NP"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caso Practico</title>
</head>
<body>
	<h1>Calificaciones</h1>
	<form method="POST" action="estadistica.php">
		<table border="">
			<tr>
				<th>Nombre</th>
				<th>Calificación</th>
			</tr>
			<?php foreach ($alumnos as $alumno):?>
			<tr>
				<td>
					<label><?php echo $alumno?></label>
				</td>
				<td>
					<select name="<?php echo $alumno?>">
						<?php foreach ($calificaciones as $calif): ?>
						<option><?php echo $calif ?></option>
						<?php endforeach ?>
					</select>
				</td>
			<?php endforeach ?>
			</tr>
		</table>
		<input type="submit">
	</form>
</body>
</html>