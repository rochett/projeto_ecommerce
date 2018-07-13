<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8" />

    <?php include('js/calendario.php'); ?>

    <link rel="stylesheet" href="css/calendario.css">

</head>
<body onLoad="document.getElementById('loader').style.display = 'none'" >

<div id="loader">
    <div class="xvrect">
        <div class="xvimage"></div>
        <p>Carregando. Por favor aguarde...</p>
    </div>
</div>
<div id='calendar'></div>
</body>
</html>
