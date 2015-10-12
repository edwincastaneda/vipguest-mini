
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>songs">songs</a>
        <?php if(checkLogin()){ ?>
           <a href="<?php echo URL; ?>logout">logout</a> 
        <?php } ?>
    </div>
