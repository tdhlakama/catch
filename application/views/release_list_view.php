<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<h4><a href="<?php echo site_url('release/upload_view/'); ?>">
        <i class="glyphicon glyphicon-upload"></i> Upload Release File</a></h4>

<div class="row">
    <table id="release_table" class="table table-striped table-hover">
        <caption><h4>Release</caption>
        <thead>
        <tr>
            <th>Release File #</th>
            <th>File Number</th>
            <th>Date of Release</th>
            <th>Bail</th>
            <th>Bail Amount</th>
            <th>Released to Parenyt Care</th>
            <th>Released to Department of Child Services</th>
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
