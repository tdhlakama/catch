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
            <th>Date of Arrest</th>
            <th>Ill_treatment</th>
            <th>Food deprivation</th>
            <th>Handcuffed</th>
            <th>Electric_shock</th>
            <th>Beaten_without _instrument</th>
            <th>Beaten_with_instrument</th>
            <th>Neglect,</th>
            <th>Slapping,</th>
            <th>Verbal_abuse</th>
            <th>Shackle</th>
            <th>Solitary_confinement</th>
            <th>Toilet_deprivation</th>
            <th>Sexual_abuse</th>
            <th>Other Abuse Form</th>
            <th>Abuse Detial</th>
            <th>Detainees</th>
            <th>Police</th>
            <th>Prison_guard</th>
            <th>Detention official</th>
            <th>Prosecutor</th>
            <th>Other Person</th>
            <th>Torture Details</th>
            <th>Separate_facilities</th>
            <th>Health_care</th>
            <th>Education</th>
            <th>Recreation</th>
            <th>Water_sanitation</th>
            <th>Prisoners in Same Room</th>
            <th>Food Times</th>
            <th>Family Visit</th>
            <th>Less Than 24hrs</th>
            <th>24to48hrs</th>
            <th>3to10days</th>
            <th>10to21days</th>
            <th>greaterThan21</th>

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
            echo '<td> ' . $item[17] . ' </td>';
            echo '<td> ' . valid_yes_no($item[18]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[19]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[20]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[21]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[22]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[23]) . ' </td>';
            echo '<td> ' . $item[24] . ' </td>';
            echo '<td> ' . valid_yes_no($item[25]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[26]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[27]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[28]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[29]) . ' </td>';
            echo '<td> ' . $item[30] . ' </td>';
            echo '<td> ' . $item[31] . ' </td>';
            echo '<td> ' . $item[32] . ' </td>';
            echo '<td> ' . valid_yes_no($item[33]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[34]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[35]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[36]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[37]) . ' </td>';
             echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
