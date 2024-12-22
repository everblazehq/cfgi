<?php

namespace App\Services;

class TestDataService
{
    public function getTestDataArray()
    {
        return [
            [
                "date" => "2024-12-18 19:30:04",
                "price" => 80,
                "cfgi" => 20,
                "volatility" => 74,
                "volume" => 73,
                "impulse" => 57,
                "technical" => 54.5,
                "social" => 33.5,
                "dominance" => 57.5,
                "trends" => 38.5,
                "whales" => 70,
                "orders" => 24
            ],
            [
                "date" => "2024-12-18 19:15:03",
                "price" => 60,
                "cfgi" => 40,
                "volatility" => 78.5,
                "volume" => 74,
                "impulse" => 76,
                "technical" => 60,
                "social" => 31,
                "dominance" => 58.5,
                "trends" => 36,
                "whales" => 1,
                "orders" => 23.5
            ],
            [
                "date" => "2024-12-18 19:30:04",
                "price" => 40,
                "cfgi" => 60,
                "volatility" => 74,
                "volume" => 73,
                "impulse" => 57,
                "technical" => 54.5,
                "social" => 33.5,
                "dominance" => 57.5,
                "trends" => 38.5,
                "whales" => 70,
                "orders" => 24
            ],
            [
                "date" => "2024-12-18 19:15:03",
                "price" => 20,
                "cfgi" => 80,
                "volatility" => 78.5,
                "volume" => 74,
                "impulse" => 76,
                "technical" => 60,
                "social" => 31,
                "dominance" => 58.5,
                "trends" => 36,
                "whales" => 1,
                "orders" => 23.5
            ]
        ];
    }
}
