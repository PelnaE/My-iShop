<?php

/**
 * Model for database table 'Clients'.
 */

class Model_Client extends Model
{
    /**
     * Creates new user.
     *
     * @param  array  $data Information about new user.
     *
     * @return void
     */
    public function create_user(array $data)
    {
        return DB::insert('clients', array_keys($data))
        ->values(array_values($data))
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
     * Changes user's data.
     *
     * @param  array  $data  Information about user.
     * @param  string $email User's email.
     *
     * @return void
     */
    public function change_user_data(array $data, $email)
    {
        return DB::update('clients')
        ->set($data)
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
    static public function if_email_exists($email)
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
