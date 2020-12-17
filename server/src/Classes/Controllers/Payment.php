<?php


namespace App\Controllers;


use App\PaymentSystem\QIWI;

class Payment extends Controller
{
    public function index ()
    {

        return $this->render('Payment', ["amount" => 12]);

    }

    public function pay($params)
    {
        $system = $params[0];
        $email = $params[1];
        $amount = $params[2];
        $link = null;

        switch ($system)
        {
            case 'qiwi':
                $link = (new QIWI())->generateLink($email, $amount);
                break;
        }

        return $this->render('Payment', [
            "system" => $system,
            "email" => $email,
            "amount" => $amount,
            "link" => $link
        ]);
    }

    public function create($params)
    {
        $amount = $params[0];
        return $this->render('CreatePayment', [
            "amount" => $amount
        ]);
    }
}