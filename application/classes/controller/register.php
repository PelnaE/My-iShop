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
            $salt              = 'MySalt!';
            $name              = $this->request->post('name');
            $email             = $this->request->post('email');
            $pass              = $this->request->post('pass');
            $pass_confirm      = $this->request->post('pass_confirm');
            $checkbox          = $this->request->post('checkbox');
            $clients           = new Model_Client();
            $valide_email      = $clients->if_email_exists($email);
            $valide_name       = $clients->if_name_exists($name);

            if (!$checkbox) {
                throw new Exception("Checkbox is empty!");              
            }

            if ($valide_email == $email or $valide_name == $name) {
                throw new Exception("User with this name/email exists!");               
            }

            if ($pass != $pass_confirm) {
                throw new Exception("Passwords do not match!");
            }

            $pass = crypt($salt,$this->request->post('pass'));

            if (empty($name) && empty($email) && empty($pass)) {
                throw new Exception("Please, do not make empty fields!");               
            }

            $create_user = $model_for_clients->create_user($name,$email,$pass);

            if (!$create_user) {
                throw new Exception("Please check all fields!");                
            }
            
            $this->request->redirect('/');

        }

        $this->template->content = $view->render();

    }
}
