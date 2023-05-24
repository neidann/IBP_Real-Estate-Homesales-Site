<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'subject' => "Satılık ilandaki ev bize ait",
            'email' => "ahmet@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Satılık diye ilanana konan ev aslında bize ait ve satılık değil. Gereğinin yapılmasını arz ederim.",
            'status' => "NEW"
        ]);
        ContactMessage::create([
            'subject' => "Ürün Hakkında Bilgi Almak İstiyorum",
            'email' => "ayse@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Merhaba, ürün hakkında detaylı bilgi almak istiyorum. Fiyatı, özellikleri ve teslimat süresi hakkında bilgi verebilir misiniz? Teşekkürler.",
            'status' => "NEW"
        ]);
        ContactMessage::create([
            'subject' => "Sipariş Takibi",
            'email' => "mehmet@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Merhaba, 3 gün önce bir sipariş verdim ve henüz kargoya verilmedi. Siparişim ne zaman teslim edilecek? Bilgilendirme yapabilir misiniz? İyi çalışmalar.",
            'status' => "NEW"
        ]);
        ContactMessage::create([
            'subject' => "İade Talebi",
            'email' => "elif@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Merhaba, satın aldığım ürünü iade etmek istiyorum. Ürünün iade süreci ve prosedürleri hakkında bilgi verir misiniz? Teşekkür ederim.",
            'status' => "NEW"
        ]);
        ContactMessage::create([
            'subject' => "Ürün Değişimi",
            'email' => "ali@gmail.com",
            'phone' => "+90 000 000 00 00",
            'ip' => request()->ip(),
            'text' => "Ürün değişimi için başvuru panelini açamıyorum.",
            'status' => "NEW"
        ]);
    }
}
