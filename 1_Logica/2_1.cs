using System;

public class Um
{
	static int CalcularFatorial(int n){
		if(n <= 0){
			return 1;
		}
		
		return n * CalcularFatorial(n - 1);
	}
	
	public static void Main()
	{
		Console.Write("Fatorial de 5 = {0}\n", CalcularFatorial(5));
	}
}