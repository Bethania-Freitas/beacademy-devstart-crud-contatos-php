
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fonte do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:wght@200&family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="arrays/style.css">







</head>
<body class="container py-5" style="background-color: #E6E6FA">

        <div >
            <table class="table-Success" >
                <?php

                $url = explode('?', $_SERVER['REQUEST_URI']);
                
                include 'telas/menu.php';
                include 'acoes.php';

                match ($url[0]) {
                    '/' => home(),
                    '/cadastro' => cadastro(),
                    '/login' => login(),
                    '/listar' => listar(),
                    '/relatorio' => relatorio(),
                    '/excluir' => excluir(),
                    '/editar' => editar(),
                    default => admin(),
                }

                ?>
            </table>    
        </div>

</body>
</html>
