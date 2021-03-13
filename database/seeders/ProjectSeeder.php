<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([    
            'title_en' => 'Ana',
            'title_ar' => 'انا',
            'desc_ar' => 'أداة واحدة لإدارة مشاريعك وفريق عملك عن بعد',
            'desc_en' => 'Project management and collaboration software',
            'link' => 'https://ana.hsoub.com/',
            'image' => 'images/ana.png',
        ]);

        Project::create([
            'title_ar' => 'مستقل',
            'title_en' => 'Mostaql',
            'desc_ar' => 'أكبر منصة عمل حر في العالم العربي',
            'desc_en' => 'The largest Arabic freelancing platform',
            'link' => 'https://mostaql.com',
            'image' => 'images/ana2.png',
        ]);

        Project::create([
            'title_ar' => 'خمسات',
            'title_en' => 'Khamsat',
            'desc_ar' => 'السوق العربي لبيع وشراء الخدمات المصغّرة',
            'desc_en' => 'Digital skills and micro services marketplace',
            'link' => 'https://khamsat.com/',
            'image' => 'images/ana3.png',
        ]);
            
                
        Project::create([
            'title_ar' => 'بعيد',
            'title_en' => 'Baaeed',
            'desc_ar' => 'موقع توظيف عن بعد',
            'desc_en' => 'Remote work job board',
            'link' => 'https://baaeed.com/',
            'image' => 'images/ana4.png',
        ]);    
        
        Project::create([
            'title_ar' => 'اكادمية حسوب ',
            'title_en' => 'Hsoub Academy ',
            'desc_ar' => 'دورات برمجة شاملة من الصفر حتى الاحتراف',
            'desc_en' => 'Hands-on, skills based programming courses',
            'link' => 'https://academy.hsoub.com/',
            'image' => 'images/ana5.png',
        ]);

        Project::create([
            'title_ar' => 'موسوعة حسوب',
            'title_en' => 'Hsoub Wiki',
            'desc_ar' => 'مرجع لغات البرمجة والمطورين العرب',
            'desc_en' => 'Programming reference for developers',
            'link' => 'https://wiki.hsoub.com/%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9_%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9',
            'image' => 'images/ana6.png',
        ]);
            
                
        Project::create([
            'title_ar' => 'حسوب I/O',
            'title_en' => 'Hsoub I/O',
            'desc_ar' => 'مجتمع عربي للنقاش الهادف والموضوعي',
            'desc_en' => 'Social network and online community',
            'link' => 'https://io.hsoub.com/',
            'image' => 'images/ana7.png',
        ]);


    }
}
