<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    
</head>
<body>
<nav>
  <ul>
    <a href="index.php">Cadastrar Nota</a>
    <a href="retorno.php">Lista de Notas</a>
    <a href="">Boletim</a>
  </ul>
</nav>

<div class="container">
    <h1>Resultados</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ent1</th>
                    <th>Ent2</th>
                    <th>Ent3</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("conexao.php");

                // Consulta SQL para buscar os resultados
                $sql = "SELECT * FROM notas";

                $result = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_not"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["ent1"] . "</td>";
                        echo "<td>" . $row["ent2"] . "</td>";
                        echo "<td>" . $row["ent3"] . "</td>";
                        echo "<td>" . $row["resultado"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum resultado encontrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<button onclick="window.print()">Imprimir</button>
</body>
</html>