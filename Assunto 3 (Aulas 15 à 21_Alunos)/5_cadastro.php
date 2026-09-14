<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo nome -->
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" required>

<!-- Compo senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

<!-- Botão de enviar -->
        <button type="submt">cadastrar</button>


    </form>
    <?php
    // Se o usuario envou (formulario) eu capturo os valores
    if ($_SERVER['REQUEST_METHOD']== 'POST' ) {
        // Recebo os valores
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Gravando a informação recebida em um arquivo de texto
        // O "fopen" significa (File open ou abrir arquivo) e o 'a' append que significa acrescentar 
        $arquivo = fopen('usuario.txt', 'a');
        
        // Cria uma linha com nome e a senha separado por;
        $linha = $nome . ";" . $senha . "\n";

        // Escreve a linha no arquivo (insere o fato)
        fwrite($arquivo, $linha);

        // Fecha o arquivo 
        fclose($arquivo);

        // Mensagem de sucesso (feedback visual para o usuario)
        echo"<p>Usuario cadastrado com sucesso!</p>";
    }
    ?>
    
</body>
</html>