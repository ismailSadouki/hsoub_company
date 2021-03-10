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
            'title' => 'Ana',
            'desc' => 'Project management and collaboration software',
            'link' => 'https://ana.hsoub.com/',
            'image' => 'images/ana.png',
        ]);

        Project::create([
            'title' => 'Mostaql',
            'desc' => 'The largest Arabic freelancing platform',
            'link' => 'https://mostaql.com',
            'image' => 'images/ana2.png',
        ]);

        Project::create([
            'title' => 'Khamsat',
            'desc' => 'Digital skills and micro services marketplace',
            'link' => 'https://khamsat.com/',
            'image' => 'images/ana3.png',
        ]);
            
                
        Project::create([
            'title' => 'Baaeed',
            'desc' => 'Remote work job board',
            'link' => 'https://baaeed.com/',
            'image' => 'images/ana4.png',
        ]);    
        
        Project::create([
            'title' => 'Hsoub Academy ',
            'desc' => 'Hands-on, skills based programming courses',
            'link' => 'https://academy.hsoub.com/',
            'image' => 'images/ana5.png',
        ]);

        Project::create([
            'title' => 'Hsoub Wiki',
            'desc' => 'Programming reference for developers',
            'link' => 'https://wiki.hsoub.com/%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9_%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9',
            'image' => 'images/ana6.png',
        ]);
            
                
        Project::create([
            'title' => 'Hsoub I/O',
            'desc' => 'Social network and online community',
            'link' => 'https://io.hsoub.com/',
            'image' => 'images/ana7.png',
        ]);
    }
}
