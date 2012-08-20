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
        $categories                  = new Model_Category();
        $client                      = new Model_Client();
        $product                     = new Model_Product();
        $this->template->products    = $product->get_random_product_with_discount();
        $this->template->valute      = $client->get_user_valute(Session::instance()->get('email'));
        $this->template->categories  = $categories->get_list_of_categories();
        $this->template->users       = $client->get_user_data(Session::instance()->get('email'));
        $this->template->scripts     = $config->scripts;
    }
}
