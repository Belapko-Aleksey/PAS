<?php


namespace App\Controllers;


class Error extends Controller
{

    public function index ($params)
    {
        $error = $params[0];
        return $this->render('Error', [
            "error" => urldecode($error)
        ]);

    }

}