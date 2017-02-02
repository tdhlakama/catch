<div class="row">
    <table id="assesment_table" class="table table-striped table-hover">
        <caption><h4>Human Rights Violation</h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>The guardians were not informed</th>
            <th>Hand Cuffed</th>
            <th>Beaten_without instrument</th>
            <th>Slapped</th>
            <th>Verbal Abuse</th>
            <th>Mixed With Adults</th>
            <th>Coerced to admit to charges</th>
            <th>Detained for 48 hours</th>
            <th>The gallery was not cleared</th>
            <th>Charges and proceedings were  not explained in a language understood by the child</th>
            <th>The child was not represented</th>
            <th>Food deprevation</th>
            <th>Solitary Confinement</th>
            <th>Inadequate Bedding</th>
            <th>Inadequated Diet</th>
            <th>No Access to Education</th>
            <th>No access to vocational training skills</th>
            <th>No access to health services</th>
            <th>No access to clean water supply and sanitation services</th>
            <th>Deprivation from use of toilet facilities</th>
            <th>Water Boarding</th>
            <th>At which point was the violation committed</th>
            <th>Perpertrator</th>
            <th>What action did you take</th>
            <th>Notes</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($assesmentlist as $i => $item): ?>
            <tr>
                <td>
                    <a href="#" onclick="show_assesment();">
                        <?php echo $item->assesment_no; ?>
                    </a>

                    <div id="assesmentModel" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">HR Violations Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <tr>
                                            <td>Assesment File #</td>
                                            <td><?php echo $item->assesment_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>File #</td>
                                            <td><?php echo $item->case_file_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>The guardians were not informed</td>
                                            <td><?php echo $item->nature_of_violation; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Hand Cuffed</td>
                                            <td><?php echo $item->hand_cuffed; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Beaten_without instrument</td>
                                            <td><?php echo $item->beaten_without_instrument; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Slapped</td>
                                            <td><?php echo $item->slapping; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Verbal Abuse</td>
                                            <td><?php echo $item->verbal_abuse; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Mixed With Adults</td>
                                            <td><?php echo $item->mixed_with_adults; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Coerced to admit to charges</td>
                                            <td><?php echo $item->coerced; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Detained for 48 hours,</td>
                                            <td><?php echo $item->detained_48Hours; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gallery Cleared ?,</td>
                                            <td><?php echo $item->gallery_cleared; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Charges and proceedings were  not explained in a language understood by the child</td>
                                            <td><?php echo $item->charges_explained; ?></td>
                                        </tr>
                                        <tr>
                                            <td>The child was not represented</td>
                                            <td><?php echo $item->child_represented; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Food Deprevation</td>
                                            <td><?php echo $item->food_deprivation; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Solitary Confinement</td>
                                            <td><?php echo $item->solitary_confinement; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Inadequate Bedding</td>
                                            <td><?php echo $item->inadequate_bedding; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Inadequated Diet</td>
                                            <td><?php echo $item->inadequate_diet; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Access to Education</td>
                                            <td><?php echo $item->education; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No access to vocational training skills</td>
                                            <td><?php echo $item->vocation_training; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No access to health services</td>
                                            <td><?php echo $item->health_care; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No access to clean water supply and sanitation services</td>
                                            <td><?php echo $item->water_sanitation; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Deprivation from use of toilet facilities</td>
                                            <td><?php echo $item->toilet_deprivation; ?></td>
                                            ass
                                        </tr>
                                        <tr>
                                            <td>Water Boarding</td>
                                            <td><?php echo $item->water_boaring; ?></td>
                                        </tr>
                                        <tr>
                                            <td>At which point was the violation committed</td>
                                            <td><?php echo $item->point_of_violation; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perpertrator</td>
                                            <td><?php echo $item->perpetrator; ?></td>
                                        </tr>
                                        <tr>
                                            <td>What action did you take</td>
                                            <td><?php echo $item->action_taken; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Notes</td>
                                            <td><?php echo $item->additional_notes; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->nature_of_violation; ?></td>
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
                <td><?php echo $item->water_boaring; ?></td>
                <td><?php echo $item->point_of_violation; ?></td>
                <td><?php echo $item->perpetrator; ?></td>
                <td><?php echo $item->action_taken; ?></td>
                <td><?php echo $item->additional_notes; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


