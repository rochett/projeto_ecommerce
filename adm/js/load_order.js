function carrega_pedido()
{
    $("#randomFeed1").load("ped.php");
}
setInterval('carrega_pedido()', 1000);