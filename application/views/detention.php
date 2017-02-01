<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="detention_table" class="table table-striped table-hover">
        <caption><h4>Detention Information</h4></caption>
        <thead>
        <tr>
            <th>Police Ref #</th>
            <th>File #</th>
            <th>Date of Arrival</th>
            <th>Name of Facility</th>
            <th>Type of Facility</th>
            <th>Was a medical check up carried out upon arrival</th>
            <th>What services is the child receiving</th>
            <th>Is legal aid provided to the child</th>
            <th>Name of organisation providing the legal service</th>
            <th>Lawyer's Name</th>
            <th>Lawyer's phone Number</th>
            <th>When did the child meet with the lawyer</th>
            <th>How many Times</th>
            <th>How many other prisoners share same room</th>
            <th>Does the family of the child visit</th>
            <th>How long was the child been in detention</th>
            <th>Up to 24 hours</th>
            <th>Up to 48 Hours</th>
            <th>3 to 10 Days</th>
            <th>10 - 21 Days</th>
            <th>Above 21 Days</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($detentionlist as $i => $item): ?>
            <tr>
                <a href="#" onclick="show_detention();">
                    <?php echo $item->detention_no; ?>
                </a>

                <div id="detentionModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Detention Detail</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <tr>
                                        <td>Detention File #</td>
                                        <td><?php echo $item->detention_no; ?></td>
                                    <tr>
                                    <tr>
                                        <td>File #</td>
                                        <td><?php echo $item->case_file_no; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Date of Arrival</td>
                                        <td><?php echo $item->date_of_arrival; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Name of Facility</td>
                                        <td><?php echo $item->facility_name; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Type of Facility</td>
                                        <td><?php echo $item->facility_type; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Was a medical check up carried out upon arrival</td>
                                        <td><?php echo $item->medical_done_before; ?></td>
                                    <tr>
                                    <tr>
                                        <td>What services is the child receiving</td>
                                        <td><?php echo $item->services_received; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Is legal aid provided to the child</td>
                                        <td><?php echo $item->legal_aid; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Name of organisation providing the legal service</td>
                                        <td><?php echo $item->organisation; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Lawyer's Name</td>
                                        <td><?php echo $item->lawyer; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Lawyer's phone Number</td>
                                        <td><?php echo $item->phone; ?></td>
                                    <tr>
                                    <tr>
                                        <td>When did the child meet with the lawyer</td>
                                        <td><?php echo $item->met_lawyer; ?></td>
                                    <tr>
                                    <tr>
                                        <td>How many time</td>
                                        <td><?php echo $item->met_how_many_times; ?></td>
                                    <tr>
                                    <tr>
                                        <td>How many other prisoners share same room</td>
                                        <td><?php echo $item->number_of_prisoners; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Does the family of the child visit</td>
                                        <td><?php echo $item->family_visit; ?></td>
                                    <tr>
                                    <tr>
                                        <td>How long was the child been in detention</td>
                                        <td><?php echo $item->detention_duration; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Up to 24 Hours</td>
                                        <td><?php echo $item->_24to48hrs; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Up to 48 Hours</td>
                                        <td><?php echo $item->_3to10days; ?></td>
                                    <tr>
                                    <tr>
                                        <td>3 to 10 Days</td>
                                        <td><?php echo $item->_3to10days; ?></td>
                                    <tr>
                                    <tr>
                                        <td>10 - 21 Days</td>
                                        <td><?php echo $item->_10to21days; ?></td>
                                    <tr>
                                    <tr>
                                        <td>Above 21 Days</td>
                                        <td><?php echo $item->_greaterThan21; ?></td>
                                    <tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <td><?php echo $item->case_file_no; ?></td>
                <td><?php echo $item->date_of_arrival; ?></td>
                <td><?php echo $item->facility_name; ?></td>
                <td><?php echo $item->facility_type; ?></td>
                <td><?php echo $item->services_received; ?></td>
                <td><?php echo $item->medical_done_before; ?></td>
                <td><?php echo $item->legal_aid; ?></td>
                <td><?php echo $item->organisation; ?></td>
                <td><?php echo $item->lawyer; ?></td>
                <td><?php echo $item->phone; ?></td>
                <td><?php echo $item->met_lawyer; ?></td>
                <td><?php echo $item->met_how_many_times; ?></td>
                <td><?php echo $item->number_of_prisoners; ?></td>
                <td><?php echo $item->family_visit; ?></td>
                <td><?php echo $item->detention_duration; ?></td>
                <td><?php echo $item->_lessThan24hrs; ?></td>
                <td><?php echo $item->_24to48hrs; ?></td>
                <td><?php echo $item->_3to10days; ?></td>
                <td><?php echo $item->_10to21days; ?></td>
                <td><?php echo $item->_greaterThan21; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
