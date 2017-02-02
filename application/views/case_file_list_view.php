<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<h4><a href="<?php echo site_url('case_file/upload_view/'); ?>">
        <i class="glyphicon glyphicon-upload"></i> Upload Case File</a></h4>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <br/>    
    <table id="emp_table" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Police Ref #</th>
                <th>File #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($case_file_list as $item): ?>
                <tr>
                    <td><?php echo $item->case_no; ?></td>
                    <td><?php echo $item->case_file_no; ?></td>
                    <td><?php echo $item->first_name; ?></td>
                    <td ><?php echo $item->last_name; ?></td>
                    <td><?php echo $item->gender; ?></td>
                    <td><?php echo $item->date_of_birth; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/case_file/dashboard/<?php echo $item->case_file_id; ?> " class="btn-sm btn-success">View</a>
                    </td>  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
