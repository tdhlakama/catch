<!-- Page Heading -->
<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>
<!-- /.row -->

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="row">

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
                                    href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Number of Male Cases</td>
                            <td>                               <span
                                    class="badge"><?php echo $total_male_count; ?></span> <a
                                    href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Number of Female Cases</td>
                            <td>                               <span
                                    class="badge"><?php echo $total_female_count; ?></span> <a
                                    href="#"></a>
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

<div class="row" id="jbarDiv">
    <h3 style="text-align: center">Summary Crimes Committed</h3>
    <br/><br/>
    <div id="chargesCommittedGraph"></div>
</div>

<div class="row" id="jbarDiv">
    <h3 style="text-align: center">Summary Human Rights Violations</h3>
    <br/><br/>
    <div id="hrViolationsGraph"></div>
</div>


<div class="row" id="jbarDiv">
    <h3 style="text-align: center">Services Provided </h3>
    <br/><br/>
    <div id="caseServicesGraph"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        var charges_committed = <?php echo json_encode($charges_committed) ?>;
        var hr_violations = <?php echo json_encode($hr_violations) ?>;
        var case_services = <?php echo json_encode($case_services) ?>;

        $('#chargesCommittedGraph').jqBarGraph({
            data: charges_committed,
            barSpace: 20,
            width: 800,
            color: '#A9A9A9',
            sort: "'desc'"
        });


        $('#hrViolationsGraph').jqBarGraph({
            data: hr_violations,
            barSpace: 20,
            width: 800,
            color: '#A9A9A9',
            sort: "'desc'"
        });

        $('#caseServicesGraph').jqBarGraph({
            data: case_services,
            barSpace: 20,
            width: 1000,
            color: '#A9A9A9',
            sort: "'desc'"
        });

    });
</script>