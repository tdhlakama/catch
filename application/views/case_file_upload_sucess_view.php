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
            <th>Police Ref #</th>
            <th>File #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Parents/guardian Name</th>
            <th>Province</th>
            <th>Birth Place</th>
            <th>Age</th>
            <th>Does the child have a birth certificate</th>
            <th>Who Verified</th>
            <th>Is the child in school</th>
            <th>What is the child's last Education level</th>
            <th>Who is the child living with</th>
            <th>Is the Father Alive</th>
            <th>Is the Mother Alive</th>
            <th>Ethinicity</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . $item[0] . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ? '<label class="m">' . $item[1] . "</label>" : $item[1]) . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . $item[3] . ' </td>';
            echo '<td> ' . valid_gender($item[4]) . ' </td>';
            echo '<td> ' . $item[5] . ' </td>';
            echo '<td> ' . $item[6] . ' </td>';
            echo '<td> ' . $item[7] . ' </td>';
            echo '<td> ' . $item[8] . ' </td>';
            echo '<td> ' . $item[9] . ' </td>';
            echo '<td> ' . valid_yes_no($item[10]) . ' </td>';
            echo '<td> ' . $item[11] . ' </td>';
            echo '<td> ' . valid_yes_no($item[12]) . ' </td>';
            echo '<td> ' . $item[13] . ' </td>';
            echo '<td> ' . $item[14] . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . $item[16] . ' </td>';
            echo '<td> ' . $item[17] . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
