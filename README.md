# Teste-LubySoftware
Teste para vaga de estágio Back-End;

## Questão 1 - Lógica de Programação
Questões desenvolvida com a linguagem C# (Console), salvo na pasta "1_Logica";

## Questão 2 - Queries
Questões desenvolvidas em SQL, salvo na pasta "2_Queries"/queries.txt;

## Questão 3 - Desafio Vending Machine (Orientação a Objetos)

### 3.1 Tecnologias
O projeto é um aplicativo Web desenvolvido com a linguagem PHP Orientada a Objetos, Banco de dados (MySql) e HTML/CSS; 
### 3.2  Servidor
Seu desenvolvimento foi realizado em um servidor local utilizando o pacote Wamp Server;
### 3.3 Banco de dados
Para realização do teste da aplicação é necessário a criação de um banco de dados MySQL conectado a um servidor;  
### 3.3.1 Gerenciador Banco de dados
Para criação do banco de dados utilize o gerenciador de sua preferencia PhPMyAdmin, Mysql WorkBench;  
### 3.3.2  Query para criação do banco de dados
--------------------------------------------------------------------------------------------------------------
      CREATE DATABASE teste_machine;
      use teste_machine;
      CREATE TABLE produtos(
          id_produto INT PRIMARY KEY AUTO_INCREMENT,
          nome  varchar(30),
          preco double,
          quantidade	int
          );
    
    INSERT INTO produtos(nome,preco,quantidade) VALUES('Guarana','3.50','500');
    INSERT INTO produtos(nome,preco,quantidade) VALUES('Coca Cola','4','500');
    INSERT INTO produtos(nome,preco,quantidade) VALUES('Pepsi','6','500');
    
----------------------------------------------------------------------------------------------------------------
### 3.3.3 Conexão com banco de dados
Para conexão com o banco de dados foi utilizada a interface PDO (Nativa do PHP);  
### 3.3.4 Porta
Foi utilizada porta padrão do MYSQL 3306;
### 3.4 Testes
Para realização do teste o usuário deve escolher o ID do produto, a quantidade e inserir o valor do pagamento (conforme foi requisitado);
### 3.4.1 Validações
As validações foram feitas através de funções com retorno;
### 3.4.2 Estoque
Para vizualizar o estoque, clique na opção "Estoque";
