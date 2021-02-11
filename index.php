<?php
session_start();

require "./partial/head.php";
?>
<form method="post" action="secret.php">
    <?php
    if (isset($_GET['e'])){
        if ($_GET['e'] === "1"){
            ?>
            <div class="alert alert-danger" role="alert">
                Problème sur les variables posts lors de la transmission des infos
            </div>
            <?php
        }
        elseif ($_GET['e'] === "2"){
            ?>
            <div class="alert alert-warning" role="alert">
                Username et/ou password incorrect
            </div>
            <?php
        }
    }
    ?>
    <div class="container">
        <div class="mb-3">
            <label for="inputUser" class="form-label">Username</label>
            <input type="text" class="form-control" id="inputUser" name="user">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="pass">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
require "./partial/foot.php";
