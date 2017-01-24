<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<h4><a href="<?php echo site_url('arrest/upload_view/'); ?>">
    <i class="glyphicon glyphicon-upload"></i> Upload Arrest Information</a></h4>

<div class="row">
    <table id="arrest_table" class="table table-striped table-hover">
        <caption><h4>Arrest Information</h4></caption>
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
        <?php foreach ($arrestlist as $i => $item): ?>
            <tr>
                <td><?php echo $item->arrest_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->address_detail; ?></td>
                <td><?php echo $item->alleged_crime; ?></td>
                <td><?php echo $item->rape; ?></td>
                <td><?php echo $item->touting; ?></td>
                <td><?php echo $item->sodomy; ?></td>
                <td><?php echo $item->robbery; ?></td>
                <td><?php echo $item->attempted_murder; ?></td>
                <td><?php echo $item->murder; ?></td>
                <td><?php echo $item->indecent_assault; ?></td>
                <td><?php echo $item->kidnapping; ?></td>
                <td><?php echo $item->theft; ?></td>
                <td><?php echo $item->stock_theft; ?></td>
                <td><?php echo $item->drug; ?></td>
                <td><?php echo $item->malicious_damage; ?></td>
                <td><?php echo $item->unlawful_entry; ?></td>
                <td><?php echo $item->sex_with_minor; ?></td>
                <td><?php echo $item->bulling; ?></td>
                <td><?php echo $item->others; ?></td>
                <td><?php echo $item->arresting_officer; ?></td>
                <td><?php echo $item->station; ?></td>
                <td><?php echo $item->charges_communicated; ?></td>
                <td><?php echo $item->parent_informed; ?></td>
                <td><?php echo $item->arrested_before; ?></td>
                <td><?php echo $item->similar_charges; ?></td>
                <td><?php echo $item->first_time; ?></td>
                <td><?php echo $item->murder_repeat; ?></td>
                <td><?php echo $item->rape_repeat; ?></td>
                <td><?php echo $item->touting_repeat; ?></td>
                <td><?php echo $item->sodomy_repeat; ?></td>
                <td><?php echo $item->robbery_repeat; ?></td>
                <td><?php echo $item->attempted_murder_repeat; ?></td>
                <td><?php echo $item->indecent_assault_repeat; ?></td>
                <td><?php echo $item->kidnapping_repeat; ?></td>
                <td><?php echo $item->theft_repeat; ?></td>
                <td><?php echo $item->sex_with_minor_repeat; ?></td>
                <td><?php echo $item->malicious_damage_repeat; ?></td>
                <td><?php echo $item->unlawful_entry_repeat; ?></td>
                <td><?php echo $item->drug_repeat; ?></td>
                <td><?php echo $item->bulling_repeat; ?></td>
                <td><?php echo $item->stock_theft_repeat; ?></td>
                <td><?php echo $item->unknown; ?></td>
                <td><?php echo $item->others_repeat; ?></td>
                <td><?php echo $item->child_alone; ?></td>
                <td><?php echo $item->whom; ?></td>
                <td><?php echo $item->arrested_where; ?></td>
                <td><?php echo $item->working; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
