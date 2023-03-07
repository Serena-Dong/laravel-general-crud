<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = config('cards');

        foreach ($cards as $card) {
            $new_card = new Card();

            $new_card->img = $card['img'];
            $new_card->name_card = $card['name_card'];
            $new_card->coast = $card['coast'];
            $new_card->type_card = $card['type_card'];
            $new_card->ed = $card['ed'];
            $new_card->effect = $card['effect'];
            $new_card->text = $card['text'];
            $new_card->force = $card['force'];
            $new_card->costitution = $card['costitution'];
            $new_card->save();
        }
    }
}
