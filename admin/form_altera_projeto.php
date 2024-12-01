<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];

    $sql = "SELECT * FROM portfolio WHERE codigo = $codigo";

    $query = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($query);

?>

<main>
    <section id="portfolio-section">
        <div>
            <h2>Alterar Portfólio</h2>
            <form action="?pg=altera_projeto_portfolio&codigo=<?= $dados['codigo']; ?>" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= $dados['nome']; ?>" required><br><br>
                
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" value="<?= $dados['categoria']; ?>"><br><br>

                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" value="<?= $dados['descricao']; ?>"><br><br>
                
                <label for="imagem">Imagem:</label>
                <textarea type="text" id="imagem" name="imagem" value="<?= $dados['imagem']; ?>" required><br><br>
                
                <label for="data">Imagem:</label>
                <textarea type="text" id="data" name="data" value="<?= $dados['data']; ?>" required><br><br>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</main>