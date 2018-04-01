<?php
class Off implements IState
{
    private $context;
    
    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }
    
    public function turnOn()
    {
        $this->context->setState($this->context->getOnState());
        return ISTATE::ONLIGHT;
    }
    
    public function turnOff()
    {
        return null;
    }
}
?>