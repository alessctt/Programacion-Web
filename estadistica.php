<?php
    $alumnos = ["AGUILAR" => $_REQUEST["AGUILAR"],
      "AVIÑA" => $_REQUEST["AVIÑA"],
      "BARAJAS" => $_REQUEST["BARAJAS"],
      "CARMONA" => $_REQUEST["CARMONA"],
      "CASTAÑO" => $_REQUEST["CASTAÑO"],
      "CASTILLO" => $_REQUEST["CASTILLO"],
      "COLIN" => $_REQUEST["COLIN"],
      "CORTES" => $_REQUEST["CORTES"],
      "MONDRAGON" => $_REQUEST["MONDRAGON"],
      "VASQUEZ" => $_REQUEST["VASQUEZ"]
    ];
    $suma = 0;
    $recorrido = 0;
    $aprob = 0;
    $reprob = 0;
    $MyPcalif = [];
    $AreaOp = [];
    $NP = [];

    foreach ($alumnos as $alumno) {
      if (is_numeric($alumno)) {
        $suma += $alumno;
        $recorrido++;
      }
    }
    foreach ($alumnos as $alumno) {
      if (is_numeric($alumno)) {
        $calif = $alumno;
        $MyPcalif[] = $calif;
        if ($calif >= 6) {
          $aprob++;
          } else {
            $reprob++;
          }
        }
      }
    $mejorcalif = max($MyPcalif);
    $peorcalif =min($MyPcalif);

    foreach ($alumnos as $nombre => $calif) {
      if ($calif < 6) {
        $AreaOp[$nombre] = $calif;
      }
    }

    foreach ($alumnos as $nombre => $calif) {
      if ($calif == "NP") {
        $NP[] = $nombre;
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    h1 {
      text-align: center;
    }
    table {
      border-collapse: collapse;
    }
  </style>
</head>
<body>
    <h1>ESTADISTICAS</h1>
    <table border="1px">
      <?php if ($recorrido > 0) { 
        $promedio = $suma / $recorrido; 
      } ?>
    <tr>
      <td>
        <h2>Aprovechamiento general: <?php echo $promedio ?></h2>
      </td>
    </tr>
    <tr>
      <td>
          <?php if ($recorrido > 0) { 
            $porcA = ($aprob / $recorrido) * 100; 
          } ?>
        <h2>% de Aprobados: %<?php echo $porcA?></h2>
          <?php if ($recorrido > 0) {
           $porcR = ($reprob / $recorrido) * 100; 
          } ?>
    <h2>% de Reprobados: %<?php echo $porcR?></h2>
      </td>
    </tr>
    <tr>
      <td>
    <h2>Mejor Calificación: <?php echo $mejorcalif ?></h2>
    <h2>Peor Calificación: <?php echo $peorcalif ?></h2>
      </td>
    </tr>
    <tr>
      <td>
        <h2>Alumnos en área de oportunidad:</h2>
        <ul>
          <?php if (count($AreaOp) > 0): ?>
            <?php foreach ($AreaOp as $nombre => $calif): ?>
              <li><?php echo $nombre . " (". $calif . ")" ; ?></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </td>
    </tr>
    <tr>
      <td> 
        <h2>Alumnos NP:</h2>
        <ul>
          <?php if (count($NP) > 0): ?>
            <?php foreach ($NP as $nombre): ?>
            <li><?php echo $nombre; ?></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </td>
    </tr>
</table>
</body>
</html>