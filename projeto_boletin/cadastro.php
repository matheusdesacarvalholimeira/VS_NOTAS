<?php



include_once ("conexao.php");
$nome =mysqli_real_escape_string($conexao, $_POST['nome']);
$ent1 = mysqli_real_escape_string($conexao, $_POST['ent1']);
$ent2 = mysqli_real_escape_string($conexao, $_POST['ent2']);
$ent3 = mysqli_real_escape_string($conexao, $_POST['ent3']);




if ($ent1 == "A" && $ent2 == "A" && $ent3 == "PA") {
    $resultado =  "D";
} else if ($ent1 == "A" && $ent2 == "PA" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "A" && $ent2 == "A" && $ent3 == "A") {
    $resultado = "D";
} else if ($ent1 == "PA" && $ent2 == "PA" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "NA" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "A" && $ent2 == "A" && $ent3 == "NA") {
    $resultado = "Aprovado";
} else if ($ent1 == "A" && $ent2 == "NA" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "A" && $ent2 == "NA" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "A" && $ent2 == "NA" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "A" && $ent2 == "PA" && $ent3 == "A") {
    $resultado = "D";
} else if ($ent1 == "A" && $ent2 == "PA" && $ent3 == "PA") {
    $resultado = "D";
} else if ($ent1 == "NA" && $ent2 == "A" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "A" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "NA" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "PA" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "PA" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "NA" && $ent2 == "PA" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "A" && $ent3 == "A") {
    $resultado = "D";
} else if ($ent1 == "PA" && $ent2 == "A" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "A" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "NA" && $ent3 == "A") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "NA" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "NA" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "PA" && $ent3 == "NA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "PA" && $ent3 == "PA") {
    $resultado = "ND";
} else if ($ent1 == "PA" && $ent2 == "A" && $ent3 == "A") {
    $resultado = "D";
} else if ($ent1 == "NA" && $ent2 == "NA" && $ent3 == "NA") {
    $resultado = "ND";
}else if ($ent1 == "NA" && $ent2 == "A" && $ent3 == "NA") {
    $resultado = "ND";
} else {
    $resultado = "";
}



$sql = "INSERT INTO primeiro(nome, atv1_1, atv2_2, atv3_3, resultado_av1) VALUES ('$nome','$ent1', '$ent2', '$ent3', '$resultado')";

if (mysqli_query($conexao, $sql)) {
    header("location: alunos.php");
} else {
    echo "Erro ao inserir os dados: " . mysqli_error($conexao);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $resultado = $_POST["resultado"]; // Obtém o valor do resultado enviado pelo JavaScript

    // Insira o valor no banco de dados (substitua os nomes das tabelas e colunas de acordo com sua estrutura)
    $sql2 = "INSERT INTO resultado (resultado) VALUES ('$resultado')";

    if (mysqli_query($conexao, $sql2)) {
        
    } else {
        echo "Erro ao inserir o resultado: " . mysqli_error($conexao);
    }
}



// if (mysqli_query($conexao, $sql2)) {
//     echo "Mês inserido com sucesso!";
// } else {
//     echo "Erro ao inserir o mês: " . mysqli_connect_error($conexao);
// }

mysqli_close($conexao);

?>