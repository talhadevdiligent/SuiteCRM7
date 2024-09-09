<?php
    $dictionary['Contact']['fields']['account_contant_link'] = array(
        'name' => 'account_contant_link',
        'vname' => 'LBL_ACCOUNT_CONTACT',
        'type' => 'link',
        'relationships' => 
            array(
                'lhs_module'=> 'Accounts',
                'lhs_table'=> 'accounts',
                'lhs_key' => 'id',
                'rhs_module'=> 'Contacts',
                'rhs_table'=> 'contacts',
                'rhs_key' => 'account_id',
                'relationship_type' => 'one-to-many',    
            ),
    ); 
?>
