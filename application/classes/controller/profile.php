<?php defined('SYSPATH') or die ('Hacking attemp!');

class Controller_Profile extends Controller_Template
{
    public function action_index()
    {
        $view                    = View::factory('home/my/profile');
        $clients                 = new Model_Client();
        $user_email              = Session::instance()->get('email');
        $get_user_data           = $clients->get_user_data($user_email);
        $view->valute            = $clients->get_user_valute($user_email);
        $view->data              = $get_user_data;
        $this->template->content = $view->render();

        if ($this->request->method() === Request::POST) {
            $valute = $this->request->post('valute');
            $name   = $this->request->post('name');
            $surname = $this->request->post('surname');
            if (empty($valute) || empty($name)) {
                $this->request->redirect('profile');
            }
            $clients          = new Model_Client();
            $email            = Session::instance()->get('email');
            $data             = array(
                'valute'  => $valute,
                'name'    => $name,
                'surname' => $surname,
                );
            $change_user_data = $clients->change_user_data($data, $email);
            if (!$change_user_data) {
                throw new Exception("Error");
            }
            $this->request->redirect('profile');
        }
    }
}
