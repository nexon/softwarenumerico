<?php
/**
 * Jacobi
 *
 * Clase que implementa todo lo necesario para 
 * 
 * @author Esteban Orellana C.
 * @author Felo Rodriguez.
 * @author Alberto Lagos T.
 */
class Jacobi {
	var $_matriz;
	var $_algo;
	
	/**
	 * Constructor de la Clase Jacobi
	 *
	 * @author Alberto Lagos T.
	 * @param $param
	 * @return return type
	 */
	function __construct($param) {

	}
	
	/*
		public class Jacobi{
		    double [][]U;
		    double [][]Ut;
		    double [][]A;
		    protected String solutext = "Los Valores Propios Calculados Son: \n";
		    int n;
		
		
		    public Jacobi(int n, MainMatrix A){
		        this.n = n;
		        this.A = A.A;
		        U = new double[n][n];
		        Ut = new double[n][n];
		    }
		
		    public int[] encontrarMayor(){
		        int p = 0;
		        int q = 1;
		        int [] posicion =  new int[2];
		        double maximo=Math.abs(A[p][q]);
		        for(int i=0; i<n; i++){
		            for(int j=i+1; j<n; j++){
		                if(Math.abs(A[i][j])>maximo){
		                    p=i;
		                    q=j;
		                    maximo=Math.abs(A[i][j]);
		                }
		            }
		        }
		        posicion[0] = p;
		        posicion[1] = q;
		        return posicion;
		    }
		
		    public void establecerU(int[]posicion){
		        int p= posicion[0];
		        int q= posicion[1];
		        double angulo= (0.5)*Math.atan((2*A[p][q])/(A[q][q]-A[p][p]));
		        double coseno= Math.cos(angulo);
		        double seno = Math.sin(angulo);
		        U[p][p]= coseno;
		        U[p][q] = seno;
		        U[q][p] = -seno;
		        U[q][q] = coseno;
		        Ut[p][p]= coseno;
		        Ut[p][q] = -seno;
		        Ut[q][p] = seno;
		        Ut[q][q] = coseno;
		    }
		
		    public double[][] producto(double a[][], double b[][]) {
		       double suma = 0;
		        double result[][] = new double[a.length][a.length];
		        for(int i = 0; i < a.length; i++){
		            for(int j = 0; j < a.length; j++){
		                suma = 0;
		                for(int k = 0; k < a.length; k++){
		                    suma += a[i][k] * b[k][j];
		                }
		                result[i][j] = suma;
		            }
		        }
		        return result;
		   }
		
		    public double[] calcularValores(){
		        double [][] aux = new double[n][n];
		        double [] valores = new double[n];
		        double suma;
		        double elemento;
		        boolean salir = false;
		        while(!salir){
		            for(int i=0; i<n; i++){
		                for(int j=0; j<n; j++){
		                    U[i][j]=0.0;
		                    Ut[i][j]= 0.0;
		                    if(i==j){
		                        U[i][j]=1.0;
		                        Ut[i][j]=1.0;
		                    }
		                }
		            }
		            suma = 0.0;
		            establecerU(encontrarMayor());
		            aux = producto(A, U);
		            A = producto(Ut, aux);
		            for(int i=0; i<n; i++){
		                for(int j=0; j<n; j++){
		                    if(i!=j){
		                        elemento = A[i][j];
		                        suma = suma + Math.abs(elemento);
		                    }
		                }
		            }
		            if(suma < 0.000001){
		                salir = true;
		            }
		        }
		        for(int k=0; k<n; k++){
		            valores[k] = A[k][k];
		        }
		        return valores;
		    }
	
	*/
}
?>