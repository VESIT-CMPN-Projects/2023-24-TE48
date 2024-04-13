<?php

namespace Database\Seeders;

use App\Models\Vegetable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Vegetable::create([
            'name'  => 'Carrot',
            'image' => 'carrot.jpg',
            'info'  => 'Carrots are orange root vegetables that are crunchy and sweet. They are rich in beta-carotene, which is good for eyesight, and they also contain vitamin A, vitamin K, and potassium.'
        ]);

        Vegetable::create([
            'name'  => 'Broccoli',
            'image' => 'broccoli.jpg',
            'info'  => 'Broccoli is a green vegetable with a tree-like appearance, consisting of small, edible florets. It is high in vitamin C, vitamin K, fiber, and various antioxidants.'
        ]);

        Vegetable::create([
            'name'  => 'Peas',
            'image' => 'peas.jpg',
            'info'  => 'Peas are small, round green seeds that are enclosed in pods. They are a good source of protein, fiber, vitamin C, vitamin K, and various minerals.'
        ]);

        Vegetable::create([
            'name'  => 'Spinach',
            'image' => 'spinach.jpg',
            'info'  => 'Spinach is a leafy green vegetable with a slightly bitter taste. It is rich in iron, calcium, vitamin A, vitamin C, and folate.'
        ]);

        Vegetable::create([
            'name'  => 'Bell Pepper',
            'image' => 'bell_pepper.jpg',
            'info'  => 'Bell peppers come in various colors such as red, green, yellow, and orange. They have a crunchy texture and sweet flavor. They are high in vitamin C, vitamin A, and antioxidants.'
        ]);

        Vegetable::create([
            'name'  => 'Tomato',
            'image' => 'tomato.jpg',
            'info'  => 'Tomatoes are red fruits commonly used as vegetables in cooking. They have a juicy texture and a sweet-tart flavor. They are rich in vitamin C, potassium, and lycopene, which is an antioxidant.'
        ]);

        Vegetable::create([
            'name'  => 'Cucumber',
            'image' => 'cucumber.jpg',
            'info'  => 'Cucumbers are long, green vegetables with a crisp texture and mild flavor. They are low in calories and a good source of hydration due to their high water content. They also contain vitamin K and various antioxidants.'
        ]);

        Vegetable::create([
            'name'  => 'Sweet Potato',
            'image' => 'sweet_potato.jpg',
            'info'  => 'Sweet potatoes are orange-fleshed root vegetables with a sweet taste. They are high in vitamin A, vitamin C, fiber, and antioxidants.'
        ]);

        Vegetable::create([
            'name'  => 'Cabbage',
            'image' => 'cabbage.jpg',
            'info'  => 'Cabbage is a leafy green or purple vegetable with tightly packed leaves forming a round or elongated head. It is rich in vitamin C, vitamin K, and fiber.'
        ]);

        Vegetable::create([
            'name'  => 'Celery',
            'image' => 'celery.jpg',
            'info'  => 'Celery is a crunchy, green vegetable with long stalks and a mild, slightly salty taste. It is low in calories and a good source of fiber, vitamin K, and antioxidants.'
        ]);

        Vegetable::create([
            'name'  => 'Green Beans',
            'image' => 'green_beans.jpg',
            'info'  => 'Green beans are long, slender green pods with small seeds inside. They are a good source of vitamins A, C, and K, as well as fiber and folate.'
        ]);

        Vegetable::create([
            'name'  => 'Zucchini',
            'image' => 'zucchini.jpg',
            'info'  => 'Zucchini is a summer squash with a tender texture and mild flavor. It is low in calories and a good source of vitamin C, vitamin A, and potassium.'
        ]);

        Vegetable::create([
            'name'  => 'Onion',
            'image' => 'onion.jpg',
            'info'  => 'Onions are bulbous vegetables with layers of papery skin and a pungent flavor when raw. They are rich in antioxidants and have anti-inflammatory properties.'
        ]);

        Vegetable::create([
            'name'  => 'Eggplant',
            'image' => 'eggplant.jpg',
            'info'  => 'Eggplant, also known as aubergine, is a purple or black glossy vegetable with a spongy texture. It is low in calories and a good source of fiber, vitamins, and minerals.'
        ]);

        Vegetable::create([
            'name'  => 'Radish',
            'image' => 'radish.jpg',
            'info'  => 'Radishes are small, round or elongated root vegetables with a crisp texture and peppery flavor. They are low in calories and a good source of vitamin C and antioxidants.'
        ]);

    }
}
