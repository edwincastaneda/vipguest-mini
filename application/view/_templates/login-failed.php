<form method="post" action="<?php echo URL; ?>login">
    <input type="text" name="user" class="" required placeholder="User" value="<?php echo $_POST["user"]; ?>">
    <input type="password" name="password" class="" required placeholder="Password" value="<?php echo $_POST["password"]; ?>">
    <p>Failed!</p>
    <button class="" type="submit" name="login">Log In</button>
</form>