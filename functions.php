<?php

$servicos = [
    [
        "nome" => "TailorMe Básico",
        "imagem" => "https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80",
        "descricao" => "<li><i class='fas fa-check-circle text-success'></i> 1x Camiseta(s)/Blusa(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 1x Calça(s)/Saia(s)</li>
                        <li><i class='fas fa-times-circle text-dark'></i> Acessório(s)</li>
                        <li><i class='fas fa-times-circle text-dark'></i> Calçado(s)</li>",
        "preco" => "R$150"
    ],
    [
        "nome" => "TailorMe Regular",
        "imagem" => "https://images.unsplash.com/photo-1516763296043-f676c1105999?ixlib=rb-1.2.1&auto=format&fit=crop&w=1026&q=80",
        "descricao" => "<li><i class='fas fa-check-circle text-success'></i> 2x Camiseta(s)/Blusa(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 1x Calça(s)/Saia(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 1x Acessório(s)</li>
                        <li><i class='fas fa-times-circle text-dark'></i> Calçado(s)</li>",
        "preco" => "R$300"
    ],
    [
        "nome" => "TailorMe PRO",
        "imagem" => "https://images.unsplash.com/photo-1479064555552-3ef4979f8908?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80",
        "descricao" => "<li><i class='fas fa-check-circle text-success'></i> 3x Camiseta(s)/Blusa(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 1x Calça(s)/Saia(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 2x Acessório(s)</li>
                        <li><i class='fas fa-check-circle text-success'></i> 1x Calçado(s)</li>",
        "preco" => "R$500"
    ]
];

function listarServicos() {
    
    global $servicos;

    foreach($servicos as $index => $servico) {

        echo "<div class='col'>
            <div class='card'>
                <img src='$servico[imagem]' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <p class='card-text'><h3 class='text-center'><a href='servico.php?id=$index'>$servico[nome]</a></h3></p>
                    <ul class='lista-items'>
                        $servico[descricao]
                    </ul>
                    <div class='text-center'>
                        <p class='preco'>$servico[preco]</p>
                        <button class='btn btn-outline-dark'>Escolher</button>
                    </div>
                </div>
            </div>
        </div>";
    }
}

function getNome($id) {
    global $servicos;
    return $servicos[$id]["nome"];
}

function getImagem($id) {
    global $servicos;
    return $servicos[$id]["imagem"];
}

function getDescricao($id) {
    global $servicos;
    return $servicos[$id]["descricao"];
}

function getPreco($id) {
    global $servicos;
    return $servicos[$id]["preco"];
}