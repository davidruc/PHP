<?php
    header("Content-type:application/json");

    $config = (array) [];
    $config ["http"]=(array)[];
    $config ["http"]["method"]=(string) "GET";
    $config ["http"]["header"]=(string) "Content-type:application/json";
    $strm = stream_context_create($config);

    $res = file_get_contents("https://pokeapi.co/api/v2/pokemon", false, $strm);

    echo $res;

?>


