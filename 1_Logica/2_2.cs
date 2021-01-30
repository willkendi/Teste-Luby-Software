using System;

public class Dois
{
	static double CalcularPremio(double valor, string tipo,double? multiplicador ){
		if(multiplicador.HasValue){
			return valor * multiplicador.Value;
		}
		else {
			
			if(String.Equals(tipo, "basic")){
				
				return valor;
			}
			else if(String.Equals(tipo, "vip")){
				
				return valor * 1.2;
			}
			else if(String.Equals(tipo, "premium")){
				
				return valor * 1.5;
			}
			else if(String.Equals(tipo, "deluxe")){
				
				return valor * 1.8;
			}
			else if(String.Equals(tipo, "special")){
				
				return valor * 2;
			}
			return valor;
		}
	}
	
	public static void Main()
	{
		Console.Write("{0:0.00}\n", CalcularPremio(100, "vip", null));
		Console.Write("{0:0.00}\n", CalcularPremio(100, "basic", 3));
	}
}