<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8gb ram and much more faster',
            'category'=>'mobile',
            'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-78060242,imgsize-500,width-800/78060242.jpg',
            ],
            [
                'name'=>'Panasonic Tv',
            'price'=>'400',
            'description'=>'A smartTv with much more features',
            'category'=>'tv',
            'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FPanasonic-inches-Smart-TH-43GS595DX-Black%2Fdp%2FB07S4XF5PT&psig=AOvVaw1ltGw9BGtHP3d2EUg27DMJ&ust=1644561214288000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKjqpYTC9PUCFQAAAAAdAAAAABAX',
            ],
            [
                'name'=>'Sony Tv',
            'price'=>'500',
            'description'=>'A smartTv with smart more features',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/81IYJG9LSgS._SX679_.jpg',
            ],
            [
                'name'=>'Lg fridge',
            'price'=>'305',
            'description'=>'A Fridge with much more faster',
            'category'=>'fridge',
            'gallery'=>'https://5.imimg.com/data5/PP/NY/MY-47795804/lg-refrigerator-500x500.jpg',
            ],
        ]);
    }
}
