<?php
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
	var $matrizFinal;
	var $sol;
	
	/**
	 * Constructor de la clase gauss
	 *
	 * @author Alberto Lagos T.
	 * @param $matriz
	 * @return void
	 */
	function __construct($matriz, $orden = 0) {
		 $tmpMat = substr($matriz, 1, -1);
		 $tmpMat = explode(';', $tmpMat);
		 //[1 2 3;7 8 9;2 5 6]
		 $finalMat = array();
		 $finalVect = array();
		 $k = 0;
		 for($i = 0;$i<count($tmpMat);$i++){
		 	$tmp = explode(' ', $tmpMat[$i]);
	 		for ($j = 0; $j < count($tmp); $j++) {
	 			if($j == count($tmp)-1) {
	 				$finalVect[$k] = (double)$tmp[$j];
	 				$k++;
	 			} else {
		 			$finalMat[$i][$j] = (double)$tmp[$j];
		 		}
	 			
	 		}	 	
		 }

		$this->matriz = $finalMat;
		$this->vector = $finalVect;
	}
		
	/**
	 * Hace pivote en el caso de que se necesite hacer.		
	 *
	 * @author Alberto Lagos T.
	 * @param $fila
	 * @return void
	 */
	function doPivot($p) {
		//INICIO: Pivotea y Cambia.
		  $max = $p;
		  for($k=$p+1;$k<count($this->matriz);$k++) {
		      if(abs($this->matriz[$k][$p])>abs($this->matriz[$max][$p])) {
		          $max = $k;
		      }
		  }
		  if($this->matriz[$max][$p] != 0) {
		      $this->changeRows($max, $p);
		  }
		  //FIN: Pivotea y Cambia.
	}
	
	/**
	 * Cambia filas
	 *
	 * @author Alberto Lagos T.
	 * @param $a, $p
	 * @return void
	 */
	function changeRows($a, $p) {
		$tmp   = array();
		$tmpB  = array();
		$tmpB1 = array();
		for($i=0;$i<count($this->matriz);$i++) {
	        $tmp[$i] = $this->matriz[$a][$i];
	        $this->matriz[$a][$i] = $this->matriz[$p][$i];
	        $this->matriz[$p][$i] = $tmp[$i];
        }
        $tmpB = $this->vector[$a];
        $this->vector[$a] = $this->vector[$p];
        $this->vector[$p] = $tmpB;
		
		
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
		for ($i = count($this->vector)-1; $i > 0; $i--) {
			$tmp = 0;
			for ($j = $i+1; $j < count($this->vector); $j++){
				$tmp += $this->vector[$i]*$this->vector[$j];	
			}
			$this->vector[$i] = (1/$this->matriz[$i][$i])*($tmp); 
		}
		//$this->matriz = array_merge($this->matriz, array($this->vector));
	}
	
	/**
	 * Funcion que realiza el algoritmo de Gauss.
	 *
	 * @author Alberto Lagos T.	
	 * @return array
	 */
	function metodoGauss() {
		$tmp = array();
		for($p=0;$p<count($this->matriz);$p++) {
	       $this->doPivot($p);
			for($i=$p+1;$i<count($this->matriz);$i++) {
				$aux = (double)($this->matriz[$i][$p]/$this->matriz[$p][$p]);
				$this->matriz[$i][$p] = 0;
				$this->vector[$i] = (double)($this->vector[$i]-$aux*$this->vector[$p]);
				for($j=$p+1;$j<count($this->matriz);$j++) {
					$this->matriz[$i][$j] = (double)($this->matriz[$i][$j]-$aux*$this->matriz[$p][$j]);
				}
			}
		
		}
	}
	
}
?>