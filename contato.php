<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=" utf-8
    " />
    <title>Formulário de Contato</title>
</head>
<body>

<?php require_once("header.php") ?>
<?php require_once("menu.php") ?>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Formulário de Contato</div>
            <div class="panel-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="simple_form form-horizontal">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" id="email" name="email" type="email">
            </div>
            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input class="form-control" id="assunto" name="assunto" type="text">
            </div>
            <div class="form-group">
                <label for="comentario">Mensagem</label>
                <textarea class="form-control" rows="5" name="comentario" id="comentario"></textarea>
            </div>
            <input type="submit" class="btn btn-info " value="Enviar">

            <div style="clear: both"></div>


            </form>
        </div>
    </div>
</div>
<?php if( count( $_POST ) ): ?>
    <div class="bg-success">
    <p class="text-success">Dados enviados com sucesso, abaixo seguem os dados que você enviou</p>
    </div>
    <dl>
        <p>Nome:<?php echo $_POST['nome']; ?></p>
        <p>E-mail:<?php echo $_POST['email']; ?></p>
        <p>Assunto:<?php echo $_POST['assunto']; ?></p>
        <p>Mensagem:<?php echo $_POST['comentario']; ?></p>
    </dl>
<?php endif; ?>
<?php require_once("footer.php") ?>

</body>
</html>


