<?php

use Illuminate\Database\Seeder;
use SmartGift\Product\Category;

class CategorySeeder extends Seeder
{
    protected $rawData = [
        ['name' => 'In Ảnh Gỗ', 'id' => '1'],
        ['name' => 'Mẫu Biểu Trưng Đồng', 'id' => '2'],
        ['name' => 'In Biểu Trưng Pha Lê',  'id' => '3'],
        ['name' => 'In Cốc Thuỷ Tinh', 'id' => '4'],
//        ['name' => 'Cốc Lumiarc', 'id' => '4'],
        ['name' => 'In Cốc Minh Long', 'id' => '5'],
//        ['name' => 'Cốc Ocean', 'id' => '6'],
        ['name' => 'In Cốc Trắng Thường', 'id' => '7'],
//        ['name' => 'Cốc Union', 'id' => '8'],
        ['name' => 'In Cup Pha Lê', 'id' => '9'],
        ['name' => 'In Ảnh Lên Đá', 'id' => '10'],
        ['name' => 'In Decal-Backlit-Standee', 'id' => '11'],
        ['name' => 'In Đĩa Minh Long', 'id' => '12'],
        ['name' => 'In Hóa Đơn', 'id' => '13'],
        ['name' => 'In Túi', 'id' => '14'],
        ['name' => 'In Móc Khóa', 'id' => '15'],
        ['name' => 'In 3D Pha Lê', 'id' => '16'],
        ['name' => 'In Ảnh Pha Lê', 'id' => '17'],
        ['name' => 'In Thẻ Tên Tấm Đồng, Nhôm', 'id' => '18'],
    ];

    public function run()
    {
        DB::table('categories')->truncate();

        foreach ($this->rawData as $row)
        {
            $category = new Category();
            $category->id           = $row['id'];
            $category->name         = $row['name'];
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
        return  '/upload/productCategories/'.$id.'.jpg';
    }
}