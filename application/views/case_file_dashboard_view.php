<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>

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
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Arrest Information
                </div>
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Arrest No</th>
                            <th>Date of Arrest</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($arrestlist as $i => $item): ?>
                            <tr>
                                <td><?php echo($i + 1) ?></td>
                                <td><?php echo $item->arrest_no; ?></td>
                                <td><?php echo $item->date_of_arrest; ?></td>
                                <td>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary btn-sm" onclick="show_arrest()">
                                        View
                                    </button>

                                    <div id="arrestModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Arrest Detail</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <table class="table">
                                                        <tr>
                                                            <td>Arresting Oficer</td>
                                                            <td><?php echo $item->arresting_officer; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name of Police Station</td>
                                                            <td><?php echo $item->station; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Have the parents been informed?</td>
                                                            <td><?php echo $item->parent_informed; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Notice Period of Parents if informed</td>
                                                            <td><?php echo $item->notice_period; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parents contact details</td>
                                                            <td><?php echo $item->parents_contact; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Was the child arrested before?</td>
                                                            <td><?php echo $item->arrested_before; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Where the charges communicated to the child?</td>
                                                            <td><?php echo $item->charges_communicated; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Similar Charges</td>
                                                            <td><?php echo $item->similar_charges; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Which one?</td>
                                                            <td><?php echo $item->which_ones; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Victim</td>
                                                            <td><?php echo $item->victim; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><h4>Alleged charges</h4></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Murder</td>
                                                            <td><?php echo $item->murder; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rape</td>
                                                            <td><?php echo $item->rape; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Touting</td>
                                                            <td><?php echo $item->touting; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sodomy</td>
                                                            <td><?php echo $item->sodomy; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Robbery</td>
                                                            <td><?php echo $item->robbery; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Attempted Murder</td>
                                                            <td><?php echo $item->attempted_murder; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Indescent Assault</td>
                                                            <td><?php echo $item->indescent_assault; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kidnapping</td>
                                                            <td><?php echo $item->kidnapping; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unlawful Entry</td>
                                                            <td><?php echo $item->unlawful_entry; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Theft</td>
                                                            <td><?php echo $item->theft; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sex With Minor</td>
                                                            <td><?php echo $item->sex_with_minor; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drug and Substance Abuse</td>
                                                            <td><?php echo $item->drug; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bulling</td>
                                                            <td><?php echo $item->bulling; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Malicious Damage to Property</td>
                                                            <td><?php echo $item->malicious_damage; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stock Theft</td>
                                                            <td><?php echo $item->stock_theft; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unknown</td>
                                                            <td><?php echo $item->unknown; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Others</td>
                                                            <td><?php echo $item->others; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                        <tr>
                                                            <td>Arrest warrant issued?</td>
                                                            <td><?php echo $item->warrant_issued; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Copy given to the Child</td>
                                                            <td><?php echo $item->given_to_child; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Warrant Date</td>
                                                            <td><?php echo $item->warrant_date; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Was the child arrested alone?</td>
                                                            <td><?php echo $item->child_alone; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Arrested With whom?</td>
                                                            <td><?php echo $item->whom; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>How were you treated at the point of arrest</td>
                                                            <td><?php echo $item->treated_at_arrest; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Where you placed in detention facilities with adults
                                                            </td>
                                                            <td><?php echo $item->placed_with; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Details about conditions and reasons of arrest as stated
                                                                by the child
                                                            </td>
                                                            <td><?php echo $item->comments; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel panel-warning">
                <div class="panel-heading">
                    Detention Information
                </div>
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Detention Number</th>
                            <th>Date of Arrival</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($detentionlist as $i => $item): ?>
                            <tr>
                                <td><?php echo($i + 1) ?></td>
                                <td><?php echo $item->detention_no; ?></td>
                                <td><?php echo $item->date_of_arrival; ?></td>

                                <td>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary btn-sm" onclick="show_detention()">
                                        View
                                    </button>

                                    <div id="detentionModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Detention Information </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <tr>
                                                            <td>Province</td>
                                                            <td><?php echo $item->detention_province; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>District</td>
                                                            <td><?php echo $item->detention_district; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Location</td>
                                                            <td><?php echo $item->detention_location; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facility Name</td>
                                                            <td><?php echo $item->facility_name; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facility Type</td>
                                                            <td><?php echo $item->facility_type; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Transfer</td>
                                                            <td><?php echo $item->date_of_transfer; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><h4>Are records available at place of
                                                                    detentntion </h4></td>
                                                        </tr>
                                                        <tr>
                                                            <td>First Investigation Report</td>
                                                            <td><?php echo $item->first_investigation_report; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Age Verification</td>
                                                            <td><?php echo $item->age_verification; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Child Statement</td>
                                                            <td><?php echo $item->child_statement; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Medical Record</td>
                                                            <td><?php echo $item->medical_record; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Was a medical check-up carried out upon arrival?</td>
                                                            <td><?php echo $item->medical_done_before; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Is legal aid provided to the child?</td>
                                                            <td><?php echo $item->legal_aid; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lawyers' Organization</td>
                                                            <td><?php echo $item->organisation; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>lawyer's Name</td>
                                                            <td><?php echo $item->lawyer; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Meet lawyer before?</td>
                                                            <td><?php echo $item->met_lawyer; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>How many times</td>
                                                            <td><?php echo $item->met_how_many_times; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>lawyer's Contact</td>
                                                            <td><?php echo $item->phone; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interrogated</td>
                                                            <td><?php echo $item->interrogated; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interogation Date</td>
                                                            <td><?php echo $item->interogation_date; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interogation Duration</td>
                                                            <td><?php echo $item->interogation_duration; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Done By</td>
                                                            <td><?php echo $item->done_by; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Assesment Information
                </div>
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Assesment Number</th>
                            <th>Date of Assesment</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($assesmentlist as $i => $item): ?>
                            <tr>
                                <td><?php echo($i + 1) ?></td>
                                <td><?php echo $item->assesment_no; ?></td>
                                <td><?php echo $item->date_of_assesment; ?></td>
                                <td>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary btn-sm" onclick="show_assesment()">
                                        View
                                    </button>

                                    <div id="assesmentModel" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title"> Assesment Information </h4>
                                                </div>
                                                <div class="modal-body">

                                                    <table class="table">
                                                        <tr>
                                                            <td>Date of Assesment</td>
                                                            <td><?php echo $item->date_of_assesment; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ill-treatment or torture during detention</td>
                                                            <td><?php echo $item->ill_treatment; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><h4>Selected</h4></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Electric Shock</td>
                                                            <td><?php echo $item->electric_shock; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Food Deprivation</td>
                                                            <td><?php echo $item->food_deprivation; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hand Cuffed</td>
                                                            <td><?php echo $item->hand_cuffed; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shackle</td>
                                                            <td><?php echo $item->shackle; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Neglect</td>
                                                            <td><?php echo $item->neglect; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Slapping</td>
                                                            <td><?php echo $item->slapping; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Verbal_abuse</td>
                                                            <td><?php echo $item->verbal_abuse; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beaten With Instrument</td>
                                                            <td><?php echo $item->beaten_with_instrument; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Beaten Without Instrument</td>
                                                            <td><?php echo $item->beaten_without_instrument; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Solitary Confinement</td>
                                                            <td><?php echo $item->solitary_confinement; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Toilet Deprivation</td>
                                                            <td><?php echo $item->toilet_deprivation; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sexual Abuse</td>
                                                            <td><?php echo $item->sexual_abuse; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other Abuse</td>
                                                            <td><?php echo $item->other_abuse; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Abuse Details</td>
                                                            <td><?php echo $item->abuse_details; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><h4>Perpetrated by</h4></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Detaining Officer</td>
                                                            <td><?php echo $item->detaining_officer; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Detainees</td>
                                                            <td><?php echo $item->detainees; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Police</td>
                                                            <td><?php echo $item->police; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other Person</td>
                                                            <td><?php echo $item->other_person; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prison Guard</td>
                                                            <td><?php echo $item->prison_guard; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prosecutor</td>
                                                            <td><?php echo $item->prosecutor; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Torture Details</td>
                                                            <td><?php echo $item->torture_details; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><h4>Existence of adequate facilities for
                                                                    children</h4></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Separate facilities from adults</td>
                                                            <td><?php echo $item->separate_facilities; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Health Care</td>
                                                            <td><?php echo $item->health_care; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Education / vocational skills</td>
                                                            <td><?php echo $item->education; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Recreation</td>
                                                            <td><?php echo $item->recreation; ?></td>
                                                        </tr>
                                                        '
                                                        <tr>
                                                            <td> Water supply and sanitation</td>
                                                            <td><?php echo $item->water_sanitation; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>How many other prisoners in the same room?</td>
                                                            <td><?php echo $item->number_of_prisoners; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>How many time a day does the child get food?</td>
                                                            <td><?php echo $item->food_times; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Regular visit from family</td>
                                                            <td><?php echo $item->family_visit; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"><h4>How long were you placed in
                                                                    detention</h4></td>
                                                        </tr>

                                                        <tr>
                                                            <td>upto 24 hours</td>
                                                            <td><?php echo $item->_lessThan24hrs; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>24hours- 48 hours</td>
                                                            <td><?php echo $item->_24to48hrs; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3 days - 10days</td>
                                                            <td><?php echo $item->_3to10days; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>10-21 days</td>
                                                            <td><?php echo $item->_10to21days; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Above 21 days</td>
                                                            <td><?php echo $item->_greaterThan21; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel panel-green">
                <div class="panel-heading">
                    Release Information
                </div>
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Release Number</th>
                            <th>Date of Release</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($releaselist as $i => $item): ?>
                            <tr>
                                <td><?php echo($i + 1) ?></td>
                                <td><?php echo $item->release_no; ?></td>
                                <td><?php echo $item->date_of_release; ?></td>
                                <td>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary btn-sm" onclick="show_release()">
                                        View
                                    </button>

                                    <div id="releaseModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title"> Release Information</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <tr>
                                                            <td>Bail</td>
                                                            <td><?php echo $item->bail; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bail Amount</td>
                                                            <td><?php echo $item->bail_amount; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                Handover to whom, after release?
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Care of Parents</td>
                                                            <td><?php echo $item->care_parent; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Care of NGO</td>
                                                            <td><?php echo $item->care_ngo; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Care of orphange</td>
                                                            <td><?php echo $item->care_orphange; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Care of relative</td>
                                                            <td><?php echo $item->care_relative; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Case Status</td>
                                                            <td><?php echo $item->case_status; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Comments</td>
                                                            <td><?php echo $item->comments; ?></td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

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
                                    <a href="<?php echo site_url('case_file/download_file/'. $item->catch_file_id); ?>"
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




</div>