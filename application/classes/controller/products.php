<?php defined('SYSPATH') or die ('Hacking attemp');

class Controller_Products extends Controller_Template 
{
    public function action_index()
    {
        $view                    = View::factory('products/main');
        $products                = new Model_Product();
        $categories              = new Model_Category();
        $clients                 = new Model_Client();
        $user_email              = Session::instance()->get('email');
        $view->valute            = $clients->get_user_valute($user_email);
        $view->categories        = $categories->get_list_of_categories();
        $view->products          = $products->get_all_products();
        $this->template->content = $view->render();
    }

    public function action_category()
    {
        $category_slug = $this->request->param('id');
        if (empty($category_slug)) {
            $this->request->redirect('products');
        }
        $view                    = View::factory('products/by_category');
        $clients                 = new Model_Client();
        $categories              = new Model_Category();
        $products                = new Model_Product();
        $user_session            = Session::instance()->get('email');
        $view->valute            = $clients->get_user_valute($user_session);      
        $view->products          = $products->get_products_by_category($category_slug);
        $view->category          = $categories->get_category_by_slug($category_slug);
        $this->template->content = $view->render();
    }

    public function action_item() 
    {
        $product_id = $this->request->param('id');

        if (empty($product_id)) {
            echo Error::number_404();          
        }

        $view                    = View::factory('products/info');
        $products                = new Model_Product();
        $clients                 = new Model_Client();
        $view->products          = $products->get_product_by_id($product_id);
        $user_email              = Session::instance()->get('email');
        $view->valute            = $clients->get_user_valute($user_email);
        $this->template->content = $view->render();
    }

    public function action_add_to_cart() {
        $product_count = $this->request->param('id');
        $product_id    = $this->request->param('id2');

        if (!Security::check($this->request->param('id3'))) {
            $this->request->redirect('products');
        }

        if (empty($product_id)) {
            $this->request->redirect('cart');
        }

        $cart    = new Model_Cart();
        $session = Session::instance()->get('email');

        if (empty($session)) {
            $this->request->redirect('products');
        }

        $add_to_cart = $cart->add_to_cart($product_count,$product_id,$session);
        $this->request->redirect('cart');
    }
}
