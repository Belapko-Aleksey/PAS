<?php


namespace App\Services;

use RedBeanPHP\R as R;
use App\Models\Payment;

class PaymentService
{
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function getPayment($link)
    {
        $pm = $this->paymentRepository->findOneByLink($link);
        $payment = new Payment($pm->email, $pm->link);
        return $payment;
    }
}

class PaymentRepository
{
    protected $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function findAll()
    {
        $pms = R::findAll('payment');
        return $pms;
    }

    public function findOneById($id)
    {
         $pm = R::findOne('payment', 'id = ?', [$id]);
         return $pm;
    }

    public function create(Payment $payment)
    {
        $pm = R::dispense( '$payment' );
        $pm->email = $payment->getEmail();
        $pm->link = $payment->getLink();
        $id = R::store($pm);
        return $id;
    }

    public function validate(Payment $payment)
    {
        $pm = R::findOne('payment', 'email = ? AND link = ?', [$payment->getEmail(), $payment->getLink()]);
        if($pm != null)
            return true;
        else
            return false;
    }

    public function findOneByLink($link)
    {
        $pm = R::findOne('payment', 'link = ?', [$link]);
        return $pm;
    }
}