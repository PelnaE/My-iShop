<?php defined('SYSPATH') or die('Hacking attemp!');

class Controller_Register extends Controller_Template
{

    public function action_index()
    {

        $view = View::factory('home/register');

        if ($this->request->method() === Request::POST) {

            if (!Security::check($this->request->post('token'))) {
                throw new Exception("Bad Token");
            }

            $post = Validation::factory($_POST)
            ->rule('name', 'not_empty')
            ->rule('surname','not_empty')
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('email', 'Model_Client::if_email_exists')
            ->rule('pass', 'not_empty')
            ->rule('pass_confirm', 'not_empty')
            ->rule('pass', 'matches', array(':validation', 'pass_confirm', 'pass'))
            ->rule('checkbox', 'not_empty');

            if ($post->check()) {
                $salt     = 'MySalt!';
                $name     = $this->request->post('name');
                $surname  = $this->request->post('surname');
                $email    = $this->request->post('email');
                $pass     = crypt($salt, $this->request->post('pass'));
                $checkbox = $this->request->post('checkbox');
                $clients  = new Model_Client();

                $data     = array(
                    'name' => $name,
                    'surname' => $surname,
                    'email'   => $email,
                    'pass'    => $pass,
                    );

                $create_user = $clients->create_user($data);

                if (!$create_user) {
                    throw new Exception("Please check all fields!");
                }

                $this->request->redirect('/');

            }

        }

        $this->template->content = $view->render();

    }
}
