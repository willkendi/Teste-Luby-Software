using System;
 
public class Sete
{
	static int[] ObterElementosPares(int[] vetor){

		int [] vetorPar = new int[vetor.Length];
		int j = 0;
		for(int i=0 ;i<vetor.Length; i++){
			if(vetor[i]%2 == 0){
				vetorPar[j++] = vetor[i];
			}
		}
		return vetorPar;
	}
 
	public static void Main()
	{
		int[] vetor = new int[] { 1,2,3,4,5 };
		
		int[] vetorpares = ObterElementosPares(vetor);
		
		for(int i=0 ;i<vetorpares.Length; i++){
			
			if(vetorpares[i] != 0)
			Console.Write("{0} ", vetorpares[i]);
		}
	}
}