<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // "Food", "Travel", "Shopping", "Bills", "Others"
        $expense_categories = [
            'Food',
            'Travel',
            'Shopping',
            'Bills',
            'Others',
        ];

        foreach ($expense_categories as $category) {
            Category::create(
                [
                    'name' => $category,
                    // 'slug' => strtolower($category) . '-' . "e",
                    'type' => 'expense'
                ]
            );
        }

        // "Salary", "Business", "Others"
        $income_categories = [
            'Salary',
            'Business',
            'Others',
        ];

        foreach ($income_categories as $category) {
            Category::create(
                [
                    'name' => $category,
                    // 'slug' => strtolower($category) . '-' . "i",
                    'type' => 'income'
                ]
            );
        }
    }
}
