<?php 
  $dictionary['Contact']['fields']['previous_treatment_phoner'] = array (
      'name' => 'previous_treatment_phoner',
      'vname' => 'LBL_PREVIOUS_TREATMENT_PHONER',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'For any Eergency use this Mobile phone number of the contact',
      'merge_filter' => 'enabled',
  );
?>