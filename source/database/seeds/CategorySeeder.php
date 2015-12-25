<?php

use Illuminate\Database\Seeder;
use SmartGift\Product\Category;

class CategorySeeder extends Seeder
{
    protected $rawData = [
        ['image'=> 'Biểu Trưng Pha Lê','description' => 'Biểu Trưng Pha Lê'],
        ['image'=> 'Biểu-Trưng-đồng','description' => 'Biểu-Trưng-đồng'],
        ['image'=> 'Cúp-Pha-Lê','description' => 'Cúp-Pha-Lê'],
        ['image'=> 'Cốc Minh Long','description' => 'Cốc Minh Long'],
        ['image'=> 'Cốc-In-Ảnh','description' => 'Cốc-In-Ảnh'],
        ['image'=> 'Cốc-Thủy-Tinh','description' => 'Cốc-Thuỷ-Tinh'],
        ['image'=> 'In-Đĩa','description' => 'In-Đĩa'],
        ['image'=> 'In-Ảnh-Lên-Pha-Lê','description' => 'In-Ảnh-Lên-Pha-Lê'],
        ['image'=> 'Móc-Khóa','description' => 'Móc-Khóa'],
        ['image'=> 'Thẻ-Tên-Huy-Hiệu-Đồng','description' => 'Thẻ-Tên-Huy-Hiệu-Đồng'],
    ];

    public function run()
    {
        DB::table('categories')->truncate();

        foreach ($this->rawData as $row)
        {
            $category = new Category();
            $category->name         = $this->resolveName($row['image']);
            $category->image        = $this->resolveImageLink($row['image']);
            $category->description  = $this->resolveName($row['image']);

            $category->save();
        }
    }

    protected function resolveName($imageName)
    {
        return str_replace('-', ' ', $imageName);
    }

    public function resolveImageLink($imageName)
    {
        return '/upload/productCategories/' . $imageName . '.jpg';
    }
}