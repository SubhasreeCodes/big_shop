<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\ProductLabel;
use App\Models\ProductTag;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        // Call the CountrySeeder class
        $this->call(CountrySeeder::class);

        //Call the StateSeeder class
        $this->call(StateSeeder::class);

        // Call the CitySeeder class
        $this->call(CitySeeder::class);

        $product_labels = [
            [
                'name' => 'Hot',
                'color' => '#e74c3c'
            ],
            [
                'name' => 'New',
                'color' => '#2ecc71'
            ],
            [
                'name' => 'Sale',
                'color' => '#8e44ad'
            ]
        ];

        foreach ($product_labels as $row) {
            ProductLabel::create($row);
        }

        $product_tags = [
            [
                'name' => 'Hand bag'
            ],
            [
                'name' => 'Cloths'
            ],
            [
                'name' => 'Shoes'
            ],
            [
                'name' => 'Bags'
            ],
            [
                'name' => 'Wallet'
            ]
        ];

        foreach ($product_tags as $row) {
            ProductTag::create($row);
        }
        
        $categories = [
            ['name' => 'Fresh Produce'],
            ['name' => 'Dairy and Eggs'],
            ['name' => 'Meat and seafoods'],
            ['name' => 'Bakery'],
            ['name' => 'Pantry Staples'],
            ['name' => 'Beverages'],
            ['name' => 'Frozen Foods'],
            ['name' => 'Snacks'],
            ['name' => 'Health and Wellness'],
            ['name' => 'Household Supplies'],
            ['name' => 'Personal Care'],
            ['name' => 'Baby Products'],
            ['name' => 'Pet Supplies'],
            ['name' => 'International Foods'],
        ];

        foreach ($categories as $row) {
            Category::create($row);
        }

        $sub_categories = [
            [
                'name' => 'Fruits',
                'Category_id' => 1
            ],
            [
                'name' => 'Vegetables',
                'Category_id' => 1
            ],
            [
                'name' => 'Fresh herbs',
                'Category_id' => 1
            ],
            [
                'name' => 'Milk',
                'Category_id' => 2
            ],
            [
                'name' => 'Cheese',
                'Category_id' => 2
            ],
            [
                'name' => 'Yogurt',
                'Category_id' => 2
            ],
            [
                'name' => 'Eggs',
                'Category_id' => 2
            ],
            [
                'name' => 'Butter and Margarine',
                'Category_id' => 2
            ],
            [
                'name' => 'Fresh Meat (beef, pork, chicken)',
                'Category_id' => 3
            ],
            [
                'name' => 'Seafood (fish, shrimp, shellfish)',
                'Category_id' => 3
            ],
            [
                'name' => 'Deli meats',
                'Category_id' => 3
            ],
            [
                'name' => 'Packaged meat',
                'Category_id' => 4
            ],
            [
                'name' => 'Bread',
                'Category_id' => 4
            ],

            [
                'name' => 'Bread',
                'Category_id' => 4
            ],
            [
                'name' => 'Bread',
                'Category_id' => 4
            ],
            [
                'name' => 'Bread',
                'Category_id' => 4
            ],
            [
                'name' => 'Bread',
                'Category_id' => 4
            ],
        ];
    }
}
