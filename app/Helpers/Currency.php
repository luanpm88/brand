<?php
namespace App\Helpers;

class Currency
{
	public static function formatPrice($price)
    {
        $price = number_format($price, 0, '.', ',');
        return "{$price} ₫";
    }

    public static function formatNumber($price)
    {
        $price = number_format($price, 0, '.', ',');
        return "{$price}";
    }
}