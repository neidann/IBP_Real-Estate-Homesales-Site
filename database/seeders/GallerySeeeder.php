<?php

namespace Database\Seeders;

use App\Models\PropertyGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1;$i<5;$i++){
            PropertyGallery::create([
                'property_id' => $i,
                'order' => 1,
                'image' => "",
                'image_alt' => ""
            ]);
        }

    }
}
