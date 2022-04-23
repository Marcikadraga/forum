<?php

$path="imgs\Portraits";
$files = array_values(array_filter(scandir($path), function($file) use ($path) { 
    return !is_dir($path . '/' . $file);
}));

foreach($files as $file){
    ?>
    <img src="imgs/Portraits/<?= $file ?>" alt=""><input type="radio" id="html" name="name[]" value="<?= $file ?>">
<?php

}


