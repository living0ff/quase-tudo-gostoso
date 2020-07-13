<?php

function dd($param = []) {
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    die();
}

function get(string $param, $filter = FILTER_SANITIZE_STRING) {
    return filter_input(INPUT_GET, $param, $filter);
}


function post(string $param, $filter = FILTER_SANITIZE_STRING) {
    return filter_input(INPUT_POST, $param, $filter);
}