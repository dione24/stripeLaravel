<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;


class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic',
                'slug' => 'basic',
                'stripe_plan' => 'price_1MrNAsFnmqYSR7bLPSEWmpe3',
                'price' => 10,
                'description' => 'Basic'
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1MrNBPFnmqYSR7bL1ruDwf7S',
                'price' => 100,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
