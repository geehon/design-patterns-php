<?php
include_once('EuroAdapter.php');
include_once('DollarCalc.php');

class client
{
    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        echo "Euro: €" . $this->makeAdapterRequest($this->requestNow) . "<br>";
        echo "Dollar: $" . $this->makeDollarRequest($this->dollarRequest);
    }

    private function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40, 50);
    }

    private function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}

$worker = new Client();