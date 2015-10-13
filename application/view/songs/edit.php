<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> songs </li>
            <li class="active"> edit </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Edit a song</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" action="<?php echo URL; ?>songs/updatesong" method="POST">

                            <div class="form-group">
                                <label>Artist</label>
                                <input type="text" name="artist" class="form-control" value="<?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Track</label>
                                <input type="text" name="track" class="form-control" value="<?php echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?>" required/>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control" value="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>"/>
                                <input type="hidden" name="song_id" value="<?php echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit_update_song"  >Update</button>
                            <a href="<?php echo URL; ?>songs" class="btn btn-primary" >Cancel</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

