<?php

namespace App\PaymentSystem;


class QIWI implements PaymentSystem
{

    public function generateLink($params)
    {
        $billPayments = new \Qiwi\Api\BillPayments(QIWI['private_key']);
        $billId = $billPayments->generateId();
        $email = $params[0];
        $amount = $params[1];
        $publicKey = QIWI['public_key'];
        $prs = [
            'publicKey' => $publicKey,
            'amount' => 200,
            'email' => $email,
            'billId' => $billId,
            'successUrl' => 'http://test.ru/',
        ];

        $link = $billPayments->createPaymentForm($prs);

        return $link;
    }

    public function getPayInfo($params)
    {
        // TODO: Implement getPayInfo() method.
    }
}