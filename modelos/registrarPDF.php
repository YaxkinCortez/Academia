<?php
require 'conexion.php';
session_start();
$iduser = $_SESSION['num_control'];
$motivo = $_POST['motivo'];
$mayus = strtoupper($motivo);
$sql = "SELECT * FROM alumnos WHERE num_control='$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
//hora del sistema
$time = time();

$control = $row['num_control'];
$fecha = date("d-m-Y", $time);

$sql2 = "INSERT INTO justificantes (alumno, fecha) VALUES ('$control', '$fecha')";

if (empty($_POST['motivo'])) {
    echo '<script type="text/javascript">
	alert("Llenar campos, Motivo");
	window.location.href="../vistas/justificantes.php";
  </script>';
} else {
    if ($conn->query($sql2) === true) {
        require_once __DIR__ . '../../mpdf/vendor/autoload.php';

        $html = '
<body>
	<div class="cabezote">
	<img src="../images/justificante/cabezote.png">
	</div>
	<p class="asunto">
	ASUNTO: JUSTIFICANTE
	<br>
	POZA RICA, VER  ' . date("d-m-Y", $time) . '
    </p>
	<p class="docente">
	DOCENTES DE ING. SISTEMAS COMPUTACIONALES
	<br>
	DEL ITSPR
	<br>
	PRESENTES
	</p>
	<br><br>
	<p class="principal">
	Por este medio Informo a Ud. que el alumno ' . $row['nombre'] . ' ' . $row['apellidos'] . ' con Numero de Control ' . $row['num_control'] . '
	del semestre ' . $row['semestre'] . ' y grupo ' . $row['grupo'] . ', no asistió a clases por MOTIVOS DE '.$mayus.' el día ' . date("d-m-Y", $time) . '
	por lo que solicito a Ud. de la manera más atenta justifique sus
	faltas, aplique exámenes, reciba los trabajos y actividades pendientes.
	<br>
	Sin más por el momento reciba de mi parte un cordial saludo.
	</p>
	<br><br>
	<p class="firma">
	ATENTAMENTE
	</p>
	<div class="imagenfirma">
	<img src="../images/justificante/firma.png">
	</div>
	<br>
	<p class="firma">
	Dr. Jose Antonio García Mejía
	<br>
	Encargado de Departamento de ING. Sistemas COMPUTACIONALES
	</p>
	<br><br><br><br><br><br><br><br><br><br>
	<footer>
	<div class="pie">
		<img src="../images/justificante/pie.png">
	</div>
</footer>
</body>';

        $mpdf = new \Mpdf\Mpdf();
        $css = file_get_contents('../css/justificante.css');
        $mpdf->WriteHTML($css, 1);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    } else {
        die("error" . $conn->error);
    }
}
