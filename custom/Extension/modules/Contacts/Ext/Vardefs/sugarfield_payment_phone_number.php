<?php 
  $dictionary['Contact']['fields']['payment_phone_number'] = array (
      'name' => 'payment_phone_number',
      'vname' => 'LBL_PAYMENT_PHONE_NUMBER',
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