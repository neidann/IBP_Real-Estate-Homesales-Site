<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Announcement;
use App\Models\PropertyGallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AnnouncementsSeeder::class);
        $this->call(GallerySeeeder::class);
    }
}
