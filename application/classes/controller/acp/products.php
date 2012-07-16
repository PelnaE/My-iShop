<?php defined('SYSPATH') or die ('Hacking at');

class Controller_ACP_Products extends Controller_Template {
	
	public function action_list() {
		$view = View::factory('acp/products');
		$model_for_products = Model::factory('product');
		$get_all_products = $model_for_products->get_all_products();
		$view->products = $get_all_products;
		$this->template->content = $view->render();
	}
	public function action_create() {
		$view = View::factory('acp/create/product');
		$model_for_categories = Model::factory('category');
		$get_all_categories = $model_for_categories->get_list_of_categories();
		$view->categories = $get_all_categories;
		if($this->request->method() === Request::POST){
			$name = $this->request->post('name');
			$valute = $this->request->post('valute');
			$category = $this->request->post('category');
			$description = $this->request->post('description');
			$price = $this->request->post('price');
			$img_url = $this->request->post('img_url');
			if($valute == 'LVL'){
				$price = $price*100;
			}
			elseif($valute == 'EUR'){
				$price = ($price*0.70)*100;
			}
			elseif($valute == 'USD'){
				$price = ($price*0.55)*100;
			}
			if(!empty($name) && !empty($category) && !empty($description) && !empty($price)){
				$model_for_products = Model::factory('product');
				$create_new_product = $model_for_products
									->create_new_product($img_url,$name,$category,$description,$price);
				if(!$create_new_product){
					$this->request->redirect('acp/products/create');
				}
				$this->request->redirect('acp/products');
			}
		}
		$this->template->content = $view->render();
	}
	public function action_delete() {
		$product_id = $this->request->param('id');
		$token = $this->request->param('id2');
		if(!Security::check($token)){
			$this->request->redirect('acp/products');
		}
		if(empty($product_id)){
			$this->request->redirect('acp/products');
		}
		$model_for_products = Model::factory('product');
		$delete_product = $model_for_products->delete_product($product_id);
		if(!$delete_product){
			$this->request->redirect('acp/products');
		}
		$this->request->redirect('acp/products');
	}

	public function action_item() {

		$id = $this->request->param('id');

		if(empty($id)){ throw new Exception('ID Must Be Set!');}

		$view = View::factory('acp/products/info');

		$products = new Model_Product();
		$get_product_by_id = $products->get_product_by_id($id);
		$view->products = $get_product_by_id;

		if($this->request->method() === Request::POST){

			$name = $this->request->post('name');
			$is_discount = $this->request->post('is_discount');
			$discount = $this->request->post('discount');
			$description = $this->request->post('description');
			$price = $this->request->post('price')*100;
			$img_url = $this->request->post('img_url');
			$token = $this->request->param('id');

			if(Security::check($token)) {
				throw new Exception("Token is not valid!");				
			}

			if(empty($is_discount) && empty($discount)) {
				$is_discount = 0;
				$discount = 0;
			} else {
				$is_discount = 1;
			}


			if(empty($name) && empty($description) && empty($price)) {
				throw new Exception("Please fill all fields!");				
			}

			$model_for_products = Model::factory('product');
			$update_product_info = $model_for_products
									->update_product_info($is_discount,
														$discount,
														$name,
														$description,
														$price,
														$img_url,
														$id);
			if(!$update_product_info) {
				throw new Exception("Error with database");
			}

			$this->request->redirect('acp/products');

		}

		$this->template->content = $view->render();

	}
}
