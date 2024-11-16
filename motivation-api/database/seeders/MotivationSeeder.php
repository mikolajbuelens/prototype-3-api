<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motivations = [
            [
                'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
                'author' => 'Nelson Mandela',
            ],
            [
                'quote' => 'The way to get started is to quit talking and begin doing.',
                'author' => 'Walt Disney',
            ],
            [
                'quote' => 'Your time is limited, so don\'t waste it living someone else\'s life.',
                'author' => 'Steve Jobs',
            ],
            [
                'quote' => 'If life were predictable it would cease to be life, and be without flavor.',
                'author' => 'Eleanor Roosevelt',
            ],
            [
                'quote' => 'Life is what happens when you\'re busy making other plans.',
                'author' => 'John Lennon',
            ],
            [
                'quote' => 'The best time to plant a tree was 20 years ago. The second best time is now.',
                'author' => 'Chinese Proverb',
            ],
            [
                'quote' => 'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.',
                'author' => 'Helen Keller',
            ],
            [
                'quote' => 'It is during our darkest moments that we must focus to see the light.',
                'author' => 'Aristotle',
            ],
            [
                'quote' => 'Whoever is happy will make others happy too.',
                'author' => 'Anne Frank',
            ],
            [
                'quote' => 'Do not go where the path may lead, go instead where there is no path and leave a trail.',
                'author' => 'Ralph Waldo Emerson',
            ],
        ];

        foreach ($motivations as $motivation) {
            \App\Models\Motivation::create($motivation);
        }
    }
}
