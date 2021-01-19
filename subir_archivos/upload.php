<?php

    // var_dump( $_FILES["file"]);
    $directorio = "uploads/";
    $archivo = $directorio . basename($_FILES["file"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    $size = getimagesize($_FILES["file"]["tmp_name"]);
    var_dump($size);

?>