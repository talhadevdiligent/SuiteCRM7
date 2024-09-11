<?php
    $dictionary['Surveys']['fields']['surveys_contacts'] = array(
        'name' => 'contacts',
        'type' => 'link',
        'relationship' => 'surveys_contacts',  
        'module' => 'Contacts',
        'bean_name' => 'Contact',
        'source' => 'non-db',
        'vname' => 'LBL_CONTACTS',
    );

    $dictionary['Surveys']['fields']['contact_name'] = array (  
        'name'=>'contact_name',
        'type'=>'relate',
        'id_name'=>'contact_id',
        'vname' => 'LBL_CONTACT_NAME',
        'link'=>'contacts',
        'table'=>'contacts',
        'module'=>'Contacts',
    );
    $dictionary['Surveys']['fields']['contact_id'] = array(
        'name' => 'contact_id',
        'vname' => 'LBL_CONTACT_ID',
        'type' => 'id',
        'module' => 'Contacts',
        'table' => 'contacts',
        'dbType' => 'id',
        'reportable' => false,
		'massupdate' => false,
        'duplicate_merge' => 'disabled',
    );
    

    $dictionary['Surveys']['relationships']['surveys_contacts'] = array(
        'lhs_module'=> 'Contacts',
        'lhs_table'=> 'contacts',
        'lhs_key' => 'id',
        'rhs_module'=> 'Surveys',
        'rhs_table'=> 'surveys',
        'rhs_key' => 'contact_id',
        'relationship_type' => 'one-to-many',
    );
?>