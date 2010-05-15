<?php
include_once 'matriz.class.php';
/**
 * Gauss
 *
 * Clase que resuelve sistema de ecuaciones lineales por el metodo de Gauss.
 *
 * @author Alberto Lagos T.
 * @author Alberto Lagos T. 
 * @author Alberto Lagos T.
 */
 
 //[1 1 1 5;2 -1 -1 1;1 -2 -1 -3]
class Gauss {
	var $matriz;
	var $vector;
	var $col;
	var $fil;

	
	/**
	 * Constructor de la clase gauss
	 *
	 * @author Alberto Lagos T.
	 * @param $matriz
	 * @return void
	 */
	function __construct($matriz, $vector) {
		$finalMat = array();
		$finalVec = array();
		/* PARSEAMOS EL VECTOR */
		$tmp = substr($vector, 1, -1);
		$tmp = explode(';', $tmp);
		for($i = 0;$i<count($tmp);$i++) {
			$finalVec[$i] = (double)$tmp[$i];
		}
		/* PARSEAMOS LA MATRIZ AGREGANDO EL VECTOR */
		 $tmpMat = substr($matriz, 1, -1);
		 $tmpMat = explode(';', $tmpMat);
		 //[1 2 3;7 8 9;2 5 6]
		 $k = 0;
		 for($i = 0;$i<count($tmpMat);$i++){
		 	$tmp = explode(' ', $tmpMat[$i]);
	 		for ($j = 0; $j < count($tmp); $j++) {
			 	$finalMat[$i][$j] = (double)$tmp[$j];
		 	}	 	
		 }
		 
		
	
		$this->fil = count($this->vector);
		$this->col = count($this->matriz[0]);
		$this->matriz  = $finalMat;
		$this->vector  = $finalVec;
	}
		
	/**
	 * Metodo para mostrar la Matriz
	 *
	 * @author Alberto Lagos T.
	 * @return array
	 */
	function getMatriz() {
		return $this->matriz;
	}
	
	/**
	 * Metodo para mostrar el Vector b
	 *
	 * @author Alberto Lagos T.	
	 * @return return type
	 */
	function getVector(){
		return $this->vector;
	}
	
	/**
	 * Resuelve el sistema de ecuaciones dado
	 *
	 * @author Alberto Lagos T.
	 * @return arreglo
	 */
	function solve() {
		//aplicamos Gauss.
		$this->metodoGauss();
		/* Sustitución Hacia atrás */
		for ($k = count($this->vector)-1; $k>=0; $k--) {
			$tmp = 0;
			for($j = $k+1;$j<count($this->matriz);$j++) {
				$tmp += $this->matriz[$k][$j]*$this->vector[$j];
			}
			$this->vector[$k] = $this->vector[$k] - $tmp;
			$this->vector[$k] *= 1/$this->matriz[$k][$k];
		}
	}
	
	/**
	 * Funcion que realiza el algoritmo de Gauss.
	 *
	 * @author Alberto Lagos T.	
	 * @return array
	 */
	function metodoGauss() {
		for ($k = 0; $k < count($this->matriz)-1; $k++) {
			for ($i = $k+1; $i < count($this->matriz); $i++) {
				$numeroTemporal = $this->matriz[$i][$k]/$this->matriz[$k][$k];
				$this->matriz[$i][$k] = 0;
				for ($j = $k+1; $j < count($this->matriz); $j++) {
					$this->matriz[$i][$j] = $this->matriz[$i][$j] - ($numeroTemporal*$this->matriz[$k][$j]);
				}
				$this->vector[$i] = $this->vector[$i] - ($numeroTemporal*$this->vector[$k]);
			}
		}	
   	}	
}
?>