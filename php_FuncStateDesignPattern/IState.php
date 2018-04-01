<?php
interface IState
{
    public function turnOn();
    public function turnOff();
    
    const ONLIGHT ="<img src='images/on.jpg' width='248' height='400'>";
    const OFFLIGHT ="<img src='images/off.jpg' width='248' height='400'>";
}
?>