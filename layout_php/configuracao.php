<?php
    //Nome do Site
    $nome_site = "Paradise Highway";
    $endereco = "paradisehighway.servegame.com";

    $name_db = str_replace(" ", "", $nome_site);
    $name_db = strtolower($name_db);

    //Conexão com Banco de Dados
    $host = "localhost";
    $login = "root";
    $senha_db = "batatapalha";
    $db = $name_db;

    $conectar = mysqli_connect($host, $login, $senha_db, $db);
    mysqli_set_charset($conectar, "utf8");

    if (mysqli_connect_error())
        echo "Erro na conexão: ".mysqli_connect_error();

    //auto configuração de titulo
    $nome_pagina = basename($_SERVER['PHP_SELF']);
    $nome_pagina = pathinfo($nome_pagina, PATHINFO_FILENAME);

    if ($nome_pagina == "index")
        $nome_pagina = "início";

    if ($nome_pagina == "jalapao")
        $nome_pagina = "jalapão";

    if ($nome_pagina == "pacific_coast_highway")
        $nome_pagina = "Pacific Coast Highway";

    if ($nome_pagina == "circulo_dourado")
        $nome_pagina = "Círculo Dourado";

    $nome_pagina = str_replace("_", " ", $nome_pagina);
    $nome_pagina = ucwords($nome_pagina);

?>