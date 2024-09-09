<?php
    $dictionary['Contact']['fields']['main_email'] = array (
        'name' => 'main_email',
        'vname' => 'LBL_MAIN_EMAIL',
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
        )
      );
?>