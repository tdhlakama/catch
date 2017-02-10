<div class="row">
    <?php echo $this->breadcrumbs->show(); ?>
</div>


<table id="emp_table" class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Police Ref #</th>
        <th>File #</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Province</th>
        <th>Child's Contact details(Address)</th>
        <th>Alleged Crime</th>
        <th>Rape</th>
        <th>Touting</th>
        <th>Sodomy</th>
        <th>Robbery</th>
        <th>Attempted Murder</th>
        <th>Murder</th>
        <th>Indecent Assault</th>
        <th>Kidnapping</th>
        <th>Theft</th>
        <th>Stock Theft</th>
        <th>Drug and substance abuse</th>
        <th>malicious damage to property</th>
        <th>Unlawful Entry</th>
        <th>Sexual Intercourse with a minor</th>
        <th>Bulling</th>
        <th>Others</th>
        <th>Police Station</th>
        <th>Name of Arresting Officer</th>
        <th>Were the charges communicated to the child</th>
        <th>Were the parents informed</th>
        <th>Has the child been arested before</th>
        <th>Is it on similar Charges</th>
        <th>What was the first offense</th>
        <th>Murder Repeat</th>
        <th>Rape Repeat</th>
        <th>Touting Repeat</th>
        <th>Sodomy Repeat</th>
        <th>Robbery Repeat</th>
        <th>Attempted Murder Repeat</th>
        <th>Indecent Assault Repeat</th>
        <th>Kidnapping Repeat</th>
        <th>Theft</th>
        <th>Sexual Intercourse Minor Repeat</th>
        <th>Malicious Damage Repeat</th>
        <th>Unlaw full Entry Repeat</th>
        <th>Drug Abuse Repeat</th>
        <th>Bulling Repeat</th>
        <th>Stock Theft Repeat</th>
        <th>Unknown</th>
        <th>Others</th>
        <th>Was Child Alone when arrested</th>
        <th>With whom was the child staying with prior to arrest</th>
        <th>Where was the child living prior to arrest </th>
        <th>Was the child working</th>
        <th>The guardians were not informed</th>
        <th>Hand Cuffed</th>
        <th>Beaten_without instrument</th>
        <th>Slapped</th>
        <th>Verbal Abuse</th>
        <th>Mixed With Adults</th>
        <th>Coerced to admit to charges</th>
        <th>Detained for 48 hours</th>
        <th>The gallery was not cleared</th>
        <th>Charges and proceedings were  not explained in a language understood by the child</th>
        <th>The child was not represented</th>
        <th>Food deprevation</th>
        <th>Solitary Confinement</th>
        <th>Inadequate Bedding</th>
        <th>Inadequated Diet</th>
        <th>No Access to Education</th>
        <th>No access to vocational training skills</th>
        <th>No access to health services</th>
        <th>No access to clean water supply and sanitation services</th>
        <th>Deprivation from use of toilet facilities</th>
        <th>Water Boarding</th>
        <th>At which point was the violation committed</th>
        <th>Perpertrator</th>
        <th>What action did you take</th>
        <th>Notes</th>
        <th>Date of Arrival</th>
        <th>Name of Facility</th>
        <th>Type of Facility</th>
        <th>If child is sick,is he or she receiving medical attention</th>
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
        <th>Date of Release</th>
        <th>Was bail paid</th>
        <th>Bail amount paid</th>
        <th>Relesead to parent</th>
        <th>Released to Department of Child Welfare and Probation Services</th>
        
    </tr>
    </thead>
    <tbody>
    <?php foreach ($case_combined_list as $item): ?>
        <tr>
            <td><?php echo $item->case_no; ?></td>
            <td><?php echo $item->case_file_no; ?></td>
            <td><?php echo $item->first_name; ?></td>
            <td ><?php echo $item->last_name; ?></td>
            <td><?php echo $item->gender; ?></td>
            <td><?php echo $item->date_of_birth; ?></td>
            <td><?php echo $item->address_province; ?></td>
            <td><?php echo $item->address_detail; ?></td>
            <td><?php echo $item->alleged_crime; ?></td>
            <td><?php echo $item->rape; ?></td>
            <td><?php echo $item->touting; ?></td>
            <td><?php echo $item->sodomy; ?></td>
            <td><?php echo $item->robbery; ?></td>
            <td><?php echo $item->attempted_murder; ?></td>
            <td><?php echo $item->murder; ?></td>
            <td><?php echo $item->indecent_assault; ?></td>
            <td><?php echo $item->kidnapping; ?></td>
            <td><?php echo $item->theft; ?></td>
            <td><?php echo $item->stock_theft; ?></td>
            <td><?php echo $item->drug; ?></td>
            <td><?php echo $item->malicious_damage; ?></td>
            <td><?php echo $item->unlawful_entry; ?></td>
            <td><?php echo $item->sex_with_minor; ?></td>
            <td><?php echo $item->bulling; ?></td>
            <td><?php echo $item->others; ?></td>
            <td><?php echo $item->arresting_officer; ?></td>
            <td><?php echo $item->station; ?></td>
            <td><?php echo $item->charges_communicated; ?></td>
            <td><?php echo $item->parent_informed; ?></td>
            <td><?php echo $item->arrested_before; ?></td>
            <td><?php echo $item->similar_charges; ?></td>
            <td><?php echo $item->first_time; ?></td>
            <td><?php echo $item->murder_repeat; ?></td>
            <td><?php echo $item->rape_repeat; ?></td>
            <td><?php echo $item->touting_repeat; ?></td>
            <td><?php echo $item->sodomy_repeat; ?></td>
            <td><?php echo $item->robbery_repeat; ?></td>
            <td><?php echo $item->attempted_murder_repeat; ?></td>
            <td><?php echo $item->indecent_assault_repeat; ?></td>
            <td><?php echo $item->kidnapping_repeat; ?></td>
            <td><?php echo $item->theft_repeat; ?></td>
            <td><?php echo $item->sex_with_minor_repeat; ?></td>
            <td><?php echo $item->malicious_damage_repeat; ?></td>
            <td><?php echo $item->unlawful_entry_repeat; ?></td>
            <td><?php echo $item->drug_repeat; ?></td>
            <td><?php echo $item->bulling_repeat; ?></td>
            <td><?php echo $item->stock_theft_repeat; ?></td>
            <td><?php echo $item->unknown; ?></td>
            <td><?php echo $item->others_repeat; ?></td>
            <td><?php echo $item->child_alone; ?></td>
            <td><?php echo $item->whom; ?></td>
            <td><?php echo $item->arrested_where; ?></td>
            <td><?php echo $item->working; ?></td>
            <td><?php echo $item->nature_of_violation; ?></td>
            <td><?php echo $item->hand_cuffed; ?></td>
            <td><?php echo $item->beaten_without_instrument; ?></td>
            <td><?php echo $item->slapping; ?></td>
            <td><?php echo $item->verbal_abuse; ?></td>
            <td><?php echo $item->mixed_with_adults; ?></td>
            <td><?php echo $item->coerced; ?></td>
            <td><?php echo $item->detained_48Hours; ?></td>
            <td><?php echo $item->gallery_cleared; ?></td>
            <td><?php echo $item->charges_explained; ?></td>
            <td><?php echo $item->child_represented; ?></td>
            <td><?php echo $item->food_deprivation; ?></td>
            <td><?php echo $item->solitary_confinement; ?></td>
            <td><?php echo $item->inadequate_bedding; ?></td>
            <td><?php echo $item->inadequate_diet; ?></td>
            <td><?php echo $item->education; ?></td>
            <td><?php echo $item->vocation_training; ?></td>
            <td><?php echo $item->health_care; ?></td>
            <td><?php echo $item->water_sanitation; ?></td>
            <td><?php echo $item->toilet_deprivation; ?></td>
            <td><?php echo $item->water_boaring; ?></td>
            <td><?php echo $item->point_of_violation; ?></td>
            <td><?php echo $item->perpetrator; ?></td>
            <td><?php echo $item->action_taken; ?></td>
            <td><?php echo $item->additional_notes; ?></td>
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
            <td><?php echo $item->escort; ?>
            <td><?php echo $item->date_of_release; ?></td>
            <td><?php echo $item->bail; ?></td>
            <td><?php echo $item->bail_amount; ?></td>
            <td><?php echo $item->care_parent; ?></td>
            <td><?php echo $item->care_organisation; ?></td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
