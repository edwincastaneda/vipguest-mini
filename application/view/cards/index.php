
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo URL; ?>dashboard"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"><?php echo $_GET['url']; ?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Add a card</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" action="<?php echo URL; ?>cards/add" method="POST">

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Initial Date</label>
                                <input type="text" name="init_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Finish Date</label>
                                <input type="text" name="finish_date" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit_add_card" >Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toggle="table" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-sortable="true">Id</th>
                                <th data-sortable="true">Description</th>
                                <th data-sortable="true">Initial Date</th>
                                <th data-sortable="true">Finish Date</th>
                                <th data-sortable="false" data-align="center"><span class="glyphicon glyphicon-cog"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cards as $card) { ?>
                                <tr>
                                    <td><?php if (isset($card->id)) echo htmlspecialchars($card->id, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($card->description)) echo htmlspecialchars($card->description, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($card->init_date)) echo htmlspecialchars($card->init_date, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($card->finish_date)) echo htmlspecialchars($card->finish_date, ENT_QUOTES, 'UTF-8'); ?></td>
                                    
                                    <td>
                                        <form id="edit" method="POST" action="<?php echo URL . 'cards/edit/' . htmlspecialchars($card->id, ENT_QUOTES, 'UTF-8'); ?>">
                                        <input name="url" type="hidden" value="cards"/>
                                        <a href="javascript:{}" onclick="document.getElementById('edit').submit(); return false;"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
                                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo URL . 'cards/delete/' . htmlspecialchars($card->id, ENT_QUOTES, 'UTF-8'); ?>"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>