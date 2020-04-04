<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => 'Spongebob',
            'userid' => '1',
            'genreid' => '1',
            'rating' => '8.5',
            'desc'=> 'In the Pacific Ocean, there is a small town called Bikini Bottom. The residents of Bikini Bottom are all quirky sea creatures. One particularly funny towns person is SpongeBob SquarePants, a sea sponge who dwells in a pineapple. A new recruit at Bikini Bottoms most popular restaurant, the Krusty Krab, he lives a crazy life with his hard-headed neighbor and friend Patrick. His other neighbor Squidward is a sarcastic, boring octopus who cant stand Spongebob. At the Krusty Krab, SpongeBob works for the money-obsessed Eugene Krabs. While Mr. Krabs is often harsh to his employees, he is clever and cares deeply for his own daughter Pearl. In his time off, SpongeBob attends Mrs. Puffs Boating School and hangs out with his other friend Sandy the squirrel..',
            'picture'=>'sponge.jpg',
        ]);

        DB::table('movies')->insert([
            'name' => 'Ratatouille',
            'userid' => '1',
            'genreid' => '1',
            'rating' => '9.5',
            'desc'=> 'A rat named Remy dreams of becoming a great French chef despite his family wishes and the obvious problem of being a rat in a decidedly rodent-phobic profession. When fate places Remy in the sewers of Paris, he finds himself ideally situated beneath a restaurant made famous by his culinary hero, Auguste Gusteau. Despite the apparent dangers of being an unlikely -- and certainly unwanted -- visitor in the kitchen of a fine French restaurant, Remy passion for cooking soon sets into motion a hilarious and exciting rat race that turns the culinary world of Paris upside down. Remy finds himself torn between his calling and passion in life or returning forever to his previous existence as a rat. He learns the truth about friendship, family and having no choice but to be who he really is, a rat who wants to be a chef.',
            'picture'=>'rat.jpg',
        ]);
    }
}
