<?php
    $dictionary['Contacts']['fields']['contact_survey_link'] = array(
        'name' => 'contact_survey_link',
        'vname' => 'LBL_CONTACT_SURVEY_LINK',
        'type' => 'link',
        'relationships' => 
            array(
                'lhs_module'=> 'Contacts',
                'lhs_table'=> 'contacts',
                'lhs_key' => 'id',
                'rhs_module'=> 'Surveys',
                'rhs_table'=> 'surveys',
                'rhs_key' => 'contact_id',
                'relationship_type' => 'one-to-many',    
            ),
    ); 
?>