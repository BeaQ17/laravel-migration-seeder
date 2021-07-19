<?php
use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $travel = new Travel();
            $travel->location = $faker->countryCode();
            $travel->title = $faker->sentence(3);
            $travel->agency = $faker->company();
            $travel->agency_email = $faker->companyEmail();
            $travel->agency_website = $faker->domainName();
            $travel->agency_phone = $faker->phoneNumber();
            $travel->insurance = $faker->boolean();
            $travel->price = $faker->numberBetween(200, 500);
            $travel->cover_url = $faker->imageUrl(600, 400, "Hotels", true);
            $travel->save();
        }
    }
}
