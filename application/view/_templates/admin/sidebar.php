<?php ?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="<?php if ($_GET['url'] == "dashboard") echo "active"; ?>"><a href="<?php echo URL; ?>dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li class="<?php if ((isset($_GET['url']) && $_GET['url'] == "cards") || (isset($_POST['url']) && $_POST['url'] == "cards")) echo "active"; ?>"><a href="<?php echo URL; ?>cards"><span class="glyphicon glyphicon-dashboard"></span> Cards</a></li>    
        <li class="<?php if ((isset($_GET['url']) && $_GET['url'] == "songs") || (isset($_POST['url']) && $_POST['url'] == "songs")) echo "active"; ?>"><a href="<?php echo URL; ?>songs"><span class="glyphicon glyphicon-dashboard"></span> Songs</a></li>

<!--<li><a href="panels.html"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
<li class="parent ">
    <a href="#">
        <span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
    </a>
    <ul class="children collapse" id="sub-item-1">
        <li>
            <a class="" href="#">
                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
            </a>
        </li>
        <li>
            <a class="" href="#">
                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
            </a>
        </li>
        <li>
            <a class="" href="#">
                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
            </a>
        </li>
    </ul>
</li>
<li role="presentation" class="divider"></li>
<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>-->
    </ul>
</div>


<body>