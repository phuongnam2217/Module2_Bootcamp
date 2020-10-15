<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = date("Y-M-d h:m:s");
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = hrtime(true);
    }
    public function stop()
    {
        $this->endTime = hrtime(true);
    }
    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}

$dongho1 = new StopWatch();
$dongho1->start();
for ($i = 0; $i < 10000; $i++) {
    echo $i . ",";
}
$dongho1->stop();
echo "<br>";
echo $dongho1->getElapsedTime();
