<?php


namespace App\Models;


class Report
{
    private $id;
    private $email;
    private $message;
    private $date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Report constructor.
     * @param $id
     * @param $email
     * @param $message
     */
    public function __construct($id, $email, $message)
    {
        $this->id = $id;
        $this->email = $email;
        $this->message = $message;
    }


}