<?php

use Illuminate\Database\Seeder;
use App\userprofiles;

class userprofilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
        userprofiles::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            userprofiles::create([
                'holderName' => $faker->name,
                'ICnumber' => $faker->postcode,
                'mailAddress' => $faker->address,
                'accountNumber' => $faker->creditCardNumber,
                'cardNumber' => $faker->creditCardNumber,
            ]);
        }
    }
}
