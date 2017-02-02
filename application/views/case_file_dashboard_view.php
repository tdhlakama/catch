<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
</div>

<div class="row ">
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Case File Details
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-lg-4 col-sm-4">
                            <label for="case_no" class="control-label">Police Ref #</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->case_no; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-lg-4 col-sm-4">
                            <label for="case_no" class="control-label">File #</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->case_file_no; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="first_name" class="control-label">First Name</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->first_name; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="last_name" class="control-label">Last Name</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->last_name; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="gender" class="control-label">Gender</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->gender; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="date_of_birth" class="control-label">Date of Birth</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->date_of_birth; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="parent_name" class="control-label">Parents </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->parent_name; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="address_province" class="control-label">Province</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->address_province; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="address_detail" class="control-label">Age</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->age; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="phone_number" class="control-label">Who Verified</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->who_verified; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="place_of_birth" class="control-label">Place of birth</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->place_of_birth; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Case File Details
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="birth_certificate" class="control-label">Birth Certificate</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->birth_certificate; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="who_verified" class="control-label">Who Verified</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->who_verified; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="place_of_birth" class="control-label">Place of Birth</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->place_of_birth; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="in_school" class="control-label">In School</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->in_school; ?>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="education_level" class="control-label">Education level</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->education_level; ?>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="living_with" class="control-label">living with
                            </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->living_with; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="father_status" class="control-label">Father status</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->father_status; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="mother_status" class="control-label">Mother Status</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->mother_status; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="ethinicity" class="control-label">Ethnicity</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php echo $emp->ethnicity; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-lg-4">
        <a href="<?php echo site_url('case_file/catch_upload/'. $emp->case_file_no); ?>">
            <i class="glyphicon glyphicon-upload"></i> Upload Case File</a>

        <div class="panel panel-green">
            <div class="panel-heading">
                Uploads
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>File Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($catchuploadlist as $i => $item): ?>
                        <tr>
                            <td><?php echo($i + 1) ?></td>
                            <td>
                                <a href="<?php echo site_url('case_file/download_file/' . $item->catch_file_id); ?>"
                                ><?php echo $item->title; ?></a>
                            </td>
                            <td><?php echo $item->file_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/case_file/view_file/<?php echo $item->catch_file_id; ?> "
                                   class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'arrest.php'; ?>

<?php include 'detention.php'; ?>

<?php include 'assesment.php'; ?>

<?php include 'release.php'; ?>

<?php include 'case_service.php'; ?>


