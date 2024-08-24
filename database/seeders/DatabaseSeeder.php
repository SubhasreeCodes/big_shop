<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;


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

        Role::create(['name' => 'Customer']);

        // Call the CountrySeeder class
        $this->call(CountrySeeder::class);

        //Call the StateSeeder class
        $this->call(StateSeeder::class);

        // Call the CitySeeder class
        $this->call(CitySeeder::class);

        // Call the ProductSeeder class
        $this->call(ProductLabelSeeder::class);

        // Call the ProductTagSeeder
        $this->call(ProductTagSeeder::class);

        //Call the CategorySeeder
        $this->call(CategorySeeder::class);
        
        // Call the SubCategorySeeder
        $this->call(SubCategorySeeder::class);

    }
}
