<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('detention/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
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
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->detention_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[1] : '<label class="m">' . $item[1]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . $item[3] . ' </td>';
            echo '<td> ' . $item[4] . ' </td>';
            echo '<td> ' . valid_yes_no($item[5]) . ' </td>';
            echo '<td> ' . $item[6] . ' </td>';
            echo '<td> ' . valid_yes_no($item[7]) . ' </td>';
            echo '<td> ' . $item[8] . ' </td>';
            echo '<td> ' . $item[9] . ' </td>';
            echo '<td> ' . $item[10] . ' </td>';
            echo '<td> ' . $item[11] . ' </td>';
            echo '<td> ' . $item[12] . ' </td>';
            echo '<td> ' . $item[13] . ' </td>';
            echo '<td> ' . valid_yes_no($item[14]) . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . valid_yes_no($item[16]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[17]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[18]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[19]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[20]) . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
