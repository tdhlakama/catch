<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
    <div class="list-group">
        <a href="<?php echo site_url('case_file/listAll'); ?>" class="list-group-item">
            <h4 class="list-group-item-heading">Case Files</h4>
            <p class="list-group-item-text">Individual Case Files for each child</p>
        </a>
    </div>
</div>
<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <br/>    
    <table id="emp_table" class="table table-striped table-hover">
        <thead>
            <tr>
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
