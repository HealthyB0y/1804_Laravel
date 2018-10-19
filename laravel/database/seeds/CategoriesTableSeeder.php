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
        //
        if(DB::table('Categories')->get()->count()==0){
        	DB::insert([
        		'id' =>1,
        		'name'=>'First Category'
        	]);
        } else {
        	echo "Table Categories is not empty!";
        }
    }
}
