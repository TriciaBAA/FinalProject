<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photographer;

class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Photographer::create([
        'name' => 'John Doe',
        'image_url' => 'images/img6.JPG',
    ]);

    Photographer::create([
        'name' => 'Jane Smith',
        'image_url' => 'images/img7.JPG',
    ]);

    Photographer::create([
        'name' => 'Emily Davis',
        'image_url' => 'images/img8.JPG',
    ]);

    Photographer::create([
        'name' => 'Michael Johnson',
        'image_url' => 'images/img9.JPG',
    ]);

    Photographer::create([
        'name' => 'David Brown',
        'image_url' => 'images/img1.JPG',
    ]);

    Photographer::create([
        'name' => 'Sarah Williams',
        'image_url' => 'images/img3.JPG',
    ]);

    Photographer::create([
        'name' => 'Chris Martinez',
        'image_url' => 'images/img10.JPG',
    ]);

    Photographer::create([
        'name' => 'Linda Wilson',
        'image_url' => 'images/img11.JPG',
    ]);

    Photographer::create([
        'name' => 'Josephine Bracken',
        'image_url' => 'images/img4.JPG',
    ]);
}

}
