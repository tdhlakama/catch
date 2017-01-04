<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<div class="row">
    <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Select File to Upload</legend>
        <fieldset>
            <?php echo $error; ?>

            <?php echo form_open_multipart('case_file/catch_upload_file/' . $case_file_no); ?>

            <table class="table">
                <tr>
                    <td><input type="file" name="userfile" id="userfile" size="20"/></td>
                </tr>
                <tr>
                    <td>
                        <p>Enter Title <input type="text" placeholder="document title" name="title" id="title"
                                              value=""/></p>
                    </td>
                </tr>
                <tr>
                    <td>
                            <input type="submit" name="submit" id="submit"/>
                    </td>
                </tr>
            </table>
                    
                
        </fieldset>
        <?php echo form_close(); ?>

    </div>
</div>
