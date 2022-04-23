<div class="form_container">
    <form  action="../includes/signup.inc.php" method="post">
        <div class="userDatas">
            <div class="userDatas_1">
                <h1>Create Account</h1>
                <input type="text" name="uid" placeholder="Username" required>
                <br>
                <input type="password" name="pwd" placeholder="Password" required>
                <br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password" required>
                <br>
                <input type="text" name="email" placeholder="E-mail" required>
            </div>
            <div class="img_container">
                <?php
                $path="../imgs/Portraits";
                $files = array_values(array_filter(scandir($path), function($file) use ($path) {
                    return !is_dir($path . '/' . $file);
                }));

                for($x=0; $x < count($files);$x++){
                    ?>
                    <img src="../imgs/Portraits/<?= $files[$x] ?>" alt=""><input   type="radio"  name="img" value="<?= $files[$x]?>" required>
                    <?php
                }
                ?>
            </div>
        </div>

        <br>
        <div class="btn_container">
            <button type="submit" name="submit" class="form_buttons">SIGN UP</button required>
        </div>


    </form>

</div>
