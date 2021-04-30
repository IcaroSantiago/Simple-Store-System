<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Meu Carrinho</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-info my-2 ">
            <h1>Produtos Adicionados ao Carrinho</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['carrinho']))
                            {
                                foreach($_SESSION['carrinho'] as $key => $value )
                                {
                                    $sr=$key+1;
                                    $total= $total+$value['Preco'];
                                    echo"
                                        <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Preco]</td>
                                        <td> <input class='text-center' type='number' value='$value[Quantidade]' min='1' max='10'> </td>
                                        <td> 
                                            <form action='managecart.php' method='POST'>
                                                <button name='Remover_Item' class='btn btn-sm btn-outline-danger'> REMOVER </button> 
                                                <input type='hidden' name='Item-Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                        </tr>
                                    ";
                                }
                            }   
                        ?>
                    </tbody>
                 </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light  text-center p-4">
                    <h4 >Total: </h4>
                    <h5 ><?php echo $total ?></h5>
                    <br>
                    <form>
                        <button class="btn btn-success btn-block">Finalizar Compra</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>