<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Payment::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Payment::create([
                'account' => $faker->creditCardNumber,
                'amount' => $faker->numberBetween($min = 1000, $max = 3000),
                'remark' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }
    }
}
