<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Import the Category model

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Cat Supplies']);
        Category::create(['name' => 'Dog Supplies']);
        // Category::create(['name' => 'Other Pets']); // Optional
    }
}