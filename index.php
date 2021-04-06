<?php

class Fan
{
    private int $speed;
    private bool $on;
    private float $radius;
    private string $color;

    public function __construct()
    {
        $this->slow = 1;
        $this->medium = 2;
        $this->fast = 3;
        $this->speed = $this->slow;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setRadius(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setOn(bool $on)
    {
        $this->on = $on;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function toString()
    {
        if ($this->on) {
            return ("fan is on: Speed = " . $this->getSpeed() . " Color = " . $this->getColor() . " radius = " . $this->getRadius());
        } else {
            return ("fan is off: Color = " . $this->getColor() . " radius = " . $this->getRadius());
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$fan1 = new Fan();
$fan1->setSpeed(3);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
echo("Quat thu nhat: " . $fan1->toString() . "<br/>");

$fan2 = new Fan();
$fan2->setSpeed(2);
$fan2->setRadius(5);
echo("Quat thu hai: " . $fan2->toString() . "<br/>");
?>
</body>
</html>
