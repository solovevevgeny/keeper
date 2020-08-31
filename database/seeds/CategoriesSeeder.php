<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $category = new Category();
        $category->title="Автомобиль";
        $category->parent_id = 0;
        $category->save();

        $category = new Category();
        $category->title="Заправка";
        $category->parent_id = 1;
        $category->save();

        $category = new Category();
        $category->title="Техобслуживание";
        $category->parent_id = 1;
        $category->save();

        $category = new Category();
        $category->title="Жилье";
        $category->parent_id = 0;
        $category->save();

        $category = new Category();
        $category->title="ЖКХ";
        $category->parent_id = 2;
        $category->save();

        $category = new Category();
        $category->title="Ремонт-строительство";
        $category->parent_id = 2;
        $category->save();

        
    }
}
