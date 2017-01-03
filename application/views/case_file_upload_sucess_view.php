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
            <th>District</th>
            <th>Address Detail</th>
            <th>Phone Number</th>
            <th>Birth Place</th>
            <th>Displacement</th>
            <th>Age Verified</th>
            <th>Age Verfied By</th>
            <th>Who Verified</th>
            <th>Educational Level</th>
            <th>Living With</th>
            <th>Living At</th>
            <th>Father Status</th>
            <th>Mother Status</th>
            <th>Ethinicty</th>
            <th>Province Prison</th>
            <th>District Prison</th>
            <th>Prison Name</th>
            <th>Interview Location</th>
            <th>Source of Infor</th>
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
            echo '<td> ' . $item[9] . ' </td>';
            echo '<td> ' . $item[10] . ' </td>';
            echo '<td> ' . valid_yes_no($item[11]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[12]) . ' </td>';
            echo '<td> ' . $item[13] . ' </td>';
            echo '<td> ' . $item[14] . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . $item[16] . ' </td>';
            echo '<td> ' . $item[17] . ' </td>';
            echo '<td> ' . valid_parent_status($item[18]) . ' </td>';
            echo '<td> ' . valid_parent_status($item[19]) . ' </td>';
            echo '<td> ' . $item[20] . ' </td>';
            echo '<td> ' . $item[21] . ' </td>';
            echo '<td> ' . $item[22] . ' </td>';
            echo '<td> ' . $item[23] . ' </td>';
            echo '<td> ' . $item[24] . ' </td>';
            echo '<td> ' . $item[25] . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
