<?php

class Log extends DataObject
{

    public static $db = array(
        'Category' => 'Enum(array("ERROR","ACCESS","GENERAL", "FILES", "CONFIGURATION"), "GENERAL")',
        'Method' => 'Varchar',
        'Action' => 'Varchar',
        'Source' => 'Enum(array("FE","BE"), "FE")',
        'UserAgent' => 'Varchar',
        'IpAddress' => 'Varchar',
        'Message' => 'Text',
    );

    private static $has_one = array(
        'Member' => 'Member',
    );

    static $default_sort = "Created DESC";

    public static $summary_fields = array(
        'Category',
        'Method',
        'Source',
        'Message',
        'Created',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    function canCreate($member = NULL)
    {
        return false;
    }

    function canEdit($member = NULL)
    {
        return false;
    }

}
