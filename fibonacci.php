<?php


function fibonacci1($b)
{
    echo 'fibonacci1' . '<br>';
    $prevNumber = 1;
    $nextNumber = 1;
    $temp;
    while ($b > 1) {
        if ($nextNumber == 1) {
            echo $prevNumber . '<br>';
            $nextNumber++;
            continue;
        }
        echo $prevNumber . '<br>';
        $temp = $nextNumber;
        $nextNumber += $prevNumber;
        $prevNumber = $temp;
        $b--;
    }
}

function fibonacci2($count)
{

    echo 'fibonacci2' . '<br>';
    $f1 = 1;
    $f2 = 1;

    echo $f1;
    echo $f2;

    while ($count > 2) {
        $f3 = $f1 + $f2;

        $f1 = $f2;
        $f2 = $f3;
        echo $f3;
        $count--;
    }

}

function fibonacci3($n)
{
    echo 'fibonacci3' . '<br>';
    echo round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
}


function fibonacci4($n, $first, $second)
{
    if ($n > 0) {
        $sum = $first + $second;
        $first = $second;
        $second = $sum;
        echo $sum;
        fibonacci4($n - 1, $first, $second);
    }
}


class fibonacci
{

    public $first = 0;
    public $second = 1;

    public function __construct(){
        echo 'fibonacci class';
        echo 1;
    }

    public function fib($n)
    {
        if( $n > 0 ) {
            $sum = $this->first + $this->second;
            $this->first = $this->second;
            $this->second = $sum;
            echo $sum;
            $this->fib($n-1);
        }

    }

}

$objfib = new fibonacci();
$objfib->fib(5);