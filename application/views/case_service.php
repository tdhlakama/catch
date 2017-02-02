<div class="row">
    <?php echo $this->session->flashdata('msg'); ?>
    <br/>
    <table id="emp_table" class="table table-striped table-hover">
        <caption><h4>Case Services</h4></caption>
        <thead>
        <tr>
            <th>Police Ref #</th>
            <th>File #</th>
            <th>Age  Estimation</th>
            <th>Bail and Fine payment</th>
            <th>Family Therapy</th>
            <th>Family mediation</th>
            <th>Socio-legal counselling</th>
            <th>Court accompaniment</th>
            <th>Walk-in consultation</th>
            <th>Legal representation</th>
            <th>Restitution</th>
            <th>Bus fare</th>
            <th>Assistance of inmates</th>
            <th>Escorting of children from a detention facility to a place of safety</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($case_service_list as $item): ?>
            <tr>
                <td><?php echo $item->service_no; ?></td>
                <td><?php echo $item->case_file_no; ?></td>
                <td ><?php echo $item->age_estimate; ?></td>
                <td><?php echo $item->bill_payment; ?></td>
                <td><?php echo $item->therapy; ?></td>
                <td><?php echo $item->mediation; ?></td>
                <td><?php echo $item->counselling; ?></td>
                <td><?php echo $item->accompaniment; ?></td>
                <td><?php echo $item->consultation; ?></td>
                <td><?php echo $item->presentation; ?></td>
                <td><?php echo $item->restitution; ?></td>
                <td><?php echo $item->transport; ?></td>
                <td><?php echo $item->assistance_inmates; ?></td>
                <td><?php echo $item->escort; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
