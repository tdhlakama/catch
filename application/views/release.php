<div class="row">
    <table id="release_table" class="table table-striped table-hover">
        <caption><h4>Release</caption>
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
        <?php foreach ($releaselist as $i => $item): ?>
            <tr>
                <td><?php echo $item->release_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->date_of_release; ?></td>
                <td><?php echo $item->bail; ?></td>
                <td><?php echo $item->bail_amount; ?></td>
                <td><?php echo $item->care_parent; ?></td>
                <td><?php echo $item->care_organisation; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
