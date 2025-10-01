<?php

namespace App\class;

use App\Models\CUSTTABLE;

class CUSTTABLE_CLASS
{
    public $cliente;
    public $empresa;
    public $weblogin;
    public $nameAlias;
    public $services;
    public $finantial;
    public $cuota;
    public $crm;
    public $newcrm;
    public $ownProduct;
    public $macro;
    public $micro;
    public $rgpd;

    public function __construct($empresa, $cliente, $weblogin, $nameAlias, $ownProduct = null)
    {
        $this->cliente = $cliente;
        $this->empresa = $empresa;
        $this->weblogin = $weblogin;
        $this->nameAlias = $nameAlias;
        $this->services = CUSTTABLE::getWebAndBusines($empresa, $cliente);
        $this->finantial = CUSTTABLE::getFinantial($weblogin, $empresa);
        $this->cuota = CUSTTABLE::setCuota($empresa, $weblogin, $cliente);
        //$this->crm = $this->setCRM();
        $this->newcrm = CUSTTABLE::setStatusCRM($empresa, $weblogin, $cliente);
        if (!is_null($ownProduct)) {
            $this->ownProduct = $ownProduct;
        } else {
            $this->ownProduct = CUSTTABLE::setOwnProduct($empresa, $weblogin);
        }
        $this->macro = CUSTTABLE::setMacro($empresa, $weblogin);
        $this->micro = CUSTTABLE::setMicro($empresa, $weblogin);
        $this->rgpd = CUSTTABLE::setRGPD($empresa, $cliente);
    }
}
