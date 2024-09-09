<?php
    $dictionary['Contact']['fields']['medical_email'] = array (
        'name' => 'medical_email',
        'vname' => 'LBL_MEDICAL_EMAIL',
        'type' => 'varchar',
        'function' => 
        array (
          'name' => 'getEmailAddressWidget',
          'returns' => 'html',
        ),
        'source' => 'non-db',
        'group' => 'email1',
        'merge_filter' => 'enabled',
        'studio' => 
        array (
          'editview' => true,
          'editField' => true,
          'searchview' => false,
          'popupsearch' => false,
        ),
        'full_text_search' => 
        array (
          'boost' => 3,
          'analyzer' => 'whitespace',
        ),
      );
?>