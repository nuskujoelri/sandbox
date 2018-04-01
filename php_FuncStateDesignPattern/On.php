<?php
class On implements IState
{
    private $context;
    
    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }
    
    public function turnOn()
    {
        return null;
    }
    
    public function turnOff()
    {
        $this->context->setState($this->context->getOffState());
        return ISTATE::OFFLIGHT;
    }
}
?>