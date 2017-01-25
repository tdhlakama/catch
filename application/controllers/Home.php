<?php

/**
 * Application Start
 *
 * @author tdhlakama
 */
class Home extends Generic_home
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['total_number_of_files'] = $this->case_file_model->get_row_count();
        $data['total_male_count'] = $this->case_file_model->get_count_by_gender('M');
        $data['total_female_count'] = $this->case_file_model->get_count_by_gender('F');

        $data['charges_committed'] = $this->charges_committed();

        $data['hr_violations'] = $this->hr_violations();

        $this->load->view('home_view', $data);
        $this->load->view('footer');
    }

    public function charges_committed()
    {
        $yes = 'yes';
        $charges_committed = array();
        $count = $this->arrest_model->count_rape_($yes);
        array_push($charges_committed, array($count, "Rape"));

        $count = $this->arrest_model->count_robbery_($yes);
        array_push($charges_committed, array($count, "Robbery"));

        $count = $this->arrest_model->count_rape_($yes);
        array_push($charges_committed, array($count, "Rape"));

        $count = $this->arrest_model->count_theft_($yes);
        array_push($charges_committed, array($count, "Theft"));

        $count = $this->arrest_model->count_sex_with_minor($yes);
        array_push($charges_committed, array($count, "Sex With Minor"));

        $count = $this->arrest_model->count_touting_repeat($yes);
        array_push($charges_committed, array($count, "Touting"));

        $count = $this->arrest_model->count_indecent_assault($yes);
        array_push($charges_committed, array($count, "Indecent Assault"));

        $count = $this->arrest_model->count_drug($yes);
        array_push($charges_committed, array($count, "Drug And Substance Abuse"));

        $count = $this->arrest_model->count_unlawful_entry($yes);
        array_push($charges_committed, array($count, "Unlawful Entry"));

        $count = $this->arrest_model->count_attempted_murder($yes);
        array_push($charges_committed, array($count, "Attempted Murder"));

        $count = $this->arrest_model->count_kidnapping($yes);
        array_push($charges_committed, array($count, "Kidnapping"));

        $count = $this->arrest_model->count_malicious_damage($yes);
        array_push($charges_committed, array($count, "Malicious Damage"));

        return $charges_committed;
    }

    public function hr_violations()
    {
        $yes = 'yes';
        $hr_violations = array();
        $count = $this->assesment_model->count_food_deprivation($yes);
        array_push($hr_violations, array($count, "Food Deprivation"));

        $count = $this->assesment_model->count_hand_cuffed($yes);
        array_push($hr_violations, array($count, "Hand Cuffed"));

        $count = $this->assesment_model->count_beaten_without_instrument($yes);
        array_push($hr_violations, array($count, "Beaten"));

        $count = $this->assesment_model->count_slapping($yes);
        array_push($hr_violations, array($count, "Slapped"));

        $count = $this->assesment_model->verbal_abuse($yes);
        array_push($hr_violations, array($count, "Vebal Abuse"));

        $count = $this->assesment_model->count_solitary_confinement($yes);
        array_push($hr_violations, array($count, "Solitary Confinement"));

        $count = $this->assesment_model->count_toilet_deprivation($yes);
        array_push($hr_violations, array($count, "Toliet Deprivation"));

        $count = $this->assesment_model->count_coerced($yes);
        array_push($hr_violations, array($count, "Coerced"));

        $count = $this->assesment_model->count_inadequate_bedding($yes);
        array_push($hr_violations, array($count, "Inadequate Bedding"));

        $count = $this->assesment_model->count_inadequate_diet($yes);
        array_push($hr_violations, array($count, "Inadequate Diet"));


        return $hr_violations;
    }



}

?>

