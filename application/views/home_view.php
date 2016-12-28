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

                        <a href="<?php echo site_url('case_file/case_csv'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Download Case Demograhic Template</h4>
                        </a>

                        <a href="<?php echo site_url('arrest/arrest_csv'); ?>" class="list-group-item">
                            <h4 class="list-group-item-heading">Case Arrest Template</h4>
                        </a>

                        <a href="<?php echo site_url('detention/detetion_assesment_csv'); ?>" class="list-group-item">
                                                    <h4 class="list-group-item-heading">Case Detention Assessment Template</h4>
                                                </a>

                         <a href="<?php echo site_url('release/case_release__csv'); ?>" class="list-group-item">
                                 <h4 class="list-group-item-heading">Case Release Template</h4>
                         </a>

                          <a href="<?php echo site_url('hrh/case_hrh_csv'); ?>" class="list-group-item">
                                                          <h4 class="list-group-item-heading">Case HRH Template</h4>
                                                  </a>
                     
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">

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
                        </tbody>
                    </table>
                    <p></p>

                </div>
            </div>
        </div>
    </div>
</div>
