<?php
class LightSwitch
{
    private $lightUp;
    public function __construct()
    {
        $this->lightUp=<<<LIGHTSWITCH
        <!doctype html>
        <html>
        <head>
        <link type="text/css" rel="stylesheet" href="simple.css">
        <meta charset="UTF-8">
        <title>On / Off</title>
        </head>
        <body>
        <h2>Immutable States</h2>
        
        <form action="Client.php" method="post" name="simple" target="room">
          <input type="radio" name="lightswitch" value="lightOn" id="on">
          <label for="on">On</label>
          <br />
          <input type="radio" name="lightswitch" value="lightOff" id="off">
          <label for="off">Off</label>
          <br />
          <input type="submit" value="Flick Switch" name="switch">
            </form>
            <iframe name="room">Light</iframe>
        </body>
        </html>
LIGHTSWITCH;
        echo $this->lightUp;
    }
}
$worker=new LightSwitch();
?>