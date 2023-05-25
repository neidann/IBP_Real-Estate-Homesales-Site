<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = Settings::count();
        if($count<=0){
            Settings::create([
                'company_name' => "Real Estate Agency",
                "description" => "Welcome to Real Estate Agency, your trusted partner in the world of real estate. We are a leading agency dedicated to helping individuals, families, and businesses find their perfect property solutions.",
                "logo" => "no_image",
                "address" => "60-49 Road 11378 New York",
                "email" => "+65 11.188.888",
                "phone" => "hello.colorlib@gmail.com"
            ]);
        }
    }
}
