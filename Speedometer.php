<?php

class Speedometer {

    protected const KM_TO_MILES = 0.621371;
    protected const MILES_TO_KM = 1.60934;

    public static function convertKmToMiles(int $km): float
    {
        $result = $km * self::KM_TO_MILES;
        return round($result, 2);
    }

    public static function convertMilesToKm(int $miles): float
    {
        $result = $miles * self::MILES_TO_KM;
        return round($result, 2);
    }

}

echo Speedometer::convertKmToMiles(10) . "<br>" . Speedometer::convertMilesToKm(56);