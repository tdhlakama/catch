<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<div class="row">

    <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <h4><a href="<?php echo site_url('detention/detention_template_csv'); ?>" class="btn btn-lg btn-primary"
               style="float: right;">Download Template File</a></h4>
        <legend>Upload Detention File</legend>

        <fieldset>
            <?php echo $error; ?>

            <?php echo form_open_multipart('detention/do_upload'); ?>

            <input type="file" name="userfile" size="20"/>

            <br/><br/>

            <input type="submit" value="upload"/>

            </form>

        </fieldset>
        <?php echo form_close(); ?>
    </div>
</div>

