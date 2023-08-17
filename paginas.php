<?php

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];

    if ($pg == 'servicos') {
        include './servicos_jumbo.html';
    }elseif($pg == 'contatos'){
        include 'contatos.html';
    }elseif($pg == 'quem_somos'){
        include 'quem_somos.html';
    }
} else {
    include './quem_somos.html';
}


