<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Root controller of the site.
 */

class Controller_Home extends Controller_Template
{
    public function action_index()
    {
        $view                    = View::factory('home/main');
        $products                = new Model_Product();
        $clients                 = new Model_Client();
        $user_session            = Session::instance()->get('email');
        $view->valute            = $clients->get_user_valute($user_session);
        $view->last_products     = $products->get_newest_products();
        $view->discounts         = $products->get_products_with_discounts();
        $this->template->content = $view->render();
    }
}