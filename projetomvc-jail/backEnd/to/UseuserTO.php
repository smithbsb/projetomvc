<?php

class UseuserTO {
    private $couseuser = null;
    private $dcname = null;
    private $dcmail = null;
    private $dcpass = null;
    private $costatus = null;
    private $dtcreated = null;
    
    public function getcouseuser()              { return $this->couseuser; }
    public function setcouseuser($couseuser)    { $this->couseuser = $couseuser; }
    
    public function getdcname()                 { return $this->dcname; }
    public function setdcname($dcname)          { $this->dcname = $dcname; }
    
    public function getdcmail()                 { return $this->dcmail; }
    public function setdcmail($dcmail)          { $this->dcmail = $dcmail; }
    
    public function getdcpass()                 { return $this->dcpass; }
    public function setdcpass($dcpass)          { $this->dcpass = $dcpass; }
    
    public function getcostatus()               { return $this->costatus; }
    public function setcostatus($costatus)      { $this->costatus = $costatus; }
    
    public function getdtcreated()              { return $this->dtcreated; }
    public function setdtcreated($dtcreated)    { $this->dtcreated = $dtcreated; }
}
?>
