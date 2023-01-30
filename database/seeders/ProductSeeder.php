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
            'name' => 'Watch',
            'price' => 280,
            'description' => 'Good watch',
            'image' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Product::create([
            'name' => 'Watch',
            'price' => 300,
            'description' => 'Good watch',
            'image' => 'https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80'
        ]);

        Product::create([
            'name' => 'Watch',
            'price' => 250,
            'description' => 'Good watch',
            'image' => 'https://images.unsplash.com/photo-1539874754764-5a96559165b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=930&q=80'
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
            'name' => 'Bag',
            'price' => 300,
            'description' => 'Good Bag',
            'image' => 'https://images.unsplash.com/photo-1525103504173-8dc1582c7430?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80'
        ]);

        Product::create([
            'name' => 'Bag',
            'price' => 290,
            'description' => 'Good Bag',
            'image' => 'https://images.unsplash.com/photo-1568247067952-eab2ce84a349?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Product::create([
            'name' => 'laptop',
            'price' => 500,
            'description' => 'Good laptop',
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80'
        ]);

        Product::create([
            'name' => 'laptop',
            'price' => 500,
            'description' => 'Good laptop',
            'image' => 'https://images.unsplash.com/photo-1661961112951-f2bfd1f253ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80'
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
            'image' => 'https://images.unsplash.com/photo-1530893609608-32a9af3aa95c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80'
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

        Product::create([
            'name' => 'mobile',
            'price' => 310,
            'description' => 'Good mobile',
            'image' => 'https://images.unsplash.com/photo-1546027658-7aa750153465?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Product::create([
            'name' => 'mobile',
            'price' => 200,
            'description' => 'Good mobile',
            'image' => 'https://images.unsplash.com/photo-1596558450268-9c27524ba856?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1450&q=80'
        ]);

        
        Product::create([
            'name' => 'perfume',
            'price' => 100,
            'description' => 'Good perfume',
            'image' => 'https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80'
        ]);

        Product::create([
            'name' => 'perfume',
            'price' => 120,
            'description' => 'Good perfume',
            'image' => 'https://images.unsplash.com/photo-1623742310401-d8057c3c43c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ]);

        Product::create([
            'name' => 'perfume',
            'price' => 150,
            'description' => 'Good perfume',
            'image' => 'https://images.unsplash.com/photo-1624613533305-28d421d70875?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'
        ]);

        Product::create([
            'name' => 'perfume',
            'price' => 120,
            'description' => 'Good perfume',
            'image' => 'https://images.unsplash.com/photo-1589782431327-ac8a63d965a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80'
        ]);
    }
}