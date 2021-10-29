<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto MVC - GH</title>

    <link rel="stylesheet" href="reset.css">
   <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<?php
    require_once ('MVC/model/Pessoa.php');
    require_once ('MVC/dao/PessoaDAO.php');

    $pessoaDao = new PessoaDAO();
    // TODO: Escrever código para alterar pessoa
    // ATENÇÃO: Se você está começando, ignore essa parte e crie o processo de inclusão de pessoas primeiro
    if (!empty($_GET['id'])) {
        $obj = $pessoaDao->getById($_GET['id']);
    } else {
        $obj = new Pessoa();
    }






?>
 
<body>

<header>
    <img class="doma-logo" src="img/doma.png" alt="" >

  <div class="menu">
    <ul>
      <li><a class="menu-a" href="index.html">Home</a></li>

      <li><a href="register.php">Faça seu cadastro</a></li>

      <li><a href="lista.php">Procure seus amigos</a></li>
    </ul>
  </div>
  </header>

    <div class="wrapper">


        <h2>Faça seu cadastro !</h2>
        <form autocomplete="off">
            <input id="id" name="id" type="hidden" value="<?php echo $obj->id ?>">
            <input type="text" id="nome" name="nome" placeholder="Digite seu Nickname!" value="<?php echo $obj->nome ?>" required>
            <input type="email" id="email" name="email" placeholder="Digite seu E-mail!" value="<?php echo $obj->email ?>" required>
            <input type="date" id="datanascimento" name="datanascimento" placeholder="Data Nascimento" value="<?php echo $obj->datanascimento ?>"  required>
            <input type="tel" id="telefone" name="telefone" placeholder="Qual game que quer jogar?" value="<?php echo $obj->telefone ?>"required>
            <input type="text" id="rank" name="rank" placeholder="Coloque seu Rank" value="<?php echo $obj->rank ?>"required>
            
            

            <button id="btnEnviar" type="button">Enviar</button>


        </form>
    </div>
</body>

<script src="src/exemplo.js"></script>

</html>