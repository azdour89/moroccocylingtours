<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    // Placeholder tours: replace with your real itineraries and prices.
    public function run(): void
    {
        $tours = [
            [
                'slug' => 'high-atlas-passes', 'title' => 'High Atlas Passes', 'region' => 'Marrakech to Ouarzazate',
                'days' => 7, 'difficulty' => 'Hard', 'distance_km' => 410, 'climbing_m' => 7200, 'price_eur' => 1450,
                'summary' => 'Long climbs over the Atlas to the edge of the desert, with support van and local guide.',
                'description' => 'Seven days of sustained climbing on quiet mountain roads, finishing in the kasbah country south of the range.',
                'highlights' => ['Tizi n\'Tichka crossing', 'Berber village overnight stay', 'Ait Benhaddou at dusk', 'Support van every day'],
            ],
            [
                'slug' => 'sahara-edge', 'title' => 'Sahara Edge', 'region' => 'Ouarzazate to Merzouga',
                'days' => 6, 'difficulty' => 'Moderate', 'distance_km' => 380, 'climbing_m' => 3100, 'price_eur' => 1290,
                'summary' => 'Long, open roads through the Draa and Todra valleys, ending among the dunes.',
                'description' => 'Rolling terrain, palm oases and gorges, with a final night in a desert camp.',
                'highlights' => ['Todra Gorge ride', 'Palm oasis lunches', 'Desert camp night', 'Sunrise on the dunes'],
            ],
            [
                'slug' => 'atlantic-coast-easy', 'title' => 'Atlantic Coast Easy', 'region' => 'Essaouira to Agadir',
                'days' => 5, 'difficulty' => 'Easy', 'distance_km' => 240, 'climbing_m' => 1500, 'price_eur' => 990,
                'summary' => 'Gentle coastal riding, argan villages and fresh fish. Good for mixed-ability groups.',
                'description' => 'Short daily distances with plenty of time off the bike. E-bikes available on request.',
                'highlights' => ['Argan cooperative visit', 'Beach-side lunches', 'Medina stay in Essaouira', 'E-bike option'],
            ],
        ];

        foreach ($tours as $i => $t) {
            Tour::updateOrCreate(['slug' => $t['slug']], $t + ['sort' => $i]);
        }
    }
}
