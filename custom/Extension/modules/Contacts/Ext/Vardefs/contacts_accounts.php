<?php
    $dictionary['Contact']['fields']['contacts_accounts'] = array(
        'name' => 'contacts_accounts',
        'type' => 'link',
        'relationship' => 'contacts_accounts',
        'source' => 'non-db',
        'module' => 'Acconts',
        'bean_name' => 'Account',
        'vname' => 'LBL_ACCOUNT',
        'hide_history_contacts_emails' => true,
    );



    $dictionary['Contact']['relationships']['contacts_accounts'] = array(
        'lhs_module'=> 'Accounts',
        'lhs_table'=> 'accounts',
        'lhs_key' => 'id',
        'rhs_module'=> 'Contacts',
        'rhs_table'=> 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_accounts2',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
    );
    
    

?>