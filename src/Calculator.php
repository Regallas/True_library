<?php
class Calculator
{

    public function plus($a, $b): int
    {
        return $a + $b;
    }

    public function minus($a, $b): int
    {
        return $a - $b;
    }

    public function product($a, $b): int
    {
        return $a * $b;
    }

    public function division($a, $b): int
    {
        if ($b === 0) {
            return 0;
        }
        return $a / $b;
    }

    public function power($a, $b): int
    {
        return pow($a, $b);
    }
}
