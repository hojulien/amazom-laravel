<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'name' => 'Ordinateur Portable',
                'slug' => 'ordinateur-portable',
                'description' => 'Un ordinateur portable puissant pour le travail et les loisirs.',
                'price' => 999.99,
                'image' => 'laptop.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Canapé en Cuir',
                'slug' => 'canape-en-cuir',
                'description' => 'Un canapé en cuir élégant pour votre salon.',
                'price' => 499.99,
                'image' => 'sofa.jpg',
            ],
            [
                'category_id' => 3,
                'name' => 'Montre de Luxe',
                'slug' => 'montre-de-luxe',
                'description' => 'Une montre de luxe pour les occasions spéciales.',
                'price' => 1999.99,
                'image' => 'watch.jpg',
            ],
            [
                'category_id' => 4,
                'name' => 'Vélo de Montagne',
                'slug' => 'velo-de-montagne',
                'description' => 'Un vélo de montagne robuste pour les aventures en plein air.',
                'price' => 799.99,
                'image' => 'mountain_bike.jpg',
            ],
        ];
    }
}
