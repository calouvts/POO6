<?php


class Speedometer
{
    const oneMileinKilometer = 1.609;

    const oneKilometerinMile = 0.621;

    public static function convertMilesToKm(float $miles)
    {
        return $miles * self::oneMileinKilometer;
    }

    public static function convertKmToMiles(float $kilometers)
    {
        return $kilometers * self::oneKilometerinMile;
    }
}
