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
                'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80',
                'price' => 3400,
                'is_available' => true,
            ],
            [
                'name' => 'Signature Seafood Risotto',
                'category' => 'Main Meals',
                'description' => 'Creamy Arborio rice infused with saffron, topped with pan-seared prawns, scallops, and fresh garden herbs.',
                'image' => 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=800&q=80',
                'price' => 2800,
                'is_available' => true,
            ],
            [
                'name' => 'Artisanal Woodfired Pizza',
                'category' => 'Main Meals',
                'description' => 'Hand-stretched sourdough crust layered with San Marzano tomatoes, buffalo mozzarella, and fresh basil leaves.',
                'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80',
                'price' => 2200,
                'is_available' => true,
            ],
            [
                'name' => 'Herb-Crusted Rack of Lamb',
                'category' => 'Main Meals',
                'description' => 'Tender roasted lamb rack with a rosemary-garlic crust, served alongside dauphinoise potatoes and mint jus.',
                'image' => 'https://images.unsplash.com/photo-1603360946369-dc9bb6258143?auto=format&fit=crop&w=800&q=80',
                'price' => 3600,
                'is_available' => true,
            ],
            [
                'name' => 'Pan-Seared Atlantic Salmon',
                'category' => 'Main Meals',
                'description' => 'Crispy-skin salmon fillet over lemon-butter quinoa with charred broccolini and a caper dill sauce.',
                'image' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=800&q=80',
                'price' => 2650,
                'is_available' => true,
            ],

            // Snacks & Starters
            [
                'name' => 'Truffle Parmesan Fries',
                'category' => 'Snacks',
                'description' => 'Hand-cut crispy golden fries tossed in white truffle oil, aged Parmesan, and fresh parsley with garlic aioli.',
                'image' => 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?auto=format&fit=crop&w=800&q=80',
                'price' => 850,
                'is_available' => true,
            ],
            [
                'name' => 'Crispy Calamari Rings',
                'category' => 'Snacks',
                'description' => 'Lightly dusted tender calamari fried to perfection, served with charred lemon and spicy marinara dip.',
                'image' => 'https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?auto=format&fit=crop&w=800&q=80',
                'price' => 1150,
                'is_available' => true,
            ],
            [
                'name' => 'Wagyu Beef Sliders',
                'category' => 'Snacks',
                'description' => 'Three mini brioche buns filled with juicy Wagyu patties, caramelized onions, smoked gouda, and house relish.',
                'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=80',
                'price' => 1450,
                'is_available' => true,
            ],

            // Desserts
            [
                'name' => 'Valrhona Chocolate Lava Cake',
                'category' => 'Desserts',
                'description' => 'Warm dark chocolate cake with a molten ganache center, paired with Madagascar vanilla bean gelato.',
                'image' => 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?auto=format&fit=crop&w=800&q=80',
                'price' => 1100,
                'is_available' => true,
            ],
            [
                'name' => 'Classic Tiramisu',
                'category' => 'Desserts',
                'description' => 'Espresso-soaked ladyfingers layered with whipped mascarpone cream and dusted with Dutch cocoa powder.',
                'image' => 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?auto=format&fit=crop&w=800&q=80',
                'price' => 950,
                'is_available' => true,
            ],

            // Drinks
            [
                'name' => 'Fresh Passion & Mango Nectar',
                'category' => 'Drinks',
                'description' => 'Chilled, freshly pressed tropical passion fruit and ripe mango juice finished with a hint of mint.',
                'image' => 'https://images.unsplash.com/photo-1621506289937-a8e4df240d0b?auto=format&fit=crop&w=800&q=80',
                'price' => 450,
                'is_available' => true,
            ],
            [
                'name' => 'Spiced Hibiscus Iced Tea',
                'category' => 'Drinks',
                'description' => 'Slow-brewed crimson hibiscus petals infused with cinnamon, clove, and fresh lime over crystal ice.',
                'image' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=800&q=80',
                'price' => 400,
                'is_available' => true,
            ],
            [
                'name' => 'Supremacy Berry Mocktail',
                'category' => 'Drinks',
                'description' => 'Muddled strawberries, blackberries, and fresh basil topped with sparkling mineral water and elderflower syrup.',
                'image' => 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?auto=format&fit=crop&w=800&q=80',
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