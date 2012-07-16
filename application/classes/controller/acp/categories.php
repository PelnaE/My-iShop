<?php defined('SYSPATH') or die('No direct script access!');

class Controller_ACP_Categories extends Controller_Template {

	public function action_list(){

		$view = View::factory('acp/categories/list');

		$model_for_categories = Model::factory('category');

		$list_of_categories = $model_for_categories->get_list_of_categories();

		$view->categories = $list_of_categories;

		$this->template->content = $view->render();

	}

	public function action_create() {

		$view = View::factory('acp/categories/create');

		$model_for_categories = Model::factory('category');

		if($this->request->method() === Request::POST){

			$name = $this->request->post('name');

			$slug = $this->request->post('slug');

			$token = $this->request->param('id');

			if(!Security::check($token)){

				$this->request->redirect('acp/categories/create');

			}

			if(empty($slug)){

				$slug = URL::title($name, '_');

			}

			if(empty($name) && empty($slug)){

				$this->request->redirect('acp/categories/create');

			}

			$model_for_categories = Model::factory('category');

			$create_category = $model_for_categories->create_category($name,$slug);

			if(!$create_category){

				$this->request->redirect('acp/categories/create');

			}

			$this->request->redirect('acp/categories');

		}

		$this->template->content = $view->render();
		
	}

}