<?php

namespace Database\Seeders;

use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create(['name' => 'Family travel']);
        $category2 = Category::create(['name' => 'Weekend Getaway']);
        $category3 = Category::create(['name' => 'Summer']);
        $category4 = Category::create(['name' => 'Explore the wild']);
        $category5 = Category::create(['name' => 'The Group Tour.']);
        $category6 = Category::create(['name' => 'The Gap Year.']);
        $category7 = Category::create(['name' => 'Road Trip.']);
        $category8 = Category::create(['name' => 'Solo travel']);
        $category9 = Category::create(['name' => 'Travel with friends']);

        $destination1 = Destinations::create([
            'pricing' => 'BDT 10000',
            'title' => 'Sundarbans',
            'description' => 'The Sundarbans is the world’s largest mangrove forest, spanning India and Bangladesh. A UNESCO World Heritage site, it is a complex web of tidal waterways and islands, famously home to the endangered Bengal tiger, saltwater crocodiles, and diverse birdlife.',
            'content' => 'The Sundarbans is the world’s largest mangrove forest, spanning India and Bangladesh. A UNESCO World Heritage site, it is a complex web of tidal waterways and islands, famously home to the endangered Bengal tiger, saltwater crocodiles, and diverse birdlife.',
            'category_id' => $category1->id,
            'image' => 'images/location-1.jpg',
            'published_at' => now(),
            'duration' => '3 Days / 2 Nights',
            'group_size' => '10-15 People',
            'tour_type' => 'Cultural & Sightseeing',
        ]);

        $destination2 = Destinations::create([
            'pricing' => 'BDT 15000',
            'title' => 'Cox’s Bazar',
            'description' => 'Cox’s Bazar, located in southeastern Bangladesh, is famous for having the world’s longest natural sandy sea beach, stretching over 120 km (75 miles). It is the country’s premier tourist destination, known for its scenic hills, surfing waves, and vibrant local seafood.',
            'content' => 'Cox’s Bazar, located in southeastern Bangladesh, is famous for having the world’s longest natural sandy sea beach, stretching over 120 km (75 miles). It is the country’s premier tourist destination, known for its scenic hills, surfing waves, and vibrant local seafood.',
            'category_id' => $category3->id,
            'image' => 'images/location-2.jpg',
            'published_at' => now(),
            'duration' => '5 Days / 4 Nights',
            'group_size' => '15-20 People',
            'tour_type' => 'Beach & Adventure',
        ]);

        $destination3 = Destinations::create([
            'pricing' => 'BDT 15000',
            'title' => 'Bandarban',
            'description' => 'Bandarban is a district in southeastern Bangladesh and part of the Chittagong Hill Tracts. Known for its breathtaking mountainous landscapes, it is home to the highest peaks in the country, including Tahjindong and Keokradong, and is inhabited by diverse indigenous ethnic groups.',
            'content' => 'Bandarban is a district in southeastern Bangladesh and part of the Chittagong Hill Tracts. Known for its breathtaking mountainous landscapes, it is home to the highest peaks in the country, including Tahjindong and Keokradong, and is inhabited by diverse indigenous ethnic groups.',
            'category_id' => $category4->id,
            'image' => 'images/location-3.jpg',
            'published_at' => now(),
            'duration' => '7 Days / 6 Nights',
            'group_size' => '10-15 People',
            'tour_type' => 'Adventure & Culture',
        ]);

        $destination4 = Destinations::create([
            'pricing' => 'BDT 15000',
            'title' => 'Saint Martain',
            'description' => 'Saint Martin’s Island is the only coral island in Bangladesh, located in the northeastern part of the Bay of Bengal. This small, scenic island is famous for its crystal-clear blue waters, coconut groves, and vibrant marine life, making it a top destination for snorkeling and relaxation..',
            'content' => 'Saint Martin’s Island is the only coral island in Bangladesh, located in the northeastern part of the Bay of Bengal. This small, scenic island is famous for its crystal-clear blue waters, coconut groves, and vibrant marine life, making it a top destination for snorkeling and relaxation.',
            'category_id' => $category9->id,
            'image' => 'images/destination-10.jpg',
            'published_at' => now(),
            'duration' => '7 Days / 6 Nights',
            'group_size' => '10-15 People',
            'tour_type' => 'Beach & Cruise',
        ]);

        // Create tags
        $tag1 = Tag::create(['name' => 'Travel']);
        $tag2 = Tag::create(['name' => 'Cruise']);
        $tag3 = Tag::create(['name' => 'Beach']);
        $tag4 = Tag::create(['name' => 'Adventure']);

        // Attach tags to destinations
        $destination1->tags()->attach([$tag1->id, $tag2->id]);
        $destination2->tags()->attach([$tag4->id, $tag3->id]);
        $destination3->tags()->attach([$tag1->id, $tag4->id]);
        $destination4->tags()->attach([$tag1->id, $tag2->id]);
    }
}
