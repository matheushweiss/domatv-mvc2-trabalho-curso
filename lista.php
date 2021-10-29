<?php
    require_once ('MVC/dao/PessoaDAO.php');

    $pessoaDao = new PessoaDAO();
    $lista = $pessoaDao->getLista(0, 999);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monte seu Squad! - doma.tv</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="lista.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

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


   
        <h2>Procure Membros para o Squad</h2>

        <form action="" class="search">
      <input type="search" class="search-input" placeholder="Procure um colega pelo game!">
      <button class="search-button">Procure</button>
    </form>






        <!-- TODO: montar a lista -->
        <table>
            <tr >
                <th>ID</th>
                <th>Nickname</th>
                <th>E-mail</th>
                <th>Data Nasc.</th>
                <th>Game</th>
                <th>Rank</th>
                
            </tr>
            <?php while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['email'] ?></td>
                    <td><?php echo $linha['datanascimento'] ?></td>
                    <td><?php echo $linha['telefone'] ?></td>
                    <td><?php echo $linha['rank'] ?></td>
                    <td class="actions">
                        <button class="update">
                                <a href="/projeto/index.php?id=<?php echo $linha['id'] ?>">
                                Editar
                                </a>
                        </button>
                        </td>
                        <td class="actions">
                        <button data-id="<?php echo $linha['id'] ?>" class="delete" >
                                Excluir
                        </button>

                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>

<script src="src/exemplo.js"></script>

</html>