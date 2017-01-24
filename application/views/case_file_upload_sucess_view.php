<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('case_file/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
        <thead>
        <tr>
            <th>File #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Parents Name</th>
            <th>Province</th>
            <th>Birth Place</th>
            <th>Age</th>
            <th>Has Birth Certificate</th>
            <th>Who Verified</th>
            <th>In School</th>
            <th>Education Level</th>
            <th>Living With</th>
            <th>Father Status</th>
            <th>Mother Status</th>
            <th>Ethnicitity</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . $item[1] . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . valid_gender($item[3]) . ' </td>';
            echo '<td> ' . $item[4] . ' </td>';
            echo '<td> ' . $item[5] . ' </td>';
            echo '<td> ' . $item[6] . ' </td>';
            echo '<td> ' . $item[7] . ' </td>';
            echo '<td> ' . $item[8] . ' </td>';
            echo '<td> ' . valid_yes_no($item[9]) . ' </td>';
            echo '<td> ' . $item[10] . ' </td>';
            echo '<td> ' . valid_yes_no($item[11]) . ' </td>';
            echo '<td> ' . $item[12] . ' </td>';
            echo '<td> ' . $item[13] . ' </td>';
            echo '<td> ' . $item[14] . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . $item[16] . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
