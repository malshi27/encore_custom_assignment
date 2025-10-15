<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        // Dummy product data (simulate database)
        $products = [
            [
                'id' => 1,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000', // ✅ added image
                'name' => "Men's Pro Long Sleeve",
                'description' => "Performance Shirt in DezTek Lite",
                'status' => 'Draft',
                'inventory' => '0 In Stock',
                'description1'=> '',
                'sales_channels' => 5,
                'markets' => 2,
                'category' => 'Activewear Tops',
                'vendor' => 'Encore',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
            ],
            [
                'id' => 2,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Women's Pro Long Sleeve",
                'description' => "Performance Shirt in DezTek Lite",
                'status' => 'Active',
                'inventory' => '73 In Stock for 5 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 6,
                'markets' => 3,
                'category' => 'Activewear Tops',
                'vendor' => 'Encore',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
            ],
            [
                'id' => 3,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Men's Short Sleeve",
                'description' => "Performance Shirt in CoolTech Fabric",
                'status' => 'Active',
                'inventory' => '68 In Stock for 18 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 7,
                'markets' => 4,
                'category' => 'Activewear Tops',
                'vendor' => 'NextGen',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],

               [
                'id' => 4,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Woman's Tank Top",
                'description' => "Breathable Fabric",
                'status' => 'Active',
                'inventory' => '24 In Stock for 22 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 9,
                'markets' => 1,
                'category' => 'Activewear Tops',
                'vendor' => 'Everygreen',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],

                   [
                'id' => 5,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Men;s Full Zip",
                'description' => "Windrbraker Jacket",
                'status' => 'Active',
                'inventory' => '34 In Stock for 12 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 4,
                'markets' => 2,
                'category' => 'Outerwear',
                'vendor' => 'Element',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],

                   [
                'id' => 6,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Women's Lightweight",
                'description' => "Hoodie in soft fleece",
                'status' => 'Active',
                'inventory' => '18 In Stock for 6 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 3,
                'markets' => 5,
                'category' => 'Outerwear',
                'vendor' => 'Element',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],
                [
                'id' => 7,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Men's Compression",
                'description' => "Sleeve Top",
                'status' => 'Active',
                'inventory' => '45 In Stock for 2 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 8,
                'markets' => 7,
                'category' => 'Activewear Tops',
                'vendor' => 'Power',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],
                [
                'id' => 8,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Women's Running",
                'description' => "Shorts with Pockets",
                'status' => 'Active',
                'inventory' => '23 In Stock for 9 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 11,
                'markets' => 3,
                'category' => 'Activewear Bottoms',
                'vendor' => 'Swift',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
                ],
                [
                'id' => 9,
                'image' => 'https://chriscross.in/cdn/shop/files/ChrisCrossRoyalblueCottontshirtmen.jpg?v=1740994595&width=1000',
                'name' => "Men's Jogger",
                'description' => "Pants in Performans Fabric",
                'status' => 'Active',
                'inventory' => '98 In Stock for 25 variants',
                'description1'=> 'Last Update - 25 AUG 25',
                'sales_channels' => 12,
                'markets' => 8,
                'category' => 'Activewear Bottoms',
                'vendor' => 'Swift',
                'variants' => [
                    ['color' => 'Aqua', 'hex' => '#06b6d4', 'stock' => 23, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Blue', 'hex' => '#1d4ed8', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Black', 'hex' => '#000000', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'White', 'hex' => '#e7e1e1ff', 'stock' => 20, 'price' => 68.00, 'discount' => 0],
                    ['color' => 'Green', 'hex' => '#16a34a', 'stock' => 10, 'price' => 68.00, 'discount' => 0],
                ]
            ]



        ];

        return view('inventory', compact('products'));
    }
}
