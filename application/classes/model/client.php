<?php

/**
 * Model for database table 'Clients'.
 */

class Model_Client extends Model
{

    /**
     * Creates new client.
     * 
     * @param string $name  Client name.
     * @param string $email Client email.
     * @param string $pass  Client pass.
     *
     * @return integer       Number of affected rows.
     */
    public function create_user($name, $email, $pass)
    {
        DB::insert('clients', array('email', 'pass', 'name'))
        ->values(array($email,$pass,$name))
        ->execute();
    }

    /**
     * Get data of user with that email.
     * 
     * @param string $email Client's email.
     * 
     * @return array         Client data.
     */
    public function get_user_data($email)
    {
        return DB::select()
        ->from('clients')
        ->where('email', '=', $email)
        ->execute()
        ->as_array();
    }

    /**
     * Gets valute of client by that email.
     * 
     * @param string $email Client's email.
     * 
     * @return  string        Client's valute.
     */
    public function get_user_valute($email)
    {
        return DB::select()
        ->from('clients')
        ->where('email', '=', $email)
        ->execute()
        ->get('valute');
    }

    /**
     * Updates data of client by that email.
     * 
     * @param string $name   Client's name.
     * @param string $valute Client's valute.
     * @param string $email  Client's email.
     * 
     * @return integer        Number of affected rows.
     */
    public function change_user_data($name, $valute, $email)
    {
        DB::update('clients')
        ->set(array('valute' => $valute,'name' => $name))
        ->where('email', '=', $email)
        ->execute();
    }

    /**
     * Checks if client of that email exists.
     * 
     * @param string $email Client's email.
     * 
     * @return string        Client's email, if exists (of course).
     */
    public function if_email_exists($email)
    {
        return DB::select()
        ->from('clients')
        ->where('email', '=', $email)
        ->execute()
        ->get('email');
    }

    /**
     * Checks if client of that name exists.
     * 
     * @param string $name Client's name.
     * 
     * @return string       Client's name.
     */
    public function if_name_exists($name)
    {
        return $query = DB::select()
        ->from('clients')
        ->where('name', '=', $name)
        ->execute()
        ->get('name');
    }

    /**
     * Checks if password is not wrong.
     * 
     * @param string $pass Client's password.
     * 
     * @return string       Client's password.
     */
    public function if_pass_is_not_wrong($pass)
    {
        return DB::select()
        ->from('clients')
        ->where('pass', '=', $pass)
        ->execute()
        ->get('pass');
    }
}