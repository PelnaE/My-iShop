<?php defined('SYSPATH') or die('Hacking attemp!');

class Controller_Cart extends Controller_Template
{
    public function action_index()
    {
        $view                    = View::factory('cart/list');
        $session                 = Session::instance()->get('email');
        $cart                    = new Model_Cart();
        $view->products          = $cart->get_products_from_cart($session);
        $clients                 = new Model_Client();
        $view->valute            = $clients->get_user_valute($session);
        $this->template->content = $view->render();
    }
    public function action_delete()
    {
        $product_id = $this->request->param('id');
        $token      = $this->request->param('id2');
        $session    = Session::instance()->get('email');
        if (empty($product_id)) {
            $this->request->redirect('cart');
        }

        if (!Security::check($token)) {
            $this->request->redirect('cart');
        }

        $model_for_cart   = Model::factory('cart');
        $delete_from_cart = $model_for_cart->delete_from_cart($product_id);

        if (!$delete_from_cart) {
            $this->request->redirect('cart');
        }

        $this->request->redirect('cart');
    }
}