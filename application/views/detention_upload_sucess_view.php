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
            <th>Police Ref #</th>
            <th>File #</th>
            <th>Date of Arrival</th>
            <th>Name of Facility</th>
            <th>Type of Facility</th>
            <th>If child is sick,is he or she receiving medical attention</th>
            <th>What services is the child receiving</th>
            <th>Is legal aid provided to the child</th>
            <th>Name of organisation providing the legal service</th>
            <th>Lawyer's Name</th>
            <th>Lawyer's phone Number</th>
            <th>When did the child meet with the lawyer</th>
            <th>How many Times</th>
            <th>How many other prisoners share same room</th>
            <th>Does the family of the child visit</th>
            <th>How long was the child been in detention</th>
            <th>Up to 24 hours</th>
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
