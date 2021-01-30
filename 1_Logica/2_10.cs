using System;
 
public class DEZ
{
	static int[] ObterElementosFaltantes(int[] vetorA, int[] vetorB){
		int[] vetorAux = new int[100000];
		
		int[] vetorfaltantes = new int[100000];
		int j = 0;
 
		for(int i=0 ;i<vetorAux.Length; i++){
			vetorAux[i] = 0;
		}
		for(int i=0 ;i<vetorA.Length; i++){
			vetorAux[vetorA[i]]++;
		}
		
		for(int i=0 ;i<vetorB.Length; i++){
			vetorAux[vetorB[i]]++;
		}
		
		for(int i=0 ;i<vetorAux.Length; i++){
			
			if(vetorAux[i] == 1){
				vetorfaltantes[j++] = i;
			}
		}
		
		return vetorfaltantes;
	}
 
	public static void Main()
	{
		int[] vetor1 = new int[] { 1,2,3,4,5 };
		int[] vetor2 = new int[] { 1,2,5 };
		int[] vetorfaltantes = ObterElementosFaltantes(vetor1, vetor2);
		
		for(int i=0 ;i<vetorfaltantes.Length; i++){
 
			if(vetorfaltantes[i] != 0)
			Console.Write("{0} ", vetorfaltantes[i]);
		}
	}
}