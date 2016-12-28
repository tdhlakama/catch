<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Child Details
                </div>
                <div class="panel-body">
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
                                <label for="address_district" class="control-label">District</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->address_district; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="address_detail" class="control-label">Detail</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->address_detail; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="phone_number" class="control-label">Phone Number</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->phone_number; ?>
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

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="age_verified" class="control-label">Age Verified</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->age_verified; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="age_verified_by" class="control-label">Age Verified By</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->age_verified_by; ?>
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
                                <label for="displacement" class="control-label">Displacement</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->displacement; ?>
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
                                <label for="living_at" class="control-label">Living at</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->living_at; ?>
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
                                <label for="ethinicity" class="control-label">Ethinicity</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->ethinicity; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="province_location" class="control-label">Province Location</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->province_location; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="district_location" class="control-label">District Location</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->district_location; ?>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="prison_name" class="control-label">Prison Name</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->prison_name; ?>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="interview_location" class="control-label">Interview Done at</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->interview_location; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="source" class="control-label">Source of Infor</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <?php echo $emp->source; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Arrest Information
                </div>
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>File Number</th>
                            <th>Arrested Before</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($arrestlist as $i => $item): ?>
                            <tr>
                                <td><?php echo($i + 1) ?></td>
                                <td><?php echo $item->arrest_no; ?></td>
                                <td><?php echo $item->arrested_before; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>

