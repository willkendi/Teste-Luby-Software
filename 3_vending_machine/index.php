<?php
    require 'Classes/maquina.php';
    $maquina = new Maquina;
?>

    <html lang = "pt-br">
        <head>
        <link rel="stylesheet" href="CSS/estilo.css">
        <meta charset="utf-8">
        </head>  
            <body>
            <h1>Vending Machine</h1>
            <form action = "" method = "POST">
                ID
                <input type = "number" name="id" min="1" max="3" placeholder="ID">
                Quantidade
                <input type = "number" name="quantidade" placeholder="Quantidade">
                Pagamento
                <input type = "number" name="pagamento" step=0.01 placeholder="Pagamento">
                <button>Comprar</button>
            </form>
            <a href="estoque.php">Estoque</a>
            <hr>
            </div>
            <div class="box">
                <span> Guarana ID:1 </span> 
                <img src = "imagens/guarana.jpg">
                <br>
                <span> R$ 3,50 </span> 
            </div>
            <div class="box">
                <br>
                <span> Pepsi ID:2 </span> 
                <img src = "imagens/pepsi.jpg">
                <br>
                <span> R$ 4,00 </span>
            </div>
            <div class="box">
                <span> Coca Cola ID:3 </span> 
                <img src = "imagens/cocacola.jpg">
                <br>
                <span> R$ 6,00 </span>
            </div>
            </body>
    </html>

<?php

    if(isset($_POST['id'])){// Verifica se o formulário enviou e atribui nas variaveis (Metodo Post)
        $id = (int) addslashes($_POST['id']);
        $quantidade = (int) addslashes($_POST['quantidade']);
        $pagamento = (float) addslashes($_POST['pagamento']);
    
    if($maquina->msg == ""){// Verifica se não ocorreu nenhum erro de conexão
        $maquina->conectar();
        if(!empty($id) && !empty($quantidade) && !empty($pagamento)){// Verifica se as variaveis foram preenchidas
        
                if($maquina->validarEstoque($id,$quantidade)){// Valida o estoque
               
                    if($maquina->validarPagamento($id,$quantidade,$pagamento) == true){//Valida pagamento
                        echo "<hr>";
                        echo "Compra Aprovada! :)";
                        echo "<br>";
                        echo "Troco: R$ ".$troco;
                        $maquina->atualizarEstoque($id,$quantidade);    
                    
                    }
                    
                
                    else{// Caso o usuário digite um valor inferior a compra.
                        echo "<hr>";
                        echo "Compra Negada!";
                        echo "<br>";
                        echo "Falta R$ ".$vfaltante." :(";
                    }
                }
                else{// Caso o usuário digite um valor acima do disponivel em estoque.
                      echo "<hr>";
                      echo "Só possui ".$quantidadeBanco." no estoque";
                    }
                } 
        
        else{// Caso o usuário não preencha os campos
            echo "<hr>";
            echo "Os campos estão vazios!";
            }
        }
    }
   
?>