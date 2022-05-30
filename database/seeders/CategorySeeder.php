<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Explore New Products',
            'ar_name' => 'اكتشف المنتجات الجديدة',
        ]);
        Category::create([
            'name' => 'Exhebition Entertainment',
            'ar_name' => 'ترفيه المعرض',
        ]);
        Category::create([
            'name' => 'Live Entertainment',
            'ar_name' => 'فعاليات ترفهيه حية',
        ]);
    }
}
