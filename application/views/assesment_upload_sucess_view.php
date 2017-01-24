<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('assesment/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Nature of Violation</th>
            <th>Hand Cuffed</th>
            <th>beaten_without instrument</th>
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
            <th>Inadequate Bedding </th>
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
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->assesment_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[0] : '<label class="m">' . $item[0]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . valid_yes_no($item[3]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[4]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[5]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[6]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[7]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[8]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[9]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[10]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[11]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[12]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[13]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[14]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[15]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[16]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[17]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[18]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[19]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[20]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[21]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[22]) . ' </td>';
            echo '<td> ' . $item[23] . ' </td>';
            echo '<td> ' . $item[24] . ' </td>';
            echo '<td> ' . $item[25] . ' </td>';
            echo '<td> ' . $item[26] . ' </td>';
              echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
