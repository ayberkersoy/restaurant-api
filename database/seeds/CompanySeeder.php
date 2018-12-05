<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $faker = Faker::create();
            factory(Company::class)->create();
        }
    }
}
