<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'phone' => '1122331212',
            'email' => 'ismail.sadouki.0@gmail.com',
            'company_name_en' => 'hsoub',
            'company_name_ar' => 'حسوب',
            'company_address_en' => 'algeria',
            'company_address_ar' => 'الجزائر',
            'about_us_en' => '

            Hsoub is a technology group on a mission to develop the Arab World. We build products across a range of sectors and functions that enable new work, education, and communication opportunities for the region.
            
            Since we were founded in 2011 in the United Kingdom, we have continuously innovated to identify new trends that are shaping Arab society and culture, and designed products and services to help people adapt to new challenges and opportunities in the world.
            
            Hsoub operates the two largest Arabic freelancing platforms Mostaql and Khamsat with other products in its portfolio combining 2,500,000+ registered users.
            ',
            'about_us_ar' => '

            حسوب مجموعة تقنية في مهمة لتطوير العالم العربي. نحن نبني منتجات تركز على مستقبل العمل، التعليم والتواصل. منذ تأسيسنا في 2011 في المملكة المتحدة، استثمرنا في بناء منظومة بهدف مساعدة الشباب العرب على التطور والنمو في عالم مليء بالفرص والتحديات.
            
            تدير حسوب أكبر منصتي عمل حر عربيتين مستقل وخمسات مع مجموعة من المنتجات الأخرى في محفظتها تضم أكثر من 2,500,000 مستخدم مسجل.
            ',
            'facebook' => 'https://www.facebook.com/Hsoub',
            'twitter' => 'https://twitter.com/Hsoub',
            'linked_in' => 'https://www.linkedin.com/company/hsoub',
        ]);


    }
}
