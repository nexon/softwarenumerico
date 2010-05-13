<?php
include_once 'classes/gauss.class.php';

if(isset($_POST['opcion'])) {
	switch ($_POST['opcion'])	{
		case 'gauss':
			$gauss = new Gauss($_POST['matriz']);
			$gauss->solve();
			$val = array('matriz' => $gauss->getMatriz(), 'vector' => $gauss->getVector());
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

?>