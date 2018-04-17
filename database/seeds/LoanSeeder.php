<?php

use Illuminate\Database\Seeder;
use App\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Loan::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Loan::create([
                'name' => $faker->name,
                'ICnumber' => $faker->postcode,
                'account' => $faker->creditCardNumber,
            ]);
        }
    }
}
