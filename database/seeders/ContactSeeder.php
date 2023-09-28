<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name'=>'Health Center',
            'phone'=>'01200816003',
            'facebook'=>'https://www.facebook.com/abdu.mascherino',
            'linkedIn'=>'https://www.linkedin.com/in/abdelrahman-el-desoky-b926391b8/',
            'description'=>'Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.',
            'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13646.64043407445!2d29.9496385!3d31.2301448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c5aa27fa73d3%3A0x6e4c61f46e42a7ce!2sTREE%20Marketing!5e0!3m2!1sar!2seg!4v1695858153731!5m2!1sar!2seg'
        ]);
    }
}
