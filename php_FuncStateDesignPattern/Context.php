<?php
//Context.php
class Context
{     
    //Immutable states
    private $onState;
    private $offState;
    //variable states
    private $flip;
    //Current state
    private $currentState;
    
    public function __construct()
    {
        $this->onState=new On($this);
        $this->offState=new Off($this);
        
        $this->flip = $_POST['lightswitch'];
        $this->flip=="lightOn" ? $this->currentState=$this->offState: $this->currentState=$this->onState;
    }
    
    //Call State methods--triggers
    public function lightOn()
    {
        return $this->currentState->turnOn();
    }
    public function lightOff()
    {
        return $this->currentState->turnOff();
    }
   
    //Set current state
    public function setState(IState $state)
    {
        $this->currentState=$state;
    }
    
    //Get the states
    public function getOnState()
    {
        return $this->onState;
    }
    public function getOffState()
    {
        return $this->offState;
    }
}
?>