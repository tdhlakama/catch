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
            <th>Addres</th>
            <th>Alleged Crime</th>
            <th>Rape</th>
            <th>Touting</th>
            <th>Sodomy</th>
            <th>Robbery</th>
            <th>Attempted Murder</th>
            <th>Murder</th>
            <th>Indecent Assault</th>
            <th>Kidnapping</th>
            <th>Theft</th>
            <th>Stock Theft</th>
            <th>Drug Abuse</th>
            <th>Malicious Damage</th>
            <th>Unlawful Entry</th>
            <th>Sexual Intercourse Minor</th>
            <th>Bulling</th>
            <th>Others</th>
            <th>Police Station</th>
            <th>Name of Arresting Officer</th>
            <th>Charge Communicated</th>
            <th>Parents Informed</th>
            <th>Child Arrested Before</th>
            <th>Similar Charges</th>
            <th>Was offence first time</th>
            <th>Murder Repeat</th>
            <th>Rape Repeat</th>
            <th>Touting Repeat</th>
            <th>Sodomy Repeat</th>
            <th>Robbery Repeat</th>
            <th>Attempted Murder Repeat</th>
            <th>Indecent Assault Repeat</th>
            <th>Kidnapping Repeat</th>
            <th>Theft</th>
            <th>Sexual Intercourse Minor Repeat</th>
            <th>Malicious Damage Repeat</th>
            <th>Unlaw full Entry Repeat</th>
            <th>Drug Abuse Repeat</th>
            <th>Bulling Repeat</th>
            <th>Stock Theft Repeat</th>
            <th>Unknown</th>
            <th>Others</th>
            <th>Child Arrested Alone</th>
            <th>Staying With Whom</th>
            <th>Staying At</th>
            <th>Working ?</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($csv as $i => $item) {
            echo '<tr>';
            echo '<td> ' . ($this->arrest_model->check_duplicate(trim($item[0])) ? '<label class="m">' . $item[0] . "</label>" : $item[0]) . ' </td>';
            echo '<td> ' . ($this->case_file_model->check_duplicate(trim($item[1])) ?  $item[1] : '<label class="m">' . $item[1]) . "</label>" . ' </td>';
            echo '<td> ' . $item[2] . ' </td>';
            echo '<td> ' . $item[3] . ' </td>';
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
            echo '<td> ' . valid_yes_no($item[14]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[15]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[16]) . ' </td>';;
            echo '<td> ' . valid_yes_no($item[17]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[18]) . ' </td>';
            echo '<td> ' . $item[19] . ' </td>';
            echo '<td> ' . $item[20] . ' </td>';
            echo '<td> ' . $item[21] . ' </td>';
            echo '<td> ' . valid_yes_no($item[22]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[23]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[24]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[25]) . ' </td>';
            echo '<td> ' . $item[26] . ' </td>';
            echo '<td> ' . valid_yes_no($item[27]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[28]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[29]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[30]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[31]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[32]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[33]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[34]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[35]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[36]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[37]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[38]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[39]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[40]) . ' </td>';
            echo '<td> ' . valid_yes_no($item[41]) . ' </td>';
            echo '<td> ' . $item[42] . ' </td>';
            echo '<td> ' . $item[43] . ' </td>';
            echo '<td> ' . valid_yes_no($item[44]) . ' </td>';
            echo '<td> ' . $item[45] . ' </td>';
            echo '<td> ' . $item[46] . ' </td>';
            echo '<td> ' . valid_yes_no($item[47]) . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
