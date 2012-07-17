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
        $nick   = $this->request->post('nick');
        $pass   = $this->request->post('pass');
        $cookie = $this->request->post('cookie');
        if (empty($nick) and empty($pass)) {
            $this->request->redirect('acp');
        }
        if ($cookie) {
            Cookie::set('admin', $nick);
        }
        Session::instance()->set('admin', $nick);
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
