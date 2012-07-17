<?php defined('SYSPATH') or die('No direct script access!');

class Controller_ACP_Categories extends Controller_Template
{

    public function action_list()
    {
        $view                    = View::factory('acp/categories/list');
        $categories              = new Model_Category();
        $view->categories        = $categories->get_list_of_categories();
        $this->template->content = $view->render();
    }

    public function action_create()
    {

        $view       = View::factory('acp/categories/create');
        $categories = new Model_Category();

        if ($this->request->method() === Request::POST) {
            $name  = $this->request->post('name');
            $slug  = $this->request->post('slug');
            $token = $this->request->param('id');

            if (!Security::check($token)) {
                $this->request->redirect('acp/categories/create');
            }

            if (empty($slug)) {
                $slug = URL::title($name, '_');
            }

            if (empty($name) && empty($slug)) {
                $this->request->redirect('acp/categories/create');
            }

            $categories      = new Model_Category();
            $create_category = $categories->create_category($name,$slug);

            if (!$create_category) {

                $this->request->redirect('acp/categories/create');

            }

            $this->request->redirect('acp/categories');

        }

        $this->template->content = $view->render();
        
    }

}