<?php defined('SYSPATH') or die('Hacking attemp');

class Controller_ACP extends Controller_Template
{
    public function action_index()
    {
        if (Auth::is_admin_signed_in() == false) {
            $this->template->content = View::factory('acp/login');
        } else {
            $this->template->content = View::factory('acp/home');
        }
    }

    public function action_sign_up()
    {
        $email  = $this->request->post('email');
        $pass   = crypt('MySalt!', $this->request->post('pass'));
        $cookie = $this->request->post('cookie');
        if (!Security::check($this->request->param('id'))) {
            throw new Exception("Bad Token!");            
        }
        if (empty($email) and empty($pass)) {
            $this->request->redirect('acp');
        }
        $client = new Model_Client();
        $email_from_db = $client->email_from_db($email);
        $pass_from_db  = $client->pass_from_db($email);
        if ($email !== $email_from_db || $pass !== $pass_from_db) {
            throw new Exception("This User do not exists! \n $pass $pass_from_db");            
        }
        $is_superuser = $client->is_superuser($email);
        if ($is_superuser === 0) {
            throw new Exception("Sorry, but you are not a superuser!");            
        }
        if ($cookie) {
            Cookie::set('admin', $email);
        }
        Session::instance()->set('admin', $email);
        $this->request->redirect('acp');
    }

    public function action_sign_out()
    {
        $session      = Session::instance();
        $user_session = $session->get('admin');
        if (empty($user_session)) {
            $this->request->redirect('acp');
        }
        $session->delete('admin');
        $cookie = Cookie::get('admin');
        if (!empty($cookie)) {
            Cookie::delete('admin');
        }
        $this->request->redirect('acp');
    }
}
