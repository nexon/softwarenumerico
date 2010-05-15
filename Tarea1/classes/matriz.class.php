<?php
/**
 * Matriz
 *
 * Clase que convierte una matriz dada (en formato matlab) a una matriz operable en php
 * 
 * @author Alberto Lagos T.
 */
class Matriz {
	var $_matriz;
	var $_vector;
	
	/**
	 * Constructor de la clase Matriz
	 *
	 * @author Alberto Lagos T.
	 * @param $dato
	 * @return $string
	 */
	function Matriz($dato){
		$tmpMat = substr($dato, 1, -1);
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
		
		$this->_matriz = $finalMat;
		$this->_vector = $finalVect;
	}
	
	/**
	 * Devuelve la matriz;
	 *
	 * @author Alberto Lagos T.
	 * @return return type
	 */	
	function obtenerMatriz() {
		return $this->_matriz;
	}
	
	/**
	 * Devuleve el vector
	 *
	 * @author Alberto Lagos T.
	 * @return return type	
	 */
	function obtenerVector() {
		//code
	}
	
	/**
	 * Setea el elemento en la fila i, columna j
	 *
	 * @author Alberto Lagos T.
	 * @param $i
	 * @param $j
	 * @return Double
	 */
	function setearElemento($i, $j) {
		//code
	}
}
?>