<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('arrest/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Date of Arrest</th>
            <th>Arresting Officer</th>
            <th>Station</th>
            <th>Parents Informed</th>
            <th>Parents Conact Inform</th>
            <th>Arrested Before</th>
            <th>Similar Charges</th>
            <th>Which Ones</th>
            <th>Charges Communicated</th>
            <th>Victim</th>
            <th>Murder</th>
            <th>Rape</th>
            <th>Touting</th>
            <th>Sodomy</th>
            <th>Robbery</th>
            <th>Attempted Murder</th>
            <th>Indescent_assault</th>
            <th>Kiddnapping</th>
            <th>Theft</th>
            <th>Sex_with_minor</th>
            <th>Malicious_damage</th>
            <th>Unlawful_entry</th>
            <th>Drug Abuse</th>
            <th>Bulling</th>
            <th>Stock Theft</th>
            <th>Unknown</th>
            <th>Others</th>
            <th>Warrant_issued</th>
            <th>Warrant_date</th>
            <th>Given_to_child</th>
            <th>Notice_period</th>
            <th>Child Alone</th>
            <th>With Whom</th>
            <th>Treated_at_arrest</th>
            <th>Placed_with</th>
            <th>Comments</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->arrest_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[0] : '<label class="m">' . $item[0]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . $item[3] . ' </td>';
            echo '<td> ' . $item[4] . ' </td>';
            echo '<td> ' . $item[5] . ' </td>';
            echo '<td> ' . $item[6] . ' </td>';
            echo '<td> ' . $item[7] . ' </td>';
            echo '<td> ' . $item[8] . ' </td>';
            echo '<td> ' . $item[9] . ' </td>';
            echo '<td> ' . $item[10] . ' </td>';
            echo '<td> ' . $item[11] . ' </td>';
            echo '<td> ' . $item[12] . ' </td>';
            echo '<td> ' . $item[13] . ' </td>';
            echo '<td> ' . $item[14] . ' </td>';
            echo '<td> ' . $item[15] . ' </td>';
            echo '<td> ' . $item[16] . ' </td>';
            echo '<td> ' . $item[17] . ' </td>';
            echo '<td> ' . $item[18] . ' </td>';
            echo '<td> ' . $item[19] . ' </td>';
            echo '<td> ' . $item[20] . ' </td>';
            echo '<td> ' . $item[21] . ' </td>';
            echo '<td> ' . $item[22] . ' </td>';
            echo '<td> ' . $item[23] . ' </td>';
            echo '<td> ' . $item[24] . ' </td>';
            echo '<td> ' . $item[25] . ' </td>';
            echo '<td> ' . $item[26] . ' </td>';
            echo '<td> ' . $item[27] . ' </td>';
            echo '<td> ' . $item[28] . ' </td>';
            echo '<td> ' . $item[29] . ' </td>';
            echo '<td> ' . $item[30] . ' </td>';
            echo '<td> ' . $item[31] . ' </td>';
            echo '<td> ' . $item[32] . ' </td>';
            echo '<td> ' . $item[33] . ' </td>';
            echo '<td> ' . $item[34] . ' </td>';
            echo '<td> ' . $item[35] . ' </td>';
            echo '<td> ' . $item[36] . ' </td>';
            echo '<td> ' . $item[37] . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
