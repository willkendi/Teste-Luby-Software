using System;
 
public class Tres
{
	 static int ContarNumerosPrimos(int n) { 
       if(n==0 || n==1 || n==2) return 0; 
       bool[] arr = new bool[n+1]; 
       for(int i=0; i<n+1; i++){
       		arr[i] = true;
       }
       
       int ans=0; 
       arr[0]=false; 
       arr[1]=false; 
       
       
       for(int i=2; i<Math.Sqrt(n); i++) 
          if(arr[i]) 
            for(int j=i*i; j<n; j+=i) 
                arr[j]=false; 
       
       for(int i=0; i<n; i++) 
            if(arr[i]) 
                ans++; 
       
       return ans; 
     } 
 
	public static void Main()
	{
		Console.Write("{0}\n", ContarNumerosPrimos(10));
		
	}
}