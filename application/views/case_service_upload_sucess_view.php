<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <h2><label class="m">All Rows marked with a red label Will NOT BE IMPORTED</label></h2>
</div>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4><a href="<?php echo site_url('case_service/save_success'); ?>" class="btn btn-lg btn-primary"
                        style="float: right;">Save Information</a></h4></caption>
        <thead>
        <tr>
            <th>Police Ref #</th>
            <th>File #</th>
            <th>Age  Estimation</th>
            <th>Bail and Fine payment</th>
            <th>Family Therapy</th>
            <th>Family mediation</th>
            <th>Socio-legal counselling</th>
            <th>Court accompaniment</th>
            <th>Walk-in consultation</th>
            <th>Legal representation</th>
            <th>Restitution</th>
            <th>Bus fare</th>
            <th>Assistance of inmates</th>
            <th>Escorting of children from a detention facility to a place of safety</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->case_service_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[0] : '<label class="m">' . $item[0]) . "</label>" . ' </td>';
            echo '<td> ' . valid_yes_no($item[2]) . ' </td>';
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
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
