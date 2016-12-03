<?php

class LogAdmin extends ModelAdmin
{

    private static $menu_title = 'Logs';

    private static $url_segment = 'logs';

    private static $managed_models = array(
        'Log'
    );

    private static $menu_icon = 'DbLog/icons/logs_16x16.png';

}