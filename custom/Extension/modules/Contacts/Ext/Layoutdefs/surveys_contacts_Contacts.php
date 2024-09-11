<?php

    $layout_defs["Contacts"]["subpanel_setup"]['surveys_contacts'] = array (
            'order' => 200,
            'module' => 'Surveys',
            'subpanel_name' => 'default',
            'sort_order' => 'asc',
            'sort_by' => 'id',
            'title_key' => 'LBL_SURVEYS_CONTACTS_FROM_SURVEYS_TITLE',
            'get_subpanel_data' => 'surveys_contacts',
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