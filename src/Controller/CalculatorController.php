<?php
/**
 * Date: 09/04/2018
 * Time: 10:33
 */

namespace App\Controller;


use App\Util\Calculator;

class CalculatorController extends BaseController
{
    private $calculator;

    /**
     * CalculatorController constructor.
     */
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function sum($a, $b)
    {
        $response = $this->calculator->sum($a, $b);
        return $this->json(['result' => $response]);
    }
}