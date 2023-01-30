<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Watch',
            'price' => 250,
            'description' => 'Good watch',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'
        ]);
        Product::create([
            'name' => 'Bag',
            'price' => 350,
            'description' => 'Good Bag',
            'image' => 'https://images.unsplash.com/photo-1491637639811-60e2756cc1c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=669&q=80'
        ]);

        Product::create([
            'name' => 'Bag',
            'price' => 350,
            'description' => 'Good Bag',
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ]);

        Product::create([
            'name' => 'perfume',
            'price' => 100,
            'description' => 'Good perfume',
            'image' => 'https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80'
        ]);

        Product::create([
            'name' => 'laptop',
            'price' => 500,
            'description' => 'Good laptop',
            'image' => 'https://images.unsplash.com/photo-1555960840-f536ae1e4e95?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGxhcCUyMHNjcmVlbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60'
        ]);

        Product::create([
            'name' => 'laptop',
            'price' => 600,
            'description' => 'Good laptop',
            'image' => 'https://images.unsplash.com/photo-1490135900376-2e86d918a23b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ]);

        Product::create([
            'name' => 'laptop',
            'price' => 50,
            'description' => 'Good laptop',
            'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80'
        ]);

        Product::create([
            'name' => 'mobile',
            'price' => 250,
            'description' => 'Good mobile',
            'image' => 'https://images.unsplash.com/photo-1585060544812-6b45742d762f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bW9iaWxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ]);

        Product::create([
            'name' => 'mobile',
            'price' => 300,
            'description' => 'Good mobile',
            'image' => 'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bW9iaWxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ]);
    }
}