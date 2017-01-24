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


<div class="row">

    <table id="arrest_table" class="table table-striped table-hover">
        <caption><h4>Arrest Information</h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Addres</th>
            <th>Alleged Crime</th>
            <th>Rape</th>
            <th>Touting</th>
            <th>Sodomy</th>
            <th>Robbery</th>
            <th>Attempted Murder</th>
            <th>Murder</th>
            <th>Indecent Assault</th>
            <th>Kidnapping</th>
            <th>Theft</th>
            <th>Stock Theft</th>
            <th>Drug Abuse</th>
            <th>Malicious Damage</th>
            <th>Unlawful Entry</th>
            <th>Sexual Intercourse Minor</th>
            <th>Bulling</th>
            <th>Others</th>
            <th>Police Station</th>
            <th>Name of Arresting Officer</th>
            <th>Charge Communicated</th>
            <th>Parents Informed</th>
            <th>Child Arrested Before</th>
            <th>Similar Charges</th>
            <th>Was offence first time</th>
            <th>Murder Repeat</th>
            <th>Rape Repeat</th>
            <th>Touting Repeat</th>
            <th>Sodomy Repeat</th>
            <th>Robbery Repeat</th>
            <th>Attempted Murder Repeat</th>
            <th>Indecent Assault Repeat</th>
            <th>Kidnapping Repeat</th>
            <th>Theft</th>
            <th>Sexual Intercourse Minor Repeat</th>
            <th>Malicious Damage Repeat</th>
            <th>Unlaw full Entry Repeat</th>
            <th>Drug Abuse Repeat</th>
            <th>Bulling Repeat</th>
            <th>Stock Theft Repeat</th>
            <th>Unknown</th>
            <th>Others</th>
            <th>Child Arrested Alone</th>
            <th>Staying With Whom</th>
            <th>Staying At</th>
            <th>Working ?</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arrestlist as $i => $item): ?>
            <tr>
                <td><?php echo $item->arrest_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->address_detail; ?></td>
                <td><?php echo $item->alleged_crime; ?></td>
                <td><?php echo $item->rape; ?></td>
                <td><?php echo $item->touting; ?></td>
                <td><?php echo $item->sodomy; ?></td>
                <td><?php echo $item->robbery; ?></td>
                <td><?php echo $item->attempted_murder; ?></td>
                <td><?php echo $item->murder; ?></td>
                <td><?php echo $item->indecent_assault; ?></td>
                <td><?php echo $item->kidnapping; ?></td>
                <td><?php echo $item->theft; ?></td>
                <td><?php echo $item->stock_theft; ?></td>
                <td><?php echo $item->drug; ?></td>
                <td><?php echo $item->malicious_damage; ?></td>
                <td><?php echo $item->unlawful_entry; ?></td>
                <td><?php echo $item->sex_with_minor; ?></td>
                <td><?php echo $item->bulling; ?></td>
                <td><?php echo $item->others; ?></td>
                <td><?php echo $item->arresting_officer; ?></td>
                <td><?php echo $item->station; ?></td>
                <td><?php echo $item->charges_communicated; ?></td>
                <td><?php echo $item->parent_informed; ?></td>
                <td><?php echo $item->arrested_before; ?></td>
                <td><?php echo $item->similar_charges; ?></td>
                <td><?php echo $item->first_time; ?></td>
                <td><?php echo $item->murder_repeat; ?></td>
                <td><?php echo $item->rape_repeat; ?></td>
                <td><?php echo $item->touting_repeat; ?></td>
                <td><?php echo $item->sodomy_repeat; ?></td>
                <td><?php echo $item->robbery_repeat; ?></td>
                <td><?php echo $item->attempted_murder_repeat; ?></td>
                <td><?php echo $item->indecent_assault_repeat; ?></td>
                <td><?php echo $item->kidnapping_repeat; ?></td>
                <td><?php echo $item->theft_repeat; ?></td>
                <td><?php echo $item->sex_with_minor_repeat; ?></td>
                <td><?php echo $item->malicious_damage_repeat; ?></td>
                <td><?php echo $item->unlawful_entry_repeat; ?></td>
                <td><?php echo $item->drug_repeat; ?></td>
                <td><?php echo $item->bulling_repeat; ?></td>
                <td><?php echo $item->stock_theft_repeat; ?></td>
                <td><?php echo $item->unknown; ?></td>
                <td><?php echo $item->others_repeat; ?></td>
                <td><?php echo $item->child_alone; ?></td>
                <td><?php echo $item->whom; ?></td>
                <td><?php echo $item->arrested_where; ?></td>
                <td><?php echo $item->working; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="detention_table" class="table table-striped table-hover">
        <caption><h4>Detention Information</h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Date of Arrival</th>
            <th>Name of Facility</th>
            <th>Type of Facility</th>
            <th>Medical Check Up Done</th>
            <th>Services Received</th>
            <th>Is Legal Aid Provided</th>
            <th>Name of Organisation</th>
            <th>Lawyers Name</th>
            <th>Lawyer Phone</th>
            <th>When child meet lawyer</th>
            <th>How many tine</th>
            <th>Number of Prisoner same room</th>
            <th>Does the family visit</th>
            <th>How long was child detained</th>
            <th>Up to 24 Hours</th>
            <th>Up to 48 Hours</th>
            <th>3 to 10 Days</th>
            <th>10 - 21 Days</th>
            <th>Above 21 Days</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($detentionlist as $i => $item): ?>
            <tr>
                <td><?php echo $item->detention_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->date_of_arrival; ?></td>
                <td><?php echo $item->facility_name; ?></td>
                <td><?php echo $item->facility_type; ?></td>
                <td><?php echo $item->services_received; ?></td>
                <td><?php echo $item->medical_done_before; ?></td>
                <td><?php echo $item->legal_aid; ?></td>
                <td><?php echo $item->organisation; ?></td>
                <td><?php echo $item->lawyer; ?></td>
                <td><?php echo $item->phone; ?></td>
                <td><?php echo $item->met_lawyer; ?></td>
                <td><?php echo $item->met_how_many_times; ?></td>
                <td><?php echo $item->number_of_prisoners; ?></td>
                <td><?php echo $item->family_visit; ?></td>
                <td><?php echo $item->detention_duration; ?></td>
                <td><?php echo $item->_lessThan24hrs; ?></td>
                <td><?php echo $item->_24to48hrs; ?></td>
                <td><?php echo $item->_3to10days; ?></td>
                <td><?php echo $item->_10to21days; ?></td>
                <td><?php echo $item->_greaterThan21; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="row">
    <table id="assesment_table" class="table table-striped table-hover">
        <caption><h4>Human Rights Violations</h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Nature of Violation</th>
            <th>Hand Cuffed</th>
            <th>Beaten_without instrument</th>
            <th>Slapped</th>
            <th>Verbal Abuse</th>
            <th>Mixed With Adults</th>
            <th>Coreced to Admit</th>
            <th>Detained for 48 hours,</th>
            <th>Gallery Cleared ?,</th>
            <th>Charges not Communicated</th>
            <th>Child Not Represented</th>
            <th>Food Deprevation</th>
            <th>Solitary Confinement</th>
            <th>Inadequate Bedding</th>
            <th>Inadequated Diet</th>
            <th>No Access to Education</th>
            <th>No Vocational Training</th>
            <th>No Health Services</th>
            <th>No Access to Sanitary Services</th>
            <th>Use of Toilet Facilities</th>
            <th>Water Boarding</th>
            <th>Point of Violation</th>
            <th>Perpertrator</th>
            <th>Action Taken</th>
            <th>Notes</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($assesmentlist as $i => $item): ?>
            <tr>
                <td><?php echo $item->assesment_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->nature_of_violation; ?></td>
                <td><?php echo $item->food_deprivation; ?></td>
                <td><?php echo $item->hand_cuffed; ?></td>
                <td><?php echo $item->beaten_without_instrument; ?></td>
                <td><?php echo $item->slapping; ?></td>
                <td><?php echo $item->verbal_abuse; ?></td>
                <td><?php echo $item->mixed_with_adults; ?></td>
                <td><?php echo $item->coerced; ?></td>
                <td><?php echo $item->detained_48Hours; ?></td>
                <td><?php echo $item->gallery_cleared; ?></td>
                <td><?php echo $item->charges_explained; ?></td>
                <td><?php echo $item->child_represented; ?></td>
                <td><?php echo $item->food_deprivation; ?></td>
                <td><?php echo $item->solitary_confinement; ?></td>
                <td><?php echo $item->inadequate_bedding; ?></td>
                <td><?php echo $item->inadequate_diet; ?></td>
                <td><?php echo $item->education; ?></td>
                <td><?php echo $item->vocation_training; ?></td>
                <td><?php echo $item->health_care; ?></td>
                <td><?php echo $item->water_sanitation; ?></td>
                <td><?php echo $item->toilet_deprivation; ?></td>
                <td><?php echo $item->toilet_deprivation; ?></td>
                <td><?php echo $item->perpetrator; ?></td>
                <td><?php echo $item->additional_notes; ?></td>
                <td><?php echo $item->action_taken; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="row">
    <table id="release_table" class="table table-striped table-hover">
        <caption><h4>Release</caption>
        <thead>
        <tr>
            <th>Release File #</th>
            <th>File Number</th>
            <th>Date of Release</th>
            <th>Bail</th>
            <th>Bail Amount</th>
            <th>Released to Parenyt Care</th>
            <th>Released to Department of Child Services</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($releaselist as $i => $item): ?>
            <tr>
                <td><?php echo $item->release_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->date_of_release; ?></td>
                <td><?php echo $item->bail; ?></td>
                <td><?php echo $item->bail_amount; ?></td>
                <td><?php echo $item->care_parent; ?></td>
                <td><?php echo $item->care_organisation; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>
</div>
