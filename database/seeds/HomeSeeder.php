<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'img-url' => 'img/slider/bg1.jpg',
            'titre' => 'HELLO WORLD!',
            'sous-titre' => 'WE ARE KASPER,WE MAKE ART.',
            'texte' => 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.',
        ]);
        DB::table('homes')->insert([
            'img-url' => 'img/slider/bg2.jpg',
            'titre' => 'HELLO WORLD!',
            'sous-titre' => 'WE ARE KASPER,WE MAKE ART.',
            'texte' => 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.',
        ]);
        DB::table('homes')->insert([
            'img-url' => 'img/slider/bg3.jpg',
            'titre' => 'HELLO WORLD!',
            'sous-titre' => 'WE ARE KASPER,WE MAKE ART.',
            'texte' => 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.',
        ]);

    }
}
