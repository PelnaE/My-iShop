<?php defined('SYSPATH') or die('Hacking attemp!');

class Controller_Logout extends Controller_Template
{

    public function action_index()
    {
        $session      = Session::instance();
        $user_session = $session->get('email');
        $user_cookie  = Cookie::get('email');

        if (empty($user_session)) {
            $this->request->redirect('/');
        }

        if (!empty($user_cookie)) {
            Cookie::delete('email');
        }
        
        $session->delete('email');
        $this->request->redirect('/');
    }
}
