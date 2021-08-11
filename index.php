<?php
$url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
include 'links.php';

if (isset($links[$url])){
    //nome da pagina
    $nome = $url;
    //organiza a variavel links
    $links = $links[$nome];
    //tema da pagina
    $tema    = "tema/".$links["tema"].".css";
    //css da pagina
    $cssPagina = 'css/'.$nome.'.css';
    //js da pagina
    $jsPagina = 'js/'.$nome.'.js';
    //title da pagina
    $titulo = $nome;
    //outros css
    $css = $links['css'];
    //outros js
    $js = $links['js'];
    //pagina a incluir
    $incluir = "pg/".$nome.".htm.php";
}else{
    $titulo = $erros['404'][1];
    $incluir = $erros['404'][0];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--inicio da pagina-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--tema da pagina-->
    <link href="<?php echo $tema ?>" rel="stylesheet"></link>
    <!--css da pagina-->
    <link href="<?php echo $cssPagina; ?>" rel="stylesheet"></link>
    <!--js da pagina-->
    <script src="<?php echo $jsPagina; ?>"></script>
    <!--inclue os outros css-->
    <?php 
        if(!isset($css)){
            foreach ($css as $arquivo){
                echo '<link href="css/'.$arquivo.'.css" rel="stylesheet"></link>';
            }
        }
    ?>
    <!--inclue os outros js-->
    <?php
        if(!isset($js)){
            foreach ($js as $arquivo){
                echo '<script src="css/'.$arquivo.'.css"></script>';
            }
        }
    ?>
    <!--seta o titulo da pagina-->
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <?php include $incluir; ?>
</body>
</html>