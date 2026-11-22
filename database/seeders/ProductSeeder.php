<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Main Meals
            [
                'name' => 'Prime Ribeye Steak',
                'category' => 'Main Meals',
                'description' => '28-day aged beef tenderloin served with truffle mashed potatoes, roasted asparagus, and a rich red wine reduction.',
                'price' => 3400,
                'is_available' => true,
            ],
            [
                'name' => 'Signature Seafood Risotto',
                'category' => 'Main Meals',
                'description' => 'Creamy Arborio rice infused with saffron, topped with pan-seared prawns, scallops, and fresh garden herbs.',
                'price' => 2800,
                'is_available' => true,
            ],
            [
                'name' => 'Artisanal Woodfired Pizza',
                'category' => 'Main Meals',
                'description' => 'Hand-stretched sourdough crust layered with San Marzano tomatoes, buffalo mozzarella, and fresh basil leaves.',
                'price' => 2200,
                'is_available' => true,
            ],
            [
                'name' => 'Herb-Crusted Rack of Lamb',
                'category' => 'Main Meals',
                'description' => 'Tender roasted lamb rack with a rosemary-garlic crust, served alongside dauphinoise potatoes and mint jus.',
                'price' => 3600,
                'is_available' => true,
            ],
            [
                'name' => 'Pan-Seared Atlantic Salmon',
                'category' => 'Main Meals',
                'description' => 'Crispy-skin salmon fillet over lemon-butter quinoa with charred broccolini and a caper dill sauce.',
                'price' => 2650,
                'is_available' => true,
            ],

            // Snacks & Starters
            [
                'name' => 'Truffle Parmesan Fries',
                'category' => 'Snacks',
                'description' => 'Hand-cut crispy golden fries tossed in white truffle oil, aged Parmesan, and fresh parsley with garlic aioli.',
                'price' => 850,
                'is_available' => true,
            ],
            [
                'name' => 'Crispy Calamari Rings',
                'category' => 'Snacks',
                'description' => 'Lightly dusted tender calamari fried to perfection, served with charred lemon and spicy marinara dip.',
                'price' => 1150,
                'is_available' => true,
            ],
            [
                'name' => 'Wagyu Beef Sliders',
                'category' => 'Snacks',
                'description' => 'Three mini brioche buns filled with juicy Wagyu patties, caramelized onions, smoked gouda, and house relish.',
                'price' => 1450,
                'is_available' => true,
            ],

            // Desserts
            [
                'name' => 'Valrhona Chocolate Lava Cake',
                'category' => 'Desserts',
                'description' => 'Warm dark chocolate cake with a molten ganache center, paired with Madagascar vanilla bean gelato.',
                'price' => 1100,
                'is_available' => true,
            ],
            [
                'name' => 'Classic Tiramisu',
                'category' => 'Desserts',
                'description' => 'Espresso-soaked ladyfingers layered with whipped mascarpone cream and dusted with Dutch cocoa powder.',
                'price' => 950,
                'is_available' => true,
            ],

            // Drinks
            [
                'name' => 'Fresh Passion & Mango Nectar',
                'category' => 'Drinks',
                'description' => 'Chilled, freshly pressed tropical passion fruit and ripe mango juice finished with a hint of mint.',
                'price' => 450,
                'is_available' => true,
            ],
            [
                'name' => 'Spiced Hibiscus Iced Tea',
                'category' => 'Drinks',
                'description' => 'Slow-brewed crimson hibiscus petals infused with cinnamon, clove, and fresh lime over crystal ice.',
                'price' => 400,
                'is_available' => true,
            ],
            [
                'name' => 'Supremacy Berry Mocktail',
                'category' => 'Drinks',
                'description' => 'Muddled strawberries, blackberries, and fresh basil topped with sparkling mineral water and elderflower syrup.',
                'price' => 650,
                'is_available' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}