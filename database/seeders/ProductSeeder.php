<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name'=>'Redmi note 9 Pro',
            'price'=>'15000',
            'category'=>'mobile',
            'description'=>'Redmi Note 9, Redmi Note 9 Pro, Redmi Note 9 Pro Max to Go on Sale via  Amazon, Mi.com Today: Price in India | Technology News',
            'gallery'=>'https://i.gadgets360cdn.com/large/Redmi_note_9_series_sale_1596630010742.jpg'
            ],
            [
                'name'=>'Canon',
                'price'=>'35000',
                'category'=>'camera',
                'description'=>'Camera Catalogue - Canon India · Lens Catalogue · Lens Catalogue · Range Brochure · Range Brochure · DSLR · EOS 1D X Mark III · EOS 5D MarkIV ',
                'gallery'=>'https://in.canon/media/image/2020/02/11/fff676b601864fd5bdfff7d8ff8fb658_EOS+850D+w+Kit+Lens+Front+Slant.png'
                ],
        ]);
    }
}
