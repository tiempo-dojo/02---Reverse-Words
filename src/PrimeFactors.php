<?php

namespace PrimeFactors;

class PrimeFactors{
    public static function generate($n){
        if (self::isPrime($n)) {
            return array($n);
        }

        $result = [];

        $i = 2;

        while ($n != 0){
            if ($n == 1) {
                break;
            }

            if($n % $i === 0) {
                array_push($result, $i);
                $n = $n/$i;
            }else{
                $i = self::nextPrime($i);
            }
        }
        return $result;
    }

    private static function isPrime($n)
    {
        if ($n === 1) {
            return true;
        }

        for ($i = 2; $i < $n; $i++) { 
            if ($n%$i === 0) {
                return false;
            }
        }
        
        return true;
    }

    private static function nextPrime($n){
        while (true) {
            $n++;
            if (self::isPrime($n)) {
                return $n;
            }
        }
    }
}

var_dump(PrimeFactors::generate(523461));