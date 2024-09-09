<?php 
  $dictionary['Contact']['fields']['medical_phone_number'] = array (
      'name' => 'medical_phone_number',
      'vname' => 'LBL_MEDICAL_PHONE_NUMBER',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'For any Medical Information use this Mobile phone number of the contact',
      'merge_filter' => 'enabled',
  );
?>