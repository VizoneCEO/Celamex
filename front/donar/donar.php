<!doctype html>
<html lang="es">

<style>
    body {
        background-image:url("../../img/fondo2D.jpg");
        background-position: center; background-repeat: no-repeat;
    }    
</style>    
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-icon.png">
    <title>CELAMEX</title>
    
    <link href="../general/css/donar-style.css" rel="stylesheet" type="text/css" >


</head>
<body>

<?php include '../general/header-include.php'?>
<?php include 'body.php'?>
<?php include '../general/footer-include.php'?>



</body>

<script src="https://kit.fontawesome.com/4b69abc4b4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
      $('.clicable').on('click', function() {
        // 'this' se refiere al div específico en el que se hizo clic.
        var url = $(this).data('url'); 

        if (url) {
          window.location.href = url;
        }
      });
    });
    
</script>
    
</html>