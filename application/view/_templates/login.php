<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo URL; ?>login">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="user" type="email" autofocus="" value="<?php if (isset($_POST["user"])) echo $_POST["user"]; ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="<?php if (isset($_POST["password"])) echo $_POST["password"]; ?>">
                            <input name="url" type="hidden" value="<?php echo $_GET['url'];?>"/>
                        </div>
                        <!--<div class="checkbox">
                                <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                        </div>-->
                        <?php if (isset($_POST["user"]) || isset($_POST["password"])) { ?>
                            <p>Failed!</p>
                        <?php } ?>
                        <button class="btn btn-primary" type="submit" name="login">Log In</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>