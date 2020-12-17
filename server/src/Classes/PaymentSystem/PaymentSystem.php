<?php


namespace App\PaymentSystem;


interface PaymentSystem
{
    public function generateLink($params);
    public function getPayInfo($params);
}