<?php

namespace Database\Seeders;

use App\Models\Product;
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
                'description' => 'Un ordinateur portable puissant pour le travail et les loisirs.',
                'price' => 899.99,
                'image' => 'laptop.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Canapé en Cuir',
                'description' => 'Un canapé en cuir élégant pour votre salon.',
                'price' => 399.99,
                'image' => 'sofa.jpg',
            ],
            [
                'category_id' => 3,
                'name' => 'Montre de Luxe',
                'description' => 'Une montre de luxe pour les occasions spéciales.',
                'price' => 999.99,
                'image' => 'watch.jpg',
            ],
            [
                'category_id' => 4,
                'name' => 'Vélo de Montagne',
                'description' => 'Un vélo de montagne robuste pour les aventures en plein air.',
                'price' => 399.99,
                'image' => 'mountain_bike.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'category_id' => $product['category_id'],
                'name' => $product['name'],
                'slug' => \Str::slug($product['name']), // slugify the name to make it url-friendly
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => $product['image'],
            ]);
        }
    }
}
