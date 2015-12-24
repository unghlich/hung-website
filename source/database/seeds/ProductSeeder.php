<?php
use Illuminate\Database\Seeder;
use SmartGift\Product\Product;

class ProductSeeder extends Seeder
{
    protected $btd = [
        ["Biểu Trưng Đồng mẫu 1","Vui lòng liên hệ","1.jpg","1.jpg", "2.jpg", "3.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.","Mỗi một biểu trưng gỗ đồng lại mang một ý nghĩa khác nhau, truyền tải được thông tin mà người tặng muốn gửi đến người nhận. Chúng tôi có nhiều mẫu mã đẹp mắt, đa dạng về kích thước, chủng loại và hình dáng mang đến cho quý khách hàng nhiều lựa chọn phù hợp với tiêu chí của mình."],
        ["Biểu Trưng Đồng mẫu 2","Vui lòng liên hệ","4.jpg","4.jpg", "5.jpg", "6.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
        ["Biểu Trưng Đồng mẫu 3","Vui lòng liên hệ","7.jpg","7.jpg", "8.jpg", "15.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
        ["Biểu Trưng Đồng mẫu 4","Vui lòng liên hệ","9.jpg","9.jpg", "10.jpg", "11.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
        ["Biểu Trưng Đồng mẫu 5","Vui lòng liên hệ","12.jjpg","12.jpg", "13.jpg", "14.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
        ["Biểu Trưng Đồng mẫu 6","Vui lòng liên hệ","16.jpg","16.jpg", "17.jpg", "18.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
        ["Biểu Trưng Đồng mẫu 7","Vui lòng liên hệ","19.jpg","19.jpg", "20.jpg", "21.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
    ];
    protected $btpl = [
        ["Biểu Trưng pha Lê Mẫu 1","Liên hệ trực tiếp","1.jpg","1.jpg","","","Bạn băn khoăn không biết nên chọn món quà gì để tặng cho đối tác, phần thường hay quà lưu niệm cho nhân viên, thì quà tặng từ pha lê là một lựa chọn hoàn hảo -  món quà đầy ý nghĩa, sang trọng, lịch sự.
Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.","Tự hào là đơn vị cung cấp quà tặng pha lê lớn nhất thị trường Hà Nội.
Xưởng sản xuất trực tiếp không qua trung gian, giá rẻ hơn rất nhiều so với giá ngoài cửa hàng.
Đội ngũ nhân viên kỹ thuật tay nghề cao nhiều năm kinh nghiệm trong ngành pha lê.
Bạn chỉ cần gửi ảnh qua gmail, chúng tôi sẽ thiết kế chỉnh sửa ảnh dựa trên ý tưởng của khách hàng"],
["Biểu Trưng pha Lê Mẫu 2","Liên hệ trực tiếp","2.jpg","2.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""],
["Biểu Trưng pha Lê Mẫu 3","Liên hệ trực tiếp","3.jpg","3.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.","Sang trọng độc đáo, mẫu mã đa dạng bắt mắt, chúng tôi luôn đáp ứng nhu cầu của quý doanh nghiệp.
Ngoài  ra biểu trưng pha lê mang đến thịnh vượng, thanh công, tài lộc cho doanh nghiệp bạn.
Nhập hàng trực tiếp, sản xuất không qua trung gian.
Tư vấn thiết kế miễn phí."],
["Biểu Trưng pha Lê Mẫu 4","Liên hệ trực tiếp","4.jpg","4.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.","Biểu trưng pha lê, độc , lạ là một trong số mẫu thiết kế được nhiều khách hàng lựa chọn nhất.
Sản xuất trực tiếp không qua trung gian.
Tư vấn thiết kế miễn phí."],
["Biểu Trưng pha Lê Mẫu 5","Liên hệ trực tiếp","5.jpg","5.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""],
        ["Biểu Trưng pha Lê Mẫu 6","Liên hệ trực tiếp","6.jpg","6.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 7","Liên hệ trực tiếp","7.jpg","7.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 8","Liên hệ trực tiếp","8.jpg","8.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 9","Liên hệ trực tiếp","9.jpg","9.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 10","Liên hệ trực tiếp","10.jpg","10.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 11","Liên hệ trực tiếp","11.jpg","11.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 12","Liên hệ trực tiếp","12.jpg","12.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 13","Liên hệ trực tiếp","13.jpg","13.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 14","Liên hệ trực tiếp","14.jpg","14.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 15","Liên hệ trực tiếp","15.jpg","15.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 16","Liên hệ trực tiếp","16.jpg","16.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 17","Liên hệ trực tiếp","17.jpg","17.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 18","Liên hệ trực tiếp","18.jpg","18.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 19","Liên hệ trực tiếp","19.jpg","19.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 20","Liên hệ trực tiếp","20.jpg","20.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 21","Liên hệ trực tiếp","21.jpg","21.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 22","Liên hệ trực tiếp","22.jpg","22.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 23","Liên hệ trực tiếp","23.jpg","23.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 24","Liên hệ trực tiếp","24.jpg","24.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 25","Liên hệ trực tiếp","25.jpg","25.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 26","Liên hệ trực tiếp","26.jpg","26.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 27","Liên hệ trực tiếp","27.jpg","27.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 28","Liên hệ trực tiếp","28.jpg","28.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 29","Liên hệ trực tiếp","29.jpg","29.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 30","Liên hệ trực tiếp","30.jpg","30.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 31","Liên hệ trực tiếp","31.jpg","31.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 32","Liên hệ trực tiếp","32.jpg","32.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 33","Liên hệ trực tiếp","33.jpg","33.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 34","Liên hệ trực tiếp","34.jpg","34.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 35","Liên hệ trực tiếp","35.jpg","35.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 36","Liên hệ trực tiếp","36.jpg","36.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""
],["Biểu Trưng pha Lê Mẫu 37","Liên hệ trực tiếp","37.jpg","37.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""]

    ];
    public function run()
    {
        DB::table('products')->truncate();
        foreach ($this->btd as $bt)
        {
            $product = new Product();
            $product->name = $bt[0];
            $product->price = -1;
            $product->thumbnail = '/upload/cate2/' .  $bt[2];
            $product->image1 = $bt[3] ? '/upload/cate2/' . $bt[3] : '';
            $product->image2 = $bt[4] ? '/upload/cate2/' . $bt[4] : '';
            $product->image3 = $bt[5] ? '/upload/cate2/' . $bt[5] : '';
            $product->descriptionTitle = $bt[6];
            $product->descriptionContent = $bt[7]?:"";
            $product->categoryId = 2;
            $product->rateTimes = 1;
            $product->ratePoints = 5;
            $product->save();
        }

        foreach ($this->btpl as $bt)
        {
            $product = new Product();
            $product->name = $bt[0];
            $product->price = -1;
            $product->thumbnail = '/upload/cate1/' . $bt[2];
            $product->image1 = $bt[3] ? '/upload/cate1/' . $bt[3] : '';
            $product->image2 = $bt[4] ? '/upload/cate1/' . $bt[4] : '';
            $product->image3 = $bt[5] ? '/upload/cate1/' . $bt[5] : '';
            $product->descriptionTitle = $bt[6];
            $product->descriptionContent = $bt[7] ?: "";
            $product->categoryId = 1;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }

    }
}