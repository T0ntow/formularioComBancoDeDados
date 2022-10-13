<?php
    if(isset($_POST['submit'])) 
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUE ('$nome', '$email','$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>Formulario com banco de dados</h1>
    <div class="box">

        <form action="index.php" method="POST" >
            <fieldset>
                <legend>Formulario</legend>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="nome" required>
                    <label for="name" class="labelInput">Nome Completo</label>
                </div>

                <div class="inputBox">
                    <input type="text" class="inputUser" name="email" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <div class="inputBox">
                    <input type="text" class="inputUser" name="telefone" required>
                    <label for="telefone" class="labelInput">telefone</label>
                </div>

                <p>Sexo:</p>
                <br>
                <div id="sexoBox">
                    <input type="radio" id="feminino" name="genero" value="Feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="Outro" required>
                    <label for="outro">Outro</label>
                </div>

                <div id="nascimentoBox">
                    <input type="date" class="inputUser" name="data_nascimento" required>
                    <label for="dataNascimento">Data de Nascimento</label>
                </div>

                <div class="inputBox">
                    <input type="text" class="inputUser" name="cidade" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <input type="text" class="inputUser" name="estado" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" class="inputUser" name="endereco" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <input type="submit" value="Enviar" style="margin: auto; height: 30px; display: flex; font-size: 1.3rem; border-radius: 5px; background-color: blue; border: none; cursor: pointer; padding: 5px;" name='submit'>
            </fieldset>
        </form>

    </div>
</body>

</html>