using System;
 
public class Quatro
{
	static int CalcularVogais(string palavra){
		int resposta = 0;
 
		for (int i = 0; i < palavra.Length; i++){
			
        	if (palavra[i]  == 'a' || palavra[i] == 'e' || palavra[i] == 'i' || palavra[i] == 'o' || palavra[i] == 'u'){
            	resposta++;
        	}
    	}
    	
    	return resposta;
	}
 
	public static void Main()
	{
		Console.Write("{0}\n", CalcularVogais("Luby Software"));
	}
}