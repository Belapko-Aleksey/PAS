<?php


namespace App\Services;

use App\Models\Report;
use RedBeanPHP\R as R;
use App\Models\Payment;

class ReportService
{
    protected $reportRepository;

    public function __construct(ReportRepository $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }

    public function getReport($link)
    {
        $pm = $this->reportRepository->findOneByLink($link);
        $payment = new Payment($pm->email, $pm->link);
        return $payment;
    }
}

class ReportRepository
{
    protected $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function findAll()
    {
        $rs = R::findAll('report');
        return $rs;
    }

    public function findOneById($id)
    {
         $r = R::findOne('report', 'id = ?', [$id]);
         return $r;
    }

    public function create($email, $message)
    {
        $r = R::dispense( 'report' );
        $r->email = $email;
        $r->message = $message;
        $id = R::store($r);
        return $id;
    }
}