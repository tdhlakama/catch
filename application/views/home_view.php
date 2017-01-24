<!-- Page Heading -->
<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<!-- /.row -->

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-green">
                <div class="panel-heading">
                    Files
                </div>
                <div class="panel-body" style="height: 270px">

                    <div class="list-group">

                        <a href="<?php echo site_url('case_file/listAll'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Cases</h4>
                        </a>

                        <a href="<?php echo site_url('arrest/listAll'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Arrest</h4>
                        </a>

                        <a href="<?php echo site_url('detention/listAll'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Detention</h4>
                        </a>

                        <a href="<?php echo site_url('assesment/listAll'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">HR Violations</h4>
                        </a>

                        <a href="<?php echo site_url('release/listAll'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Release</h4>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Short Stats
                </div>
                <div class="panel-body" style="height: 270px">
                    <table class="table table-striped table-hover">
                        <tbody>

                        <tr>
                            <td>Total Number of Files</td>
                            <td>                               <span
                                    class="badge"><?php echo $total_number_of_files; ?></span> <a
                                    href="#">
                            </td>
                        </tr>
                        <tr>
                            <td>Total Number of Male Cases</td>
                            <td>                               <span
                                    class="badge"><?php echo $total_male_count; ?></span> <a
                                    href="#">
                            </td>
                        </tr>
                        <tr>
                            <td>Total Number of Female Cases</td>
                            <td>                               <span
                                    class="badge"><?php echo $total_female_count; ?></span> <a
                                    href="#">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p></p>

                </div>
            </div>
        </div>
    </div>
</div>
