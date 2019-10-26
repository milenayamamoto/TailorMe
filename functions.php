<?php

session_start();

// $servicos = [
//     [
//         "nome" => "TailorMe Básico",
//         "imagem" => "https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
//     ],
//     [
//         "nome" => "TailorMe Regular",
//         "imagem" => "https://images.unsplash.com/photo-1516763296043-f676c1105999?ixlib=rb-1.2.1&auto=format&fit=crop&w=1026&q=80"
//     ],
//     [
//         "nome" => "TailorMe PRO",
//         "imagem" => "https://images.unsplash.com/photo-1479064555552-3ef4979f8908?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
//     ]
// ];

// function listarServicos() { 
//     global $servicos;
//     foreach($servicos as $index => $servico) {
//         echo "<div class='col'>
//             <div class='card'>
//                 <img src='$servico[imagem]' class='card-img-top' alt='...'>
//                 <div class='card-body'>
//                     <p class='card-text'><h3 class='text-center'><a href='servico.php?id=$index'>$servico[nome]</a></h3></p>
//                 </div>
//             </div>
//         </div>";
//     }
// }

function getNome($id) {
    global $servicos;
    return $servicos[$id]["nome"];
}

function getImagem($id) {
    global $servicos;
    return $servicos[$id]["imagem"];
}

if(isset($_POST["cadastrar_servico"])) { 
    // echo "<pre>";
    // var_dump($_POST);
    $arquivoServicos = "servicos.json";
    $imageServico = "";

    if($_FILES) {
        $nome = $_FILES["imagem"]["name"];
        $nomeTemp = $_FILES["imagem"]["tmp_name"];
        $erro = $_FILES["imagem"]["error"];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz."/".$pasta.$nome;
        
        if($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto);
            $imagemServico = $pasta.$nome;
        }
    }
    if(file_exists($arquivoServicos)) {
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, true);
        $infoServico = $_POST;
        $infoServico["imagem"] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    } else {
        $arquivo = fopen($arquivoServicos, "w");
        $arrayServicos = ["servicos" => []];
        $infoServico = $_POST;
        $infoServico["imagem"] = $imagemServico;
        $arrayServicos["servicos"][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    }
}

function listarServicos() {
    // Trazer serviços do json
    $arquivoJson = "servicos.json";
    $servicos = [];

    if(file_exists($arquivoJson)){
        $jsonServicos = file_get_contents($arquivoJson);
        $arrayServicos = json_decode($jsonServicos, true);
        $servicos = $arrayServicos["servicos"];
    }
    return $servicos;
}

// echo "<pre>";
// var_dump(listarServicos());

if(isset($_POST["login"])) {

    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

    if($email == "" || $senha == "") {
        $erro = "Preencha os campos corretamente.";
    } else {
        // acesso permitido
        $_SESSION["logado"] = true;
        if(isset($_POST["manter_conectado"])) {
            setcookie("email", $email, time()+3600, '/');
            setcookie("senha", $senha, time()+3600, '/');
        }
        header("Location: index.php");
    }
}

if(isset($_GET["logout"])) {
    session_destroy();
}