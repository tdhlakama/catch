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
            <th>Province</th>
            <th>District</th>
            <th>Location</th>
            <th>Facility Name</th>
            <th>Facility Type</th>
            <th>Date of Transfer</th>
            <th>First Investigation Report</th>
            <th>Age Verification</th>
            <th>Child Statement</th>
            <th>Medical Record</th>
            <th>Medical Done Before</th>
            <th>legal Aid</th>
            <th>Organisation</th>
            <th>Laywer</th>
            <th>Phone</th>
            <th>Met Laywer</th>
            <th>How many Times</th>
            <th>Interrogated</th>
            <th>Interogation Date</th>
            <th>Duration</th>
            <th>Done By</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->detention_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[0] : '<label class="m">' . $item[0]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . $item[3] . ' </td>';
            echo '<td> ' . $item[4] . ' </td>';
            echo '<td> ' . $item[5] . ' </td>';
            echo '<td> ' . $item[6] . ' </td>';
            echo '<td> ' . $item[7] . ' </td>';
            echo '<td> ' . $item[8] . ' </td>';
            echo '<td> ' . valid_yes_no($item[9]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[10]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[11]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[12]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[13]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[14]) . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . $item[16] . ' </td>';
            echo '<td> ' . $item[17] . ' </td>';
            echo '<td> ' . valid_yes_no($item[18]) . ' </td>';
            echo '<td> ' . $item[19] . ' </td>';
            echo '<td> ' . valid_yes_no($item[20]) . ' </td>';
            echo '<td> ' . $item[21] . ' </td>';
            echo '<td> ' . $item[22] . ' </td>';
            echo '<td> ' . $item[23] . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
