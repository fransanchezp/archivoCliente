<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Hemos llegado hasta aqui<br>';

echo '<hr>';

var_dump($_POST);

echo '<hr>';

echo '<pre>' . var_export($_POST, true) . '</pre>';

echo '<hr>';

echo '<pre>' . var_export($_FILES, true) . '</pre>';

echo '<hr>';

function get_old(string $nombre) {
    $value = '';
    if(isset($_GET[$nombre])) {
        $value = $_GET[$nombre];
    }
    return $value;
}
function post_old(string $nombre) {
    $value = '';
    if(isset($_POST[$nombre])) {
        $value = $_POST[$nombre];
    }
    return $value;
}

if(isset($_FILES['file2'])){
    if($_FILES['file2']['error']==0){
        if(str_contains(mime_content_type($_FILES['file2']['tmp_name']), 'image')){
        $name = $_FILES['file2']['name'];
        move_uploaded_file($_FILES['file2']['tmp_name'], $name);
        $info = pathinfo($name);
        echo '<pre>' . var_export(mime_content_type($name), true) . '</pre>';
        } else {
            echo 'no text';
        }
        
    }
}

if(isset($_FILES['file3'])){
    if($_FILES['file3']['error']==0){
        if(str_contains(mime_content_type($_FILES['file3']['tmp_name']), 'image')){
        $name = $_FILES['file3']['name'];
        move_uploaded_file($_FILES['file3']['tmp_name'], $name);
        $info = pathinfo($name);
        echo '<pre>' . var_export(mime_content_type($name), true) . '</pre>';
        } else {
            echo 'no text';
        }
        
    }
}

if(isset($_FILES['file4'])){
    if($_FILES['file4']['error']==0){
        if(str_contains(mime_content_type($_FILES['file4']['tmp_name']), 'image')){
        $name = $_FILES['file4']['name'];
        move_uploaded_file($_FILES['file4']['tmp_name'], $name);
        $info = pathinfo($name);
        echo '<pre>' . var_export(mime_content_type($name), true) . '</pre>';
        } else {
            echo 'no text';
        }
        
    }
}

if(isset($_FILES['file5'])){
    if($_FILES['file5']['error']==0){
        if(str_contains(mime_content_type($_FILES['file5']['tmp_name']), 'image')){
        $name = $_FILES['file5']['name'];
        move_uploaded_file($_FILES['file5']['tmp_name'], $name);
        $info = pathinfo($name);
        echo '<pre>' . var_export(mime_content_type($name), true) . '</pre>';
        } else {
            echo 'no text';
        }
        
    }
}
?>