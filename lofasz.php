<form method="post" action="">
    <!-- <span>Select languages</span><br/>
    <input type="checkbox" name='lang[]' value="PHP"> PHP <br/>
    <input type="checkbox" name='lang[]' value="JavaScript"> JavaScript <br/>
    <input type="checkbox" name='lang[]' value="jQuery"> jQuery <br/>
    <input type="checkbox" name='lang[]' value="Angular JS"> Angular JS <br/> -->
    <?php
                $path="imgs/Portraits";
                $files = array_values(array_filter(scandir($path), function($file) use ($path) {
                    return !is_dir($path . '/' . $file);
                }));

                for($x=0; $x < count($files);$x++){
                    ?>
                    <img src="imgs/Portraits/<?= $files[$x] ?>" alt=""><input   type="checkbox"  name='img[]' value="<?= $files[$x]?>">
                    <?php
                }
                ?>




    <input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

    if(!empty($_POST['img'])) {

        foreach($_POST['img'] as $value){
            echo "value : ".$value.'<br/>';
        }

    }

}
?>