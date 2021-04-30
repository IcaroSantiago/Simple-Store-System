<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Loja Tech</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                <div class="card">
                    <img class="card-img-top" src="images/mouse.png">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mouse Gamer Gamemax MG8</h5>
                            <p class="card-text">Preço: R$119,90</p>
                            <button type="submit" name="Add_Carrinho" class="btn btn-info">Adicionar ao Carrinho</button>
                            <input type="hidden" name="Item_Name" value="Mouse">
                            <input type="hidden" name="Preco" value="119.90">
                        </div>
                </div>
            </form>    
            </div>

            <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                <div class="card">
                    <img class="card-img-top" src="images/processador.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Processador AMD Ryzen 5 3600 </h5>
                            <p class="card-text">Preço: R$1.499,90</p>
                            <button type="submit" name="Add_Carrinho" class="btn btn-info">Adicionar ao Carrinho</button>
                            <input type="hidden" name="Item_Name" value="Processador">
                            <input type="hidden" name="Preco" value="1499.90">
                        </div>
                </div>
            </form>    
            </div>

            <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                <div class="card">
                    <img class="card-img-top" src="images/placa-mae.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Placa-Mãe Asus TUF B450M-Plus Gaming </h5>
                            <p class="card-text">Preço: R$769,90</p>
                            <button type="submit" name="Add_Carrinho" class="btn btn-info">Adicionar ao Carrinho</button>
                            <input type="hidden" name="Item_Name" value="Placa-mae">
                            <input type="hidden" name="Preco" value="769.90">
                        </div>
                </div>
            </form>    
            </div>

            <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                <div class="card">
                    <img class="card-img-top" src="images/HD.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title">HD Seagate BarraCuda, 2TB, 3.5´, SATA </h5>
                            <p class="card-text">Preço: R$399,90</p>
                            <button type="submit" name="Add_Carrinho" class="btn btn-info">Adicionar ao Carrinho</button>
                            <input type="hidden" name="Item_Name" value="HD">
                            <input type="hidden" name="Preco" value="399.90">
                        </div>
                </div>
            </form>    
            </div>             
        </div>
    </div>

    <br> 
    <br>

    <div class="container">
        <div class="row">
        <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                <div class="card">
                    <img class="card-img-top" src="images/notebook.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Notebook Acer Aspire 5 A514-53-59QJ Intel Core I5 8GB 256GB SSD 14' Windows 10</h5>
                            <p class="card-text">Preço: R$4.099,00</p>
                            <button type="submit" name="Add_Carrinho" class="btn btn-info">Adicionar ao Carrinho</button>
                            <input type="hidden" name="Item_Name" value="notebook">
                            <input type="hidden" name="Preco" value="4099.00">
                        </div>
                </div>
            </form>    
            </div>
        
        </div>
    </div>

</body>
</html>