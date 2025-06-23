<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // declare categories with their names and descriptions
        $categories = [
            [
                'name' => 'Informatique',
                'description' => 'Ordinateurs, périphériques et accessoires.',
            ],
            [
                'name' => 'Maison et Jardin',
                'description' => 'Mobilier et décoration pour la maison et le jardin.',
            ],
            [
                'name' => 'Mode',
                'description' => 'Vetements, chaussures et accessoires de mode.',
            ],
            [
                'name' => 'Sports et Loisirs',
                'description' => 'Equipements sportifs.',
            ],
        ];

            // loop through each category and create a new record in the database
            // laravel initializes the id automatically, so we don't need to specify it
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => \Str::slug($category['name']), // slugify the name to make it url-friendly
                'description' => $category['description'],
            ]);
        }
    }
}
