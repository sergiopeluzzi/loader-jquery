<!DOCTYPE html>
<html>
    <head>
        <title>Teste de Loader</title>
        <script type="text/javascript" src="jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="estilo.css" type="text/css" />
    </head>
    <body>
        <div id="loader" class="loader"></div>
        <div style="display:none" id="tudo_page"> CONTEUDO DA PÁGINA <div>
    </body>
    
    <script type="text/javascript">
        jQuery(window).load(function () {
              $(".loader").delay(3000).fadeOut("slow");
            $("#tudo_page").toggle("fast");
        });
    </script>

</html>