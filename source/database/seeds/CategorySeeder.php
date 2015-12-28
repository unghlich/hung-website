<?php

use Illuminate\Database\Seeder;
use SmartGift\Product\Category;

class CategorySeeder extends Seeder
{
    protected $rawData = [
        ['name' => 'Ảnh gỗ', 'id' => '1'],
        ['name' => 'Biểu trưng đồng', 'id' => '2'],
        ['name' => 'Biểu Trưng Pha Lê', 'id' => '3'],
        ['name' => 'Cốc Lumiarc', 'id' => '4'],
        ['name' => 'Cốc Minh Long', 'id' => '5'],
        ['name' => 'Cốc ocean', 'id' => '6'],
        ['name' => 'Cốc trắng thường', 'id' => '7'],
        ['name' => 'Cốc Union', 'id' => '8'],
        ['name' => 'Cup Pha Lê', 'id' => '9'],
        ['name' => 'đá in ảnh', 'id' => '10'],
        ['name' => 'Decal', 'id' => '11'],
        ['name' => 'Đĩa', 'id' => '12'],
        ['name' => 'In Hóa Đơn', 'id' => '13'],
        ['name' => 'In Túi', 'id' => '14'],
        ['name' => 'móc khóa', 'id' => '15'],
        ['name' => 'pha lê 3d', 'id' => '16'],
        ['name' => 'pha lê in ảnh', 'id' => '17'],
        ['name' => 'thẻ tên tấm đồng, nhôm', 'id' => '18'],
    ];

    public function run()
    {
        DB::table('categories')->truncate();

        foreach ($this->rawData as $row)
        {
            $category = new Category();
            $category->name         = $this->resolveName($row['name']);
            $category->image        = $this->resolveImageLink($row['id']);
            $category->description  = $this->resolveName($row['name']);

            $category->save();
        }
    }

    protected function resolveName($imageName)
    {
        return str_replace('-', ' ', $imageName);
    }

    public function resolveImageLink($id)
    {
        return  '/upload/cate'.$id.'/1.jpg';
    }
}