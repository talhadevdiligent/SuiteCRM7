<?php

    $layout_defs["Contacts"]["subpanel_setup"]['contacts_accounts'] = array (
            'order' => 200,
            'module' => 'Accounts',
            'subpanel_name' => 'default',
            'sort_order' => 'asc',
            'sort_by' => 'id',
            'title_key' => 'LBL_CONTACTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
            'get_subpanel_data' => 'contacts_accounts',
            'top_buttons' =>
                array (
                    0 => 
                    array (
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                    ),
                    1 => 
                    array (
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                    ),
                ),
        );

?>