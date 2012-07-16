<?php defined('SYSPATH') or die ('Hacking attemp!');

class Controller_Template extends Kohana_Controller_Template
{
    public $template = 'templates/minimalism';
    public function before()
    {
        parent::before();
        $config                      = Kohana::$config->load('common');
        $this->template->name        = $config->name;
        $this->template->stylesheets = $config->stylesheets;
        $this->template->scripts     = $config->scripts;
    }
}
