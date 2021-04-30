<?php
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if(isset($_POST['Add_Carrinho']))
    {
        if(isset($_SESSION['carrinho']))
        {
            $myitems=array_column($_SESSION['carrinho'], 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                    alert('Item Adicionado ao Carrinho');
                    window.location.href='index.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['carrinho']);
                $_SESSION['carrinho'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Preco'=>$_POST['Preco'], 'Quantidade'=>1);
                echo"<script>
                    alert('Item Adicionado');
                    window.location.href='index.php';
                </script>"; 
            }
        }
        else
        {
            $_SESSION['carrinho'][0]=array('Item_Name'=>$_POST['Item_Name'],'Preco'=>$_POST['Preco'], 'Quantidade'=>1);
            echo"<script>
                alert('Item Adicionado');
                window.location.href='index.php';
            </script>";
        }
    }
    if(isset($_POST['Remover_Item']))
    {
        foreach($_SESSION['carrinho'] as $key => $value)
        {
            if($value['Item_Name'])
            {
                unset($_SESSION['carrinho'][$key]);
                $_SESSION['carrinho']=array_values($_SESSION['carrinho']);
                echo"<script>
                    alert('Item Removido');
                    window.location.href='mycart.php';
                </script>";
            }
        }
    }
}

?>