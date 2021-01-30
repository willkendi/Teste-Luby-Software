<?php
Class Maquina{
        public $quantidadeBanco;
        private $pdo;
        public $msg = "";
        public $id;
        public $quantidade;
        public function conectar(){// Conexão com banco de dados
            global $pdo;// Variavel global
            try{// Caso não for realizada conexão, retorna o erro
              $pdo = new PDO("mysql:host=localhost;port=3306;dbname=vending_machine;charset=utf8",'root','');
              
            }
            catch (PDOException $erro){
                global $msg;
                $msg  = $erro->getMessage();
              
            }
        }
    
    public function exibirEstoque(){// Método para exibir o estoque
        global $pdo;
    
        try{
            $sql = $pdo->prepare('SELECT nome,quantidade FROM produtos');
            $sql->execute();
            $retDados = $sql-> fetchAll(PDO::FETCH_ASSOC);
            return $retDados;
        }       
        catch(PDOException $erro_2){
            echo 'erro'.$erro_2->getMessage();       
        }
    }

    public function validarEstoque($id,$quantidade){// Método que valida o estoque
        global $pdo;
        global $quantidadeBanco;

        try{
            $sql = $pdo->prepare('SELECT quantidade FROM produtos WHERE id_produto = :id');
            $sql->bindParam(':id', $id);
            
            $sql->execute();
            $quantidadeBanco = $sql-> fetch(PDO::FETCH_ASSOC);
            $quantidadeBanco = implode(',',$quantidadeBanco);
            $quantidadeBanco = (int) $quantidadeBanco;
            
            if($quantidadeBanco >= $quantidade){
               
               return true;
               
            }
           else{
            
               return false;
           }
        }       
        catch(PDOException $erro_2){
            echo 'erro'.$erro_2->getMessage();       
        }
    }

  public function atualizarEstoque($id,$quantidade){// Método para atualizar o estoque
      global $pdo;
        $sql = $pdo->prepare('UPDATE produtos SET quantidade = quantidade - :quantidade WHERE id_produto = :id ');
            $sql->bindParam(':quantidade', $quantidade);
            $sql->bindParam(':id', $id);
            $sql->execute();
            return true;
        
    }

    public function validarPagamento($id,$quantidade,$pagamento){// Método para validar pagamento
        global $pdo;
        global $troco;
        global $vfaltante;
    

        try{
            $sql = $pdo->prepare('SELECT preco FROM produtos WHERE id_produto = :id');
            $sql->bindParam(':id', $id);
            $sql->execute();
            $preco = $sql-> fetch(PDO::FETCH_ASSOC);
            $preco = implode(',',$preco);
            $preco = (float) $preco;
            $precoTotal = $preco * $quantidade;
                
            if($pagamento >= $precoTotal){
               
                $troco = $pagamento - $precoTotal;
               
                return true;
                
            }
          
            else{
                $vfaltante = $precoTotal - $pagamento;
             
                return false;
              
            }

        
        }
        catch(PDOException $erro_3){
            echo 'erro'.$erro_3->getMessage();       
        }
    }
    
}
       
        


       

    
