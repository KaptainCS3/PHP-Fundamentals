<?php
    $file = 'extras/users.txt';
    if(file_exists($file)){
        // echo readfile($file); 
        //create a pointer to the file
        //use the fopen method with takes (file, mode)  'r' read mode
        $handle = fopen($file, 'r');
        // fred method takes (pointer , filesize)
        $content = fread($handle, filesize($file));
        fclose($handle);
        echo $content;
    }
    else{
        $handle = fopen($file, 'w');
        $content = 'Lunes' . PHP_EOL . 'Martes ' . PHP_EOL . 'Miercoles' . PHP_EOL . 'Jueves' . PHP_EOL . 'Viernes' . PHP_EOL . 'Sabado' . PHP_EOL . 'Dormingo';
        fwrite($handle, $content);
        fclose($handle);
}
// Leonard
// Dianna
// Martha
// Gift
?>