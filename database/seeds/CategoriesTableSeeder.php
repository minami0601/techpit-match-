<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '中華', 
        ]);
        DB::table('categories')->insert([
            'name' => 'フレンチ', 
        ]);
        DB::table('categories')->insert([
            'name' => 'イタリアン', 
        ]);
        DB::table('categories')->insert([
            'name' => '日本食', 
        ]);
        DB::table('categories')->insert([
            'name' => 'カフェ', 
        ]);
        DB::table('categories')->insert([
            'name' => 'その他', 
        ]);
    }
}
