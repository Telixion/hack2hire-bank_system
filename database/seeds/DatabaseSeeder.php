<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(LoanSeeder::class);
        $this->call(userprofilesTableSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
