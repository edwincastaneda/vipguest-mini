<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"><?php echo $_GET['url'];?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Tablero de Actividad</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-comment glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $this->model->getAmountOfSongs(); ?></div>
                        <div class="text-muted">Saludos</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-gift glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $this->model->getAmountOfSongs(); ?></div>
                        <div class="text-muted">Regalos</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-cloud-upload glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $this->model->getAmountOfSongs(); ?></div>
                        <div class="text-muted">Fotos</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-headphones glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large"><?php echo $this->model->getAmountOfSongs(); ?></div>
                        <div class="text-muted">Música</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="panel panel-default chat">
                <div class="panel-heading" style="background:#30a5ff; color:#fff;" id="accordion"><span class="glyphicon glyphicon-comment"></span> Saludos</div>
                <div class="panel-body">
                    <ul>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="panel panel-blue">
                <div class="panel-heading" style="background:#ffb53e;"><span class="glyphicon glyphicon-gift"></span>Regalos</div>
                <div class="panel-body" style="overflow:auto; background:white;">
                    <ul class="todo-list">
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" disabled checked />
                                <label for="checkbox">Sarten de 20''</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#" class="flag"><span class="glyphicon glyphicon-flag text-red"></span></a>
                            </div>
                        </li>
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" disabled />
                                <label for="checkbox">Sarten de 15''</label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a href="#" class="flag"><span class="glyphicon glyphicon-flag text-green" ></span></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
