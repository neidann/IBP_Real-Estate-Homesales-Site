<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Property::create([
                'user_id' => 1, // Replace with the desired user ID
                'category_id' => rand(1,4), // Replace with the desired category ID
                'title' => 'Property ' . $i,
                'description' => 'Description for Property ' . $i,
                'card_img' => "public/property_images/g2.png", // Replace with the desired image name
                'img_text' => 'Image text for Property ' . $i,
                'sqft' => '1000', // Replace with the desired square footage
                'position' => 'Latitude: 123, Longitude: 456', // Replace with the desired position information
                'sittingrooms' => 2, // Replace with the desired number of sitting rooms
                'bedrooms' => 3, // Replace with the desired number of bedrooms
                'baths' => 2, // Replace with the desired number of baths
                'status' => 'ACTIVE', // Replace with the desired status
                'high_price' => '100000', // Replace with the desired high price
                'low_price' => '80000', // Replace with the desired low price
                'address' => 'Address for Property ' . $i,
                'age' => 5, // Replace with the desired age of the property
            ]);
        }
    }
}
