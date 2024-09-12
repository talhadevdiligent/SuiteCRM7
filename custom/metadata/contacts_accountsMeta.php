<?php
$dictionary['contacts_accounts']= array(
    'true_relationship_type' => 'many-to-many',
    'from_studio' => false,

    'table' => 'contacts_accounts2',
    'fields' => array(
        0 =>
        array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,      
        ),
        1 => 
        array (
            'name' => 'date_modified', //Required
            'type' => 'datetime',
        ),
        2 => 
        array (
            'name' => 'deleted', 
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ),
        3 => 
        array (
            'name' => 'account_id', 
            'type' => 'varchar',
            'len' => 36,
        ),
        4 => 
        array (
            'name' => 'contact_id', 
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' =>
    array (
        0 => 
        array (
            'name' => 'contacts_accountspk', 
            'type' => 'primary',
            'fields' => 
        array (
            0 => 'id',
        ),
        ),
        1 => 
        array (
            'name' => 'contacts_accounts_alt', 
            'type' => 'alternate_key',
            'fields' => 
            array (
                0 => 'account_id', 
                1 => 'contact_id', 
            ),
        ),
    ),
);