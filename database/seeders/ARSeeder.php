<?php

namespace Database\Seeders;

use App\Models\AR;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ARSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AR::create([
                'html' => '<div class="sketchfab-embed-wrapper"> <iframe title="2015: “Yeti" frameborder="0" allowfullscreen
                mozallowfullscreen="true" webkitallowfullscreen="true"
                allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                execution-while-out-of-viewport execution-while-not-rendered web-share width="800" height="600"
                src="https://sketchfab.com/models/fd74bf09bcf94054a4eb6ef1e4e9a4d3/embed"> </iframe>
                </div>'
        ]);

        AR::create([
            'html' => '<div class="sketchfab-embed-wrapper"> <iframe title="Lowpoly Fruits And Vegetables Props" frameborder="0"
                    allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                    allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                    execution-while-out-of-viewport execution-while-not-rendered web-share width="800" height="600"
                    src="https://sketchfab.com/models/f91d6d8a985e4bb2b2d461b577793e57/embed"> </iframe>
            </div>'
        ]);

        AR::create([
            'html' => '
            <div class="sketchfab-embed-wrapper"> <iframe title="Animal Pack Vol 1" frameborder="0" allowfullscreen
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share width="800" height="600"
                        src="https://sketchfab.com/models/167308ee94584773afe76041befbc82e/embed"> </iframe>
                </div>'
        ]);
    }
}
