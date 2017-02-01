<div class="row">
    <table id="arrest_table" class="table table-striped table-hover">
        <caption><h4>Arrest Information</h4></caption>
        <thead>
        <tr>
            <th>Police Ref #</th>
            <th>File #</th>
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
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arrestlist as $i => $item): ?>
            <tr>
                <td>
                    <a href="#" onclick="show_arrest();">
                        <?php echo $item->arrest_no; ?>
                    </a>

                    <div id="arrestModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Arrest Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <tr>
                                            <td>File #</td>
                                            <td> <?php echo $item->case_file_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Child's Contact details (Address)</td>
                                            <td><?php echo $item->address_detail; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alleged Crime</td>
                                            <td><?php echo $item->alleged_crime; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Rape</td>
                                            <td><?php echo $item->rape; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Touting</td>
                                            <td><?php echo $item->touting; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sodomy</td>
                                            <td><?php echo $item->sodomy; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Robbery</td>
                                            <td><?php echo $item->robbery; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Attempted Murder</td>
                                            <td><?php echo $item->attempted_murder; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Murder</td>
                                            <td><?php echo $item->murder; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Indecent Assault</td>
                                            <td><?php echo $item->indecent_assault; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kidnapping</td>
                                            <td><?php echo $item->kidnapping; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Theft</td>
                                            <td><?php echo $item->theft; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Stock Theft</td>
                                            <td><?php echo $item->stock_theft; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Drug and substance abuse</td>
                                            <td><?php echo $item->drug; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Malicious damage to property</td>
                                            <td><?php echo $item->malicious_damage; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Unlawful Entry</td>
                                            <td><?php echo $item->unlawful_entry; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sexual Intercourse Minor</td>
                                            <td><?php echo $item->sex_with_minor; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bulling</td>
                                            <td><?php echo $item->bulling; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Others</td>
                                            <td><?php echo $item->others; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Police Station</td>
                                            <td><?php echo $item->arresting_officer; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Name of Arresting Officer</td>
                                            <td><?php echo $item->station; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Were the charges communicated to the child</td>
                                            <td><?php echo $item->charges_communicated; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Were the parents informed</td>
                                            <td><?php echo $item->parent_informed; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Has the child been arested before</td>
                                            <td><?php echo $item->arrested_before; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Is it on similar Charges</td>
                                            <td><?php echo $item->similar_charges; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Was offence first time</td>
                                            <td><?php echo $item->first_time; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Murder Repeat</td>
                                            <td><?php echo $item->murder_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Rape Repeat</td>
                                            <td><?php echo $item->rape_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Touting Repeat</td>
                                            <td><?php echo $item->touting_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sodomy Repeat</td>
                                            <td><?php echo $item->sodomy_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Robbery Repeat</td>
                                            <td><?php echo $item->robbery_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Attempted Murder Repeat</td>
                                            <td><?php echo $item->attempted_murder_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Indecent Assault Repeat</td>
                                            <td><?php echo $item->indecent_assault_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kidnapping Repeat</td>
                                            <td><?php echo $item->kidnapping_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Theft</td>
                                            <td><?php echo $item->theft_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sexual Intercourse Minor Repeat</td>
                                            <td><?php echo $item->sex_with_minor_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Malicious damage to property Repeat</td>
                                            <td><?php echo $item->malicious_damage_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Unlaw full Entry Repeat</td>
                                            <td><?php echo $item->unlawful_entry_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Drug Abuse Repeat</td>
                                            <td><?php echo $item->drug_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bulling Repeat</td>
                                            <td><?php echo $item->bulling_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Stock Theft Repeat</td>
                                            <td><?php echo $item->stock_theft_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Unknown</td>
                                            <td><?php echo $item->unknown; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Others</td>
                                            <td><?php echo $item->others_repeat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Was Child Alone when arrested</td>
                                            <td><?php echo $item->child_alone; ?></td>
                                        </tr>
                                        <tr>
                                            <td>With whom was the child staying with prior to arrest</td>
                                            <td><?php echo $item->whom; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Where was the child living prior to arrest </td>
                                            <td><?php echo $item->arrested_where; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Was the child working</td>
                                            <td><?php echo $item->working; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
                <td><?php echo $item->case_file_no; ?></td>
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
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
