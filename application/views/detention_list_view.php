<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<h4><a href="<?php echo site_url('detention/upload_view/'); ?>">
        <i class="glyphicon glyphicon-upload"></i> Upload Detention File</a></h4>

<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="detention_table" class="table table-striped table-hover">
        <caption><h4>Detention Information</h4></caption>
        <thead>
        <tr>
            <th>Arrest File #</th>
            <th>File Number</th>
            <th>Date of Arrival</th>
            <th>Name of Facility</th>
            <th>Type of Facility</th>
            <th>Medical Check Up Done</th>
            <th>Services Received</th>
            <th>Is Legal Aid Provided</th>
            <th>Name of Organisation</th>
            <th>Lawyers Name</th>
            <th>Lawyer Phone</th>
            <th>When child meet lawyer</th>
            <th>How many tine</th>
            <th>Number of Prisoner same room</th>
            <th>Does the family visit</th>
            <th>How long was child detained</th>
            <th>Up to 24 Hours</th>
            <th>Up to 48 Hours</th>
            <th>3 to 10 Days</th>
            <th>10 - 21 Days</th>
            <th>Above 21 Days</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($detentionlist as $i => $item): ?>
            <tr>
                <td><?php echo $item->detention_no; ?></td>
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
