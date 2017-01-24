<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<h4><a href="<?php echo site_url('assesment/upload_view/'); ?>">
        <i class="glyphicon glyphicon-upload"></i> Upload Human Resource Violations Information</a></h4>

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
