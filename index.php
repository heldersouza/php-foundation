<?php
function redireciona(){
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = substr($rota["path"], 1);
    //echo $path;
switch ($path){
    case "projeto-1/index.php" || "projeto-1/index" || "projeto-1/" || "projeto-1/home" || "projeto-1/home.php":
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/home.php");
        break;
    case "projeto-1/contato" || "projeto-1/contato.php":
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/contato");
        break;
    case "projeto-1/empresa" || "projeto-1/empresa.php":
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/empresa");
        break;
    case "projeto-1/produtos" || "projeto-1/produtos.php":
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/produtos");
        break;
    case "projeto-1/servicos" || "projeto-1/servicos.php":
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/servicos");
        break;
    default :
        header("location: http://".$_SERVER['HTTP_HOST']."/projeto-1/pages/404");
        break;

}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <title>Primeiro projeto Code.education</title>
</head>
<body>
<?php require_once("pages/header.php") ?>
<?php require_once("pages/menu.php") ?>

<?php  redireciona() ?>

<?php require_once("pages/footer.php") ?>
</body>
</html>