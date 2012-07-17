<?php

/**
 * Adjust product's price to user's valute.
 *
 * @author reGative regative@gmail.com
 */
class Currency
{
    static function pretty_format($price, $valute, $discount = NULL)
    {
        if ($valute === 'LVL' or $valute === NULL) {
            if ($discount !== NULL) {
                return Num::format(($price/100)-($price/100)*($discount/100),2).' ls';
            }
            return Num::format($price/100,2).' Ls';
        } elseif ($valute === 'EUR') {
            if ($discount !== NULL) {
                return '€'.Num::format((($price/100)-($price/100)*($discount/100))/0.70,2);
            }
            return '€'.Num::format(($price/100)/0.70,2);
        } elseif ($valute === 'USD') {
            if ($discount !== NULL) {
                return Num::format((($price/100)-($price/100)*($discount/100))/0.57,2);
            }
            return '$ '.Num::format(($price/100)/0.57,2);
        }
    }

    static function to_database($price, $valute)
    {
        if ($valute === 'LVL' or $valute === NULL) {
            return $price*100;
        } elseif ($valute === 'EUR') {
            return ($price*0.70)*100;
        } elseif ($valute === 'USD') {
            return ($price*0.57)*100;
        }
    }
}