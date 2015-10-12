<form method="post" action="<?php echo URL; ?>login">
    <input type="text" name="user" class="" required placeholder="User" value="<?php if (isset($_POST["user"])) echo $_POST["user"]; ?>">
    <input type="password" name="password" class="" required placeholder="Password" value="<?php if (isset($_POST["password"])) echo $_POST["password"]; ?>">
    <?php if(isset($_POST["user"]) || isset($_POST["password"]) ){ ?>
    <p>Failed!</p>
    <?php } ?>
    <button class="" type="submit" name="login">Log In</button>
</form>