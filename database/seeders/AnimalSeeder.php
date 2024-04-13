<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Dog',
            'image' => 'dog.jpg',
            'info'  => 'Dogs are furry friends who love to play fetch and cuddle. They have a great sense of smell and can learn tricks like sitting and rolling over. Some dogs are big like a bear, while others are small like a teddy. They bark to say hello and wag their tails to show they are happy. Woof woof!',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Cat',
            'image' => 'cat.jpg',
            'info'  => 'Cats are fluffy pals who love to nap and chase after toys. They can climb high places like a tree and jump with grace. Cats like to clean themselves by licking their fur. They purr when they are happy and meow to ask for food or attention. Meow meow!',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Horse',
            'image' => 'horse.jpg',
            'info'  => 'Horses are strong and majestic animals known for their speed and beauty. They have a long mane and tail, and some have distinctive markings on their coat. Horses are used for riding, racing, and working on farms. They communicate through neighing and whinnying, and they enjoy grazing on grass and hay.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Rabbit',
            'image' => 'rabbit.jpg',
            'info'  => 'Rabbits are small mammals with soft fur and long ears. They are known for their hopping gait and love to munch on vegetables like carrots and lettuce. Rabbits are social animals and enjoy the company of other rabbits. They thump their hind legs to warn others of danger and are excellent burrowers.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Bird',
            'image' => 'bird.jpg',
            'info'  => 'Birds come in various shapes, sizes, and colors, with feathers covering their bodies. They have beaks for eating and can fly using their wings. Some birds, like parrots, can mimic human speech, while others, like pigeons, are known for their homing instincts. Birds build nests to lay eggs and raise their young.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Fish',
            'image' => 'fish.jpg',
            'info'  => 'Fish are aquatic animals with scales covering their bodies and fins for swimming. They come in various shapes and sizes, from tiny guppies to large sharks. Fish breathe underwater using gills and rely on water for survival. Some fish, like goldfish, are kept as pets in aquariums, while others are caught for food.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Hamster',
            'image' => 'hamster.jpg',
            'info'  => 'Hamsters are small rodents with soft fur and chubby cheeks. They are nocturnal animals and enjoy running on hamster wheels. Hamsters like to burrow and make nests using bedding material. They enjoy munching on seeds, fruits, and vegetables and are often kept as pets in cages.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Chicken',
            'image' => 'chicken.jpg',
            'info'  => 'Chickens are domesticated birds raised for their meat and eggs. They have feathers covering their bodies and a distinctive comb on their heads. Chickens are social animals and live in flocks, pecking order determines their social structure. They scratch the ground to find food and enjoy dust bathing to keep their feathers clean. Chickens produce various sounds, including clucks, crows, and squawks.',
        ]);

        Animal::create([
            'type'  => 'domestic',
            'name'  => 'Duck',
            'image' => 'duck.jpg',
            'info'  => 'Ducks are waterfowl birds with waterproof feathers and webbed feet. They are found in ponds, lakes, and rivers, where they swim and dive for food. Ducks have a distinctive quacking sound and are known for their waddling walk. They feed on aquatic plants, insects, and small fish, and they build nests near water bodies to lay eggs and raise their young.',
        ]);


        Animal::create([
            'type'  => 'wild',
            'name'  => 'Lion',
            'image' => 'lion.jpg',
            'info'  => 'Lions are large carnivorous mammals known for their majestic appearance and loud roars. They are apex predators and live in groups called prides. Lions have a distinct mane around their necks, with males having fuller and darker manes than females. They hunt in coordinated groups, mainly targeting large herbivores like zebras and buffalo.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Elephant',
            'image' => 'elephant.jpg',
            'info'  => 'Elephants are the largest land animals, known for their long trunks and tusks. They have thick gray skin and large ears, which they use to regulate their body temperature. Elephants are highly intelligent and social animals, living in herds led by a matriarch. They communicate through various vocalizations, body language, and infrasound.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Giraffe',
            'image' => 'giraffe.jpg',
            'info'  => 'Giraffes are tall, herbivorous mammals with long necks and legs. They have a spotted coat pattern and ossicones on their heads, which are bony structures covered in skin and hair. Giraffes feed on leaves from tall trees using their long tongues and prehensile lips. They are social animals and live in loose groups called towers.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Tiger',
            'image' => 'tiger.jpg',
            'info'  => 'Tigers are large carnivorous cats known for their distinctive orange fur with black stripes. They are solitary hunters and ambush their prey using stealth and strength. Tigers are apex predators and play a crucial role in maintaining the balance of their ecosystems. They are highly territorial and mark their territory with urine and scent markings.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Panda',
            'image' => 'panda.jpg',
            'info'  => 'Pandas are large, herbivorous bears native to China. They have distinctive black and white fur patterns, with black patches around their eyes and ears. Pandas primarily feed on bamboo, spending up to 12 hours a day eating. They are solitary animals and are known for their gentle demeanor and playful behavior.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Wolf',
            'image' => 'wolf.jpg',
            'info'  => 'Wolves are carnivorous mammals known for their pack behavior and howling communication. They have dense fur coats that vary in color from white to gray to black. Wolves are skilled hunters, preying on a variety of animals including deer, elk, and smaller mammals. They play an important role in maintaining healthy ecosystems.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Gorilla',
            'image' => 'gorilla.jpg',
            'info'  => 'Gorillas are large, herbivorous apes native to Africa. They have muscular bodies and are covered in dark fur. Gorillas live in family groups led by a dominant silverback male. They are primarily terrestrial but are also skilled climbers. Gorillas communicate through vocalizations, gestures, and facial expressions.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Zebra',
            'image' => 'zebra.jpg',
            'info'  => 'Zebras are herbivorous mammals known for their distinctive black and white striped coats. They are social animals, living in large herds where they can help each other spot predators. Zebras communicate through vocalizations and body language. Their stripes act as camouflage, making it difficult for predators like lions to single out individuals in a herd.',
        ]);

        Animal::create([
            'type'  => 'wild',
            'name'  => 'Crocodile',
            'image' => 'crocodile.jpg',
            'info'  => 'Crocodiles are large, carnivorous reptiles found in tropical regions. They have a long, muscular body and armored skin covered in scales. Crocodiles are ambush predators, lying in wait for prey to approach before striking with their powerful jaws. They are apex predators in their ecosystems and play a vital role in controlling prey populations.',
        ]);

    }
}
