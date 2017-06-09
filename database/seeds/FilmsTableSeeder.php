<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('films')->insert([
        'name' => 'Slumdog Millionaire ',
        'slug'  => 'slumdog-millionaire',
        'description' => 'Releasing his boundless energy onto the colourful, conflicted streets of Mumbai, Danny Boyle found a perfect match for his wide-eyed filmmaking style, pushing Vikas Swarup’s novel and Anthony Dod Mantle’s handheld cinematography to the limit with this by turns romantic and harrowing underdog’s tale, which culminates in one of cinema’s most euphoric feel-good endings. ML',
        'release_date' => '2008/02/02',
        'rating' => 4,
        'ticket_price' => 3500,
        'country' => 'USA',
        'geners' => '{"Drama"}',
        'photo' => 'http://www.film4.com/media/images/Channel4/Film4/2000s/S/slumdog-millionaire_LRG.jpg'
      ]);
      
      DB::table('films')->insert([
        'name' => 'The Avengers',
        'slug' => 'the-avengers',
        'description' => 'If we can’t protect the Earth, you can be damned well sure we’re going to avenge it.” The culmination of an ambitious, unprecedented plan to assemble the Earth’s Mightiest Heroes in one film, with geek deity Joss Whedon bringing his trademark wit and quippy dialogue to keep the characters as prominent as the action. JC',
        'release_date' => '2012/02/02',
        'rating' => 5,
        'ticket_price' => 5500,
        'country' => 'USA',
        'geners' => '{"Fantasy"}',
        'photo' => 'http://www.film4.com/media/images/Channel4/Film4/_misc_features/21st%20Century/the-avengers-1024.jpg'
      ]);
      
      DB::table('films')->insert([
        'name' => 'Finding Nemo',
        'slug' => 'finding-nemo', 
        'description' => 'Fast becoming the gold standard for Pixar’s enviable run of critical and box office successes, this underwater family adventure found the studio perfecting its mixture of classic storytelling and CGI spectacle, leaving Disney, Dreamworks and all other animated competitors in the dust. ML',
        'release_date' => '2003/02/02',
        'rating' => 4,
        'ticket_price' => 2500,
        'country' => 'USA',
        'geners' => '{"Cartoon"}',
        'photo' => 'http://www.film4.com/media/images/Channel4/Film4/_misc_features/21st%20Century/finding-nemo-1024_LRG.jpg'
      ]);
    }
}
