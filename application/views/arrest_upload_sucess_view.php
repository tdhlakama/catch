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
            <th>Charges Communicated</th>
            <th>Murder</th>
            <th>Rape</th>
            <th>Touting</th>
            <th>Sodomy</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->arrest_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->child_model->check_duplicate(trim($item[1])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
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
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
