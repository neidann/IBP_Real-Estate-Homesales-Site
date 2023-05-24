<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => "1+0 Apart Daireler",
            'description' => "1+0 En uygun dairelerimiz bir tıkla elinizin altında.",
            'image' => "no_image",
            "slug" => "apart-daireler-1-arti-sifir",
            "status" => "ACTIVE"
        ]);
        Category::create([
            'title' => "2+1 Daireler",
            'description' => "2+1 En uygun dairelerimiz bir tıkla elinizin altında.",
            'image' => "no_image",
            "slug" => "apart-daireler-2-arti-1",
            "status" => "ACTIVE"
        ]);
        Category::create([
            'title' => "Müstakil Evler",
            'description' => "Müstakil en uygun dairelerimiz bir tıkla elinizin altında.",
            'image' => "no_image",
            "slug" => "mustakil-daireler",
            "status" => "ACTIVE"
        ]);
        Category::create([
            'title' => "3+1 Aile Evleri",
            'description' => "3+1 Geniş, lüks müstakil en uygun dairelerimiz bir tıkla elinizin altında.",
            'image' => "no_image",
            "slug" => "uc-arti-bir-aile",
            "status" => "ACTIVE"
        ]);
    }
}
