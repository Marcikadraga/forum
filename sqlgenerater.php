<?php

// $insert = "INSERT INTO `images` (`id`, `name`, `requiredPoints`) VALUES (NULL, 'Artemis', '5');"

$path="imgs\Portraits";
$files = array_values(array_filter(scandir($path), function($file) use ($path) { 
    return !is_dir($path . '/' . $file);
}));

$numberOfImages=count($files);

$multiplier=0;
$increased=25;

for($x=0; $x <$numberOfImages; $x++){
    if($x%$increased==0){
        $multiplier+=25;

    }
    echo "INSERT INTO `images` (`id`, `name`, `requiredPoints`) VALUES (NULL, '$files[$x]', '$multiplier');<br>";
    
    
}
