<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Transaction::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Transaction::create([
                'receipient_account' => $faker->creditCardNumber,
                'amount' => $faker->numberBetween($min = 1000, $max = 3000),
                'refference' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            ]);
        }
    }
}
