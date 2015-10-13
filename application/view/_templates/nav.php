<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL; ?>#"><span>VIPGUEST</span> Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <?php if (checkLogin()) { ?> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuario <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo URL; ?>#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                            <li><a href="<?php echo URL; ?>#"><span class="glyphicon glyphicon-cog"></span> Configuraci&oacute;n</a></li>
                            <li><a href="<?php echo URL; ?>logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    <?php } else {?>
                        <a href="<?php echo URL; ?>login"><span class="glyphicon glyphicon-user"></span> Login</a>
                        <?php }?>
                </li>
            </ul>
        </div>

    </div>
</nav>


