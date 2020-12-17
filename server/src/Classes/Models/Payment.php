<?php


namespace App\Models;


class Payment
{
    private $email;
    private  $link;

    /**
     * Payment constructor.
     * @param $email
     * @param $link
     */
    public function __construct($email, $link)
    {
        $this->email = $email;
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }
}