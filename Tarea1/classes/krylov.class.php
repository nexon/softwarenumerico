<?php
/**
 * Krylov
 *
 * Clase que implementa lo necesario para obtener los vaps via krylov
 * 
 * @author Alberto Lagos T.
 */
class Krylov {
	/*
	public class Bairstow {
	   public Bairstow(double a[], double r0, double s0, double re[], double im[]) {
	    int n = a.length, iter =0;
	    double b[] = new double[n], c[] = new double[n];
	    double ea1 = 1, ea2 = 1, T = 0.00001;
	    double r=r0, s=s0,det, ds, dr;
	    int MaxIter = 100, i;
	
	   for(iter=0; iter< MaxIter && n>3; iter++)
	    {
	      do {
	        Division_Derivada(a, b, c, r, s, n);
	
	
	        System.out.println("Solucionando ");
	        System.out.print("fn(x) = "); imprime(a, n);
	        System.out.print("fn-2(x) = "); imprime2(b, n);
	        System.out.println("f2(x) = x2 + " + r + "x + " + s);
	        System.out.println(c[2] + " " + c[3] + " = " + -b[1]);
	        System.out.println(c[1] + " " + c[2] + " = " + -b[0]);
	
	        det = c[2]*c[2] - c[3]*c[1];
	        if(det!=0)
	        {
	          dr = (-b[1]*c[2] + b[0]*c[3])/det;
	          ds = (-b[0]*c[2] + b[1]*c[1])/det;
	          /*
	          System.out.println("*********************************");
	          System.out.println(r+dr +" = " + r + " + " + dr);
	          System.out.println(s+ds +" = " + s + " + " + ds);
	          System.out.println("-----------------------------------");
	          r = r+dr;
	          s = s+ds;
	          if(r!=0) ea1 = Math.abs(dr/r)*100.0;
	          if(s!=0) ea2 = Math.abs(ds/s)*100.0;
	        }
	        else
	        {
	          r = 5*r+1;
	          s = s+1;
	          iter = 0;
	        }
	      }
	      while ((ea1 > T) && (ea2 > T));
	      raices(r, s, re, im, n);
	      System.out.println("iter " +iter);
	      System.out.print("fn(x) = "); imprime(a, n);
	      System.out.print("fn-2(x) = "); imprime2(b, n);
	      System.out.println("f2(x) = x2 -(" +r + ")x -(" +s +")");
	      n = n-2;
	      for(i=0; i<n; i++)
	        a[i] = b[i+2];
	      if (n < 4) break;
	    }
	    if(n==3)
	    {
	      System.out.println("n = " + n);
	      r = -a[1]/a[2];
	      s = -a[0]/a[2];
	      imprime(a, n);
	      raices(r, s, re, im, n);
	    }
	    else
	    {
	      re[n-1] = -a[0]/a[1];
	      im[n-1] = 0;
	    }
	    for(i=1; i<re.length; i++)
	      System.out.println( "X["+i+"]= " + re[i] + " j " + im[i]);
	  }
	
	      public static void Division_Derivada(double a[], double b[], double c[], double r, double s, int n)
	  {
	    int i;
	
	    b[n-1] = a[n-1];
	    b[n-2] = a[n-2] + r*b[n-1];
	
	    c[n-1] = b[n-1];
	    c[n-2] = b[n-2] + r*c[n-1];
	
	    for(i=n-3; i>=0; i--)
	    {
	      b[i] = a[i] + r*b[i+1] + s*b[i+2];
	      c[i] = b[i] + r*c[i+1] + s*c[i+2];
	    }
	
	  }
	
	  public static void imprime(double x[], int n)
	  {
	    int i;
	
	    for (i = n - 1; i >= 0; i--)
	      if(x[i] > 0) System.out.print("+ " +x[i] + "x"+i+" ");
	      else System.out.print("- " + -x[i] + "x"+i+" ");
	    System.out.println("");
	  }
	
	  public static void imprime2(double x[], int n)
	  {
	    int i;
	
	    for (i = n - 1; i >= 2; i--)
	      if(x[i] > 0) System.out.print("+ " +x[i] + "x"+(i-2)+" ");
	      else System.out.print("- " + -x[i] + "x"+(i-2)+" ");
	    System.out.println("Residuo = {"+ x[1]+ ", " + x[0] + "}");
	
	  }
	
	  public static void raices(double r, double s, double re[], double im[], int n)
	  {
	    double d = r*r + 4*s;
	    if(d > 0)
	    {
	      re[n-1] = (r + Math.sqrt(d))/2.0;
	      re[n-2] = (r - Math.sqrt(d))/2.0;
	      im[n-1] = 0;
	      im[n-2] = 0;
	    }
	    else
	    {
	      re[n-1] = r/2.0;
	      re[n-2] = re[n-1];
	      im[n-1] = Math.sqrt(-d)/2.0;
	      im[n-2] = -im[n-1];
	    }
	  }
	
	*/
}
?>