<?php

namespace Database\Seeders;

use App\Models\Poem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poem::create([
            'name' => 'johny johny yes papa',
            'poster_image' => 'jhony_jhony.png',
            'voice' => 'jhony_jhony.mp3',
            'transcript' => '
            Johny Johny yes papa.<br>
            Eating sugar no papa.<br>
            Telling lies no papa.<br>
            Open your mouth.<br>
            Ha!<br>
            Ha!<br>
            Ha!<br>
            Johny Johny yes papa.<br>
            Eating sugar no papa.<br>
            Telling lies no papa.<br>
            Open your mouth.<br>
            Ha!<br>
            Ha!<br>
            Ha!<br>
            <br>
            Johny Johny yes papa.<br>
            Johny Johny yes papa.<br>
            Johny Johny yes papa.<br>
            Johny Johny yes papa.<br>
            Johny Johny yes papa.<br>
            Eating sugar no papa.<br>
            Telling lies no papa.<br>
            Open your mouth.<br>
            Ha!<br>
            Ha!<br>
            Ha!<br>
            '
        ]);

        Poem::create([
            'name' => 'Humpty Dumpty',
            'poster_image' => 'humpty.png',
            'voice' => 'humpty.mp3',
            'transcript' => "Humpty Dumpty sat on a wall<br>
            Humpty Dumpty had a great fall<br>
            All the king's horses and all the king's men<br>
            Couldn't put Humpty together again<br>
            Humpty Dumpty sat on a wall<br>
            Humpty Dumpty had a great fall<br>
            All the king's horses and all the king's men<br>
            Couldn't put Humpty together again<br>
            Humpty Dumpty sat on a wall<br>
            Humpty Dumpty had a great fall<br>
            All the king's horses and all the king's men<br>
            Couldn't put Humpty together again<br>
            "
        ]);

        Poem::create([
            'name' => 'London Bridge',
            'poster_image' => 'london.png',
            'voice' => 'london.mp3',
            'transcript' => "London Bridge is falling down<br>
            Falling down, falling down<br>
            London Bridge is falling down<br>
            My fair lady<br>
            Build it up with iron bars<br>
            Iron bars, iron bars<br>
            Build it up with iron bars<br>
            My fair lady<br>
            Iron bars will bend and break<br>
            Bend and break, bend and break<br>
            Iron bars will bend and break<br>
            My fair lady<br>
            Build it up with gold and silver<br>
            Gold and silver, gold and silver<br>
            Build it up with gold and silver<br>
            My fair lady<br>
            Gold and silver we've not got<br>
            We've not got, we've not got<br>
            Gold and silver we've not got<br>
            My fair lady<br>
            London Bridge is falling down<br>
            Falling down, falling down<br>
            London Bridge is falling down<br>
            My fair lady<br>
            London Bridge is falling down<br>
            Falling down, falling down<br>
            London Bridge is falling down<br>
            My fair lady<br>
            "
        ]);

        Poem::create([
            'name' => 'Mary Had a Little Lamb',
            'poster_image' => 'marry.png',
            'voice' => 'marry.mp3',
            'transcript' => "Mary had a little lamb<br>
            His fleece was white as snow, yeah<br>
            Everywhere the child went<br>
            Your little lamb was sure to go now<br>
            He followed her to school one day<br>
            And broke the teacher's cool<br>
            What a time did they have<br>
            That day at school<br>
            Tisket, tasket, baby<br>
            A green and yellow basket<br>
            Sent a letter to my baby<br>
            And on my way I passed
            "
        ]);

        Poem::create([
            'name' => 'Baba Black Sheep',
            'poster_image' => 'sheep.png',
            'voice' => 'sheep.mp3',
            'transcript' => "Baa, baa, black sheep, have you any wool?<br>
            Yes sir, yes sir, three bags full!<br>
            One for the master,<br>
            One for the dame,<br>
            And one for the little boy<br>
            Who lives down the lane<br>
            Baa, baa, black sheep,<br>
            Have you any wool?<br>
            Yes sir, yes sir,<br>
            Three bags full...<br>
            <br>
            Baa, baa, white sheep,<br>
            have you any wool?<br>
            yes sir, yes sir,<br>
            three needles full.<br>
            one to mend a jumper,<br>
            one to mend a frock,<br>
            and one for the little girl,<br>
            with holes in her sock.<br>
            Baa, baa, white sheep,<br>
            have you any wool?<br>
            yes sir, yes sir,<br>
            three needles full...<br>
            <br>
            Baa, baa, grey sheep,<br>
            have you any wool?<br>
            yes sir yes sir ,<br>
            three bags full.<br>
            one for the kitten,<br>
            one for the cats,<br>
            and one for the owner,<br>
            to knit some woolly hats.<br>
            Baa, Baa, brown sheep,<br>
            have you any wool?<br>
            yes sir, yes sir, three bags full.<br>
            One for the mammy ,<br>
            One for the daddy<br>
            and one for the little baby<br>
            Who lives down the lane.<br>
            Baa, baa, bare sheep,<br>
            have you any wool?<br>
            No sir, no sir, no bags full.<br>
            None for the master,<br>
            none for the dame,<br>
            and none for the little boy<br>
            who lives down the lane.<br>
            Baa, baa bare sheep,<br>
            have you any wool?<br>
            No sir, no sir,<br>
            no bags full...
            "
        ]);

    }
}
