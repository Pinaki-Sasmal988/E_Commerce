<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
              'name'=>'LG TV',
              'price'=>'22300',
              'category'=>'TV',
              'description'=>'this is smart tv',
              'gallery'=> 'https://www.apowersoft.com/wp-content/uploads/2019/04/mirror-android-lg-tv-20190409.jpg' 
            ],
            [
                'name'=>'SONY TV',
                'price'=>'25300',
                'category'=>'TV',
                'description'=>'this is smart tv and there have android system',
                'gallery'=> 'https://4.imimg.com/data4/VG/PA/MY-17088056/sony-led-tv-500x500.jpg' 
              ],
              [
                'name'=>'Samsung mobile',
                'price'=>'12300',
                'category'=>'Mobile',
                'description'=>'this mobile have 4gb ram,64 gb rom,duel core processor',
                'gallery'=> 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftc3VuZyUyMHBob25lfGVufDB8fDB8fA%3D%3D&w=1000&q=80' 
              ],
              [
                'name'=>'Oppo mobile',
                'price'=>'20300',
                'category'=>'mobile',
                'description'=>'this mobile have 6gb ram,128gb rom,duel core processor',
                'gallery'=> 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftc3VuZyUyMHBob25lfGVufDB8fDB8fA%3D%3D&w=1000&q=80' 
              ]
              ]);
    }
}
