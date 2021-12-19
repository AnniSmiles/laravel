<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $group1 = Group::create([
            'name' => 'სალათები და სტარტერები'
        ]);

        $array1 = ["თევზის ასორტი", "ხორცის ასორტი", "ქართული სალათი", "ქათმის საცივი", "ფხალის ასორტი"];

        foreach ($array1 as $item){
            Product::create([
                'group_id' => $group1->id,
                'name' => $item,
                'description' => Str::random(50),
                'price' => random_int(1, 50)
            ]);
        }

        $group2 = Group::create([
            'name' => 'ყველი'
        ]);

        $array2 = ["სოფლის იმერული ყველი", "რძიანი სულგუნი", "შებოლილი სულგუნი", "ყველი, ნადუღი და ყულგუნი", "გუდა"];

        foreach ($array2 as $item){
            Product::create([
                'group_id' => $group2->id,
                'name' => $item,
                'description' => Str::random(50),
                'price' => random_int(1, 50)
            ]);

        }
        $group3 = Group::create([
            'name' => 'ცხელი კერძები'
        ]);
        $array3 = ["სოკოს ჩაშუშული", "მილფეი ბოსტნეულით და მოცარელათი", "ლობიო იმერულად", "სულგუნი პომიდორით კეცზე", "სოკო კეცზე სულგუნით"];

        foreach ($array3 as $item){
            Product::create([
                'group_id' => $group3->id,
                'name' => $item,
                'description' => Str::random(100),
                'price' => random_int(1, 50)
            ]);

        }

    }
}
