
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo URL; ?>dashboard"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"><?php echo $_GET['url']; ?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Add a song</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" action="<?php echo URL; ?>songs/addsong" method="POST">

                            <div class="form-group">
                                <label>Artist</label>
                                <input type="text" name="artist" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Track</label>
                                <input type="text" name="track" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit_add_song" >Submit</button>
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
                                <th data-sortable="true">Artist</th>
                                <th data-sortable="true">Track</th>
                                <th data-sortable="true">Link</th>
                                <th data-sortable="false" data-align="center"><span class="glyphicon glyphicon-cog"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($songs as $song) { ?>
                                <tr>
                                    <td><?php if (isset($song->id)) echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>
                                        <?php if (isset($song->link)) { ?>
                                            <a href="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <form id="edit" method="POST" action="<?php echo URL . 'songs/editsong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>">
                                        <input name="url" type="hidden" value="songs"/>
                                        <a href="javascript:{}" onclick="document.getElementById('edit').submit(); return false;"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
                                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo URL . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
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