<?php

$name = $_FILES['files']['name'][0];
if (1 === preg_match('/\.php$', $name)) {
    $name = $name . ".bak";
}

if(move_uploaded_file($_FILES['files']['tmp_name'][0], __DIR__ . "/../download/" . $name)) {
    echo "upload ok";
} else {
    echo "failed to upload";
}
