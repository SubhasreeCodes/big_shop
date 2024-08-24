<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
        foreach($sub_categories as $row)
        {
            sub_categories::create($row);
        }
    }
}
