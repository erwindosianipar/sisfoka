<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance{

    public function __construct()
    {
        log_message('debug','Accessing maintenance hook!');
    }
    
    public function offline()
    {
        if(file_exists(APPPATH.'config/config.php'))
        {
            include(APPPATH.'config/config.php');
            if(isset($config['maintenance_mode']) && $config['maintenance_mode'] === TRUE)
            {
                include(APPPATH.'views/public/maintenance.php');
                exit;
            }
        }
    }
}