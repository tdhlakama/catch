<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('release/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
        <thead>
        <tr>
            <th>Police Ref #</th>
            <th>File #</th>
            <th>Date of Release</th>
            <th>Was bail paid</th>
            <th>Bail amount paid</th>
            <th>Relesead to parent</th>
            <th>Released to Department of Child Welfare and Probation Services</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->release_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[1] : '<label class="m">' . $item[1]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . valid_yes_no($item[3]) . ' </td>';
            echo '<td> ' . $item[4] . ' </td>';
            echo '<td> ' . valid_yes_no($item[5]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[6]) . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
