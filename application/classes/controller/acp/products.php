<?php defined('SYSPATH') or die ('Hacking at');

class Controller_ACP_Products extends Controller_Template
{

    public function action_list()
    {
        $view                    = View::factory('acp/products');
        $products                = new Model_Product();
        $view->products          = $products->get_all_products();
        $this->template->content = $view->render();
    }
    public function action_create()
    {
        $view             = View::factory('acp/create/product');
        $categories       = new Model_Category();
        $view->categories = $categories->get_list_of_categories();

        if ($this->request->method() === Request::POST) {
            $name        = $this->request->post('name');
            $valute      = $this->request->post('valute');
            $category    = $this->request->post('category');
            $description = $this->request->post('description');
            $price       = $this->request->post('price');
            $img_url     = $this->request->post('img_url');
            $count       = $this->request->post('count');

            $price = Currency::to_database($price, $valute);

            if (empty($name) && empty($category) && empty($description) && empty($price)) {
                throw new Exception("Please do not make empty fields!");
            }
            $products           = new Model_Product();
            $data               = array(
                'image_url'   => $img_url,
                'name'        => $name,
                'category'    => $category,
                'description' => $description,
                'price'       => $price,
                'count'       => $count,
                );
            $create_new_product = $products->create_new_product($data);
            if (!$create_new_product) {
                throw new Exception("Error! Please check for DB settings!");
            }
            $this->request->redirect('acp/products');
        }
        $this->template->content = $view->render();
    }
    public function action_delete()
    {
        $product_id = $this->request->param('id');
        $token      = $this->request->param('id2');
        if (!Security::check($token)) {
            $this->request->redirect('acp/products');
        }
        if (empty($product_id)) {
            $this->request->redirect('acp/products');
        }
        $products       = new Model_Product();
        $delete_product = $products->delete_product($product_id);
        if (!$delete_product) {
            throw new Exception("Error with deleting product!");
        }
        $this->request->redirect('acp/products');
    }

    public function action_item()
    {

        $id = $this->request->param('id');

        if (empty($id)) {
            throw new Exception('ID Must Be Set!');
        }

        $view = View::factory('acp/products/info');

        $products          = new Model_Product();
        $get_product_by_id = $products->get_product_by_id($id);
        $view->products    = $get_product_by_id;

        if($this->request->method() === Request::POST){

            $name        = strip_tags($this->request->post('name'));
            $is_discount = $this->request->post('is_discount');
            $discount    = $this->request->post('discount');
            $description = $this->request->post('description');
            $price       = $this->request->post('price')*100;
            $img_url     = $this->request->post('img_url');
            $count       = $this->request->post('count');
            $token       = $this->request->param('id');

            if (Security::check($token)) {
                throw new Exception("Token is not valid!");
            }

            if (empty($is_discount) && empty($discount)) {
                $is_discount = 0;
                $discount = 0;
            } else {
                $is_discount = 1;
            }


            if (empty($name) && empty($description) && empty($price)) {
                throw new Exception("Please fill all fields!");
            }

            $products = new Model_Product();
            $data     = array(
                'is_discount' => $is_discount,
                'discount'    => $discount,
                'name'        => $name,
                'description' => $description,
                'price'       => $price,
                'image_url'   => $img_url,
                'count'       => $count,
                );
            $update_product_info = $products->update_product_info($data, $id);
            if (!$update_product_info) {
                throw new Exception("Error with database");
            }

            $this->request->redirect('acp/products');

        }

        $this->template->content = $view->render();

    }
}
