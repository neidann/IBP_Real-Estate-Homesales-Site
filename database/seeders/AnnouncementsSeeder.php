<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'title' => 'Panoramik Manzaralı Ferah Villa',
                'body' => 'Muhteşem manzaraya sahip lüks villa, geniş yüzme havuzu ve yüksek kaliteli olanaklar sunuyor. Premium bir yaşam deneyimi arayanlar için mükemmel bir seçenek.',
            ],
            [
                'title' => 'Moda Mahallesinde Rahat Stüdyo Daire',
                'body' => 'Trendi mahallede yer alan kompakt ve şık stüdyo daire. Kolaylık sağlayan bir şehir yaşam alanı arayan bireyler veya çiftler için ideal.',
            ],
            [
                'title' => 'Açık Planlı Modern Şehir Evi',
                'body' => 'Modern bir şehir evi, ferah iç mekanlar, şık tasarım unsurları ve son teknoloji cihazlarla donatılmış. Stil ve işlevselliğin mükemmel bir birleşimi.',
            ],
            [
                'title' => 'Çatı Katında Lüks Daire ve Çatı Terası',
                'body' => 'Özel çatı terası, geniş iç mekanlar ve panoramik şehir manzarası sunan etkileyici bir çatı katı. Şehir merkezinin kalbindeki özel bir kaçış noktası.',
            ],
            [
                'title' => 'Sessiz Bir Ortamda Şirin Bir Köşk',
                'body' => 'Huzurlu bir kırsal alanda yer alan şirin köşk. Doğanın kucağında şehir hayatının karmaşasından uzakta sakin bir kaçış imkanı sunuyor.',
            ],
            [
                'title' => 'Ana İş Merkezinde Kiralık Ticari Alan',
                'body' => 'Yoğun iş merkezinde kiralık öne çıkan ticari alan. Stratejik bir varlık kurmak isteyen işletmeler için ideal.',
            ],
            [
                'title' => 'Yatırım Fırsatı: Çoklu Birimli Konut',
                'body' => 'Düzenli kira geliri sağlayan çoklu birimli konut. Pasif gelir arayanlar için mükemmel bir yatırım fırsatı.',
            ],
            [
                'title' => 'Satılık Restorasyonlu Tarihi Bina',
                'body' => 'Restorasyonlu tarihi bina, mimari cazibesi ve modern güncellemelerle birlikte. Butik otel, ofis alanı veya yaratıcı stüdyo gibi çeşitli amaçlar için uygundur.',
            ],
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}
