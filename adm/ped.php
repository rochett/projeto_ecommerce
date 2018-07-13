<?php
require_once('Connections/conectar.php');
include('config/base_local.php');
?>
<table class="table table-nohead" id="randomFeed1">
    <tbody>
    <?php $hoje = date("Y-m-d");
    $sql = "SELECT * FROM pedidos WHERE dat_cadastro='$hoje'ORDER BY id DESC";
    $res = mysqli_query($conectar, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $icon = 'icon-comment';
        $icon_color = 'taskcolor_ok';
        ?>
        <tr>
            <td><span class="label <?php echo $icon_color; ?>"><i class="<?php echo $icon; ?>"></i></span> <a
                        href="ver_pedido.php?var_ped=<?php echo $row['id']; ?>"><?php echo utf8_encode($row['nome']); ?></a>
                - <?php echo utf8_encode($row['email']); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>