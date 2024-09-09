<?php 
  $dictionary['Contact']['fields']['main_phone_number'] = array (
      'name' => 'main_phone_number',
      'vname' => 'LBL_MAIN_PHONE_NUMBER',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'Main Mobile phone number of the contact',
      'merge_filter' => 'enabled',
  );
?>