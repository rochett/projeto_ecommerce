<?php
$sqlSlider = "SELECT * FROM slider_site WHERE exibir=1";
$querySlider = mysqli_query($conectar, $sqlSlider);
$row_RecordsetSlider = mysqli_fetch_assoc($querySlider);
$totalRows_RecordsetSlider = mysqli_num_rows($querySlider);
?>