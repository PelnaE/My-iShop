<?php defined('SYSPATH') or die ('Hacking attemp!');

class Controller_Login extends Controller_Template
{

    public function action_index()
    {
    $view                    = View::factory('home/login');
    $this->template->content = $view->render();
    }

    public function action_submit()
    {
        $email  = $this->request->post('email');
        $salt   = 'MySalt!';
        $pass   = crypt($salt,$this->request->post('pass'));
        if (!Security::check($this->request->param('id'))) {
            throw new Exception("Bad Token!");
        }
        $cookie = $this->request->post('cookie');
        if (empty($email) and empty($pass)) {
            throw new Exception('404');
        }
        $clients       = new Model_Client();
        $email_from_db = $clients->if_email_exists($email);
        $pass_from_db  = $clients->if_pass_is_not_wrong($pass);
        if ($pass !== $pass_from_db or $email !== $email_from_db) {
            throw new Exception('Incorrect input data!');
        }
        Session::instance()->set('email', $email);
        if (!empty($cookie)) {
            Cookie::set('email', $email);
        }
        $this->request->redirect('/');

    }
}
