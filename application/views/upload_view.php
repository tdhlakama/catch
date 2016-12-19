<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<div class="row">

    <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <h4><a href="<?php echo site_url('setting/download_template_csv'); ?>" class="btn btn-lg btn-primary"
               style="float: right;">Download Template File</a></h4>
        <legend>Upload File</legend>

        <fieldset>
            <?php echo $error; ?>

            <?php echo form_open_multipart('setting/do_upload'); ?>

            <input type="file" name="userfile" size="20"/>

            <br/><br/>

            <input type="submit" value="upload"/>

            </form>

        </fieldset>
        <?php echo form_close(); ?>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Date & Time</th>
                <th>Records uploaded</th>
                <th>Records not uploaded</th>
                <th>Uploaded by</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($upload_list as $item): ?>
                <tr>
                    <td><?php echo $item->upload_date; ?></td>
                    <td><?php echo $item->records_uploaded; ?></td>
                    <td><?php echo $item->records_notuploaded; ?></td>
                    <td><?php echo $item->upload_by; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

