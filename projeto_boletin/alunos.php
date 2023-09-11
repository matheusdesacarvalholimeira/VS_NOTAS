<?php
include_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <ul><a href="">Home</a><a href="">1° ANo</a><a href="">2° ANo</a><a href="">3° ANo</a></ul>
</nav>



    <h1>Alunos Primeiro Ano</h1>
<h1>primeira unidade</h1>
    <?php
    if($_GET['idv']==1){
        $sql = "SELECT * FROM primeiro";
    }else if($_GET['idv']==2){
        $sql = "SELECT * FROM segundo";
    }else if($_GET['idv']==3){
        $sql = "SELECT * FROM terceito";
    }
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv1_1"] . "</td>
                    <td>" . $row["atv2_2"] . "</td>
                    <td>" . $row["atv3_3"] . "</td>
                    <td>" . $row["resultado_av1"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>
<h1>Segunda unidade</h1>
<?php
   
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv2_1"] . "</td>
                    <td>" . $row["atv2_2_2"] . "</td>
                    <td>" . $row["atv2_3"] . "</td>
                    <td>" . $row["resultado_av2"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>

<h1>NOA</h1>

<h1>Terceira unidade</h1>
<?php
    
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv3_1"] . "</td>
                    <td>" . $row["atv3_2"] . "</td>
                    <td>" . $row["atv3_3_3"] . "</td>
                    <td>" . $row["resultado_av3"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>
    <h1>quarta unidade</h1>
    <?php
   
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv4_1"] . "</td>
                    <td>" . $row["atv4_2"] . "</td>
                    <td>" . $row["atv4_3"] . "</td>
                    <td>" . $row["resultado_av4"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>

<h1>NOA</h1>


<?php
    
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv5_1"] . "</td>
                    <td>" . $row["atv5_2"] . "</td>
                    <td>" . $row["atv5_3"] . "</td>
                    <td>" . $row["resultado_av5"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>
    <h1>quint unidade</h1>
    <?php
    
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv6_1"] . "</td>
                    <td>" . $row["atv6_2"] . "</td>
                    <td>" . $row["atv6_3"] . "</td>
                    <td>" . $row["resultado_av6"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>

<h1>sexta unidade</h1>


<?php
    
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv2_1"] . "</td>
                    <td>" . $row["atv2_2_2"] . "</td>
                    <td>" . $row["atv2_3"] . "</td>
                    <td>" . $row["resultado_av2"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>
<h1>NOA</h1>
<?php
   
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>atividade1</th>
                    <th>ativiadade2</th>
                    <th>atividade3</th>
                    <th>Resultado Final</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_primeiro"] . "</td>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["atv2_1"] . "</td>
                    <td>" . $row["atv2_2_2"] . "</td>
                    <td>" . $row["atv2_3"] . "</td>
                    <td>" . $row["resultado_av2"] . "</td>
                    <td><a href='adicionar_nota.php?id=" . $row["id_primeiro"] . "'>Atualiza</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado na tabela.";
    }?>

<h3>Gerar Boletim</h3>



</body>
</html>