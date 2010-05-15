<?php
include_once 'classes/gauss.class.php';

if(isset($_POST['opcion'])) {
	switch ($_POST['opcion'])	{
		case 'gauss':
			$gauss = new Gauss($_POST['matriz'], $_POST['vector']);
			$gauss->solve(); //obtenerMatriz()
			$val = array('matriz' => $gauss->getMatriz(), 'vector' => $gauss->getVector());
			//$val = array('matriz' => $gauss->obtenerMatriz() 'vector' => $gauss->obtenerVector());
		break;
		case 'jacobi':
		break;
		case 'krylov':
		break;
	}
} else {
	$val = array('matriz' => 'NADA A SIDO ENVIADO');
}
echo json_encode($val);
//[3 2 1 6;1 -1 2 2;2 -1 2 3]
?>