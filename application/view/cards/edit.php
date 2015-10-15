<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> cards </li>
            <li class="active"> edit </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Edit a card</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" action="<?php echo URL; ?>cards/update" method="POST">

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($card->description, ENT_QUOTES, 'UTF-8'); ?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Initial Date</label>
                                <input type="text" name="init_date" class="form-control" value="<?php echo htmlspecialchars($card->init_date, ENT_QUOTES, 'UTF-8'); ?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Finish Date</label>
                                <input type="text" name="finish_date" class="form-control" value="<?php echo htmlspecialchars($card->finish_date, ENT_QUOTES, 'UTF-8'); ?>"/>
                                <input type="hidden" name="card_id" value="<?php echo htmlspecialchars($card->id, ENT_QUOTES, 'UTF-8'); ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit_update_card"  >Update</button>
                            <a href="<?php echo URL; ?>cards" class="btn btn-primary" >Cancel</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

