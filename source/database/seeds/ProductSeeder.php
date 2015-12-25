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
        ["Biểu Trưng Đồng mẫu 5","Vui lòng liên hệ","12.jpg","12.jpg", "13.jpg", "14.jpg","Biểu trưng gỗ đồng là một món quà sang trọng trong dịp kỷ niệm, sự kiện, hội nghị hay trong lĩnh vực kinh doanh. Hình thức tuy đơn giản nhưng mang đậm nét truyền thống mà không kém phần sang trọng.",""],
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
],["Biểu Trưng pha Lê Mẫu 37","Liên hệ trực tiếp","37.jpg","37.jpg","","","Mẫu mã phong phú,quý khách có thể in trong, in mờ hoặc khắc trực tiếp lên bề mặt pha lê.",""]];
protected $cupPL = [
        ["Cúp Pha Lê Mẫu 1","Vui lòng liên hệ công ty","1.jpg","1.jpg","",""],
        ["Cúp Pha Lê Mẫu 2","Vui lòng liên hệ công ty","2.jpg","2.jpg","",""],
        ["Cúp Pha Lê Mẫu 3","Vui lòng liên hệ công ty","3.jpg","3.jpg","",""],
        ["Cúp Pha Lê Mẫu 4","Vui lòng liên hệ công ty","4.jpg","4.jpg","",""],
        ["Cúp Pha Lê Mẫu 5","Vui lòng liên hệ công ty","5.jpg","5.jpg","",""],
        ["Cúp Pha Lê Mẫu 6","Vui lòng liên hệ công ty","6.jpg","6.jpg","",""],
        ["Cúp Pha Lê Mẫu 7","Vui lòng liên hệ công ty","7.jpg","7.jpg","",""],
        ["Cúp Pha Lê Mẫu 8","Vui lòng liên hệ công ty","8.jpg","8.jpg","",""],
        ["Cúp Pha Lê Mẫu 9","Vui lòng liên hệ công ty","9.jpg","9.jpg","",""],
        ["Cúp Pha Lê Mẫu 10","Vui lòng liên hệ công ty","10.jpg","10.jpg","",""],
        ["Cúp Pha Lê Mẫu 11","Vui lòng liên hệ công ty","11.jpg","11.jpg","",""],
        ["Cúp Pha Lê Mẫu 12","Vui lòng liên hệ công ty","12.jpg","12.jpg","",""],
        ["Cúp Pha Lê Mẫu 13","Vui lòng liên hệ công ty","13.jpg","13.jpg","",""],
        ["Cúp Pha Lê Mẫu 14","Vui lòng liên hệ công ty","14.jpg","14.jpg","",""],
        ["Cúp Pha Lê Mẫu 15","Vui lòng liên hệ công ty","15.jpg","15.jpg","",""],
        ["Cúp Pha Lê Mẫu 16","Vui lòng liên hệ công ty","16.jpg","16.jpg","",""],
        ["Cúp Pha Lê Mẫu 17","Vui lòng liên hệ công ty","17.jpg","17.jpg","",""],
        ["Cúp Pha Lê Mẫu 18","Vui lòng liên hệ công ty","18.jpg","18.jpg","",""],
        ["Cúp Pha Lê Mẫu 19","Vui lòng liên hệ công ty","19.jpg","19.jpg","",""],
        ["Cúp Pha Lê Mẫu 20","Vui lòng liên hệ công ty","20.jpg","20.jpg","",""],
        ["Cúp Pha Lê Mẫu 21","Vui lòng liên hệ công ty","21.jpg","21.jpg","",""],
        ["Cúp Pha Lê Mẫu 22","Vui lòng liên hệ công ty","22.jpg","22.jpg","",""],
        ["Cúp Pha Lê Mẫu 23","Vui lòng liên hệ công ty","23.jpg","23.jpg","",""],
        ["Cúp Pha Lê Mẫu 24","Vui lòng liên hệ công ty","24.jpg","24.jpg","",""],
        ["Cúp Pha Lê Mẫu 25","Vui lòng liên hệ công ty","25.jpg","25.jpg","",""],
        ["Cúp Pha Lê Mẫu 26","Vui lòng liên hệ công ty","26.jpg","26.jpg","",""],
        ["Cúp Pha Lê Mẫu 27","Vui lòng liên hệ công ty","27.jpg","27.jpg","",""],
        ["Cúp Pha Lê Mẫu 28","Vui lòng liên hệ công ty","28.jpg","28.jpg","",""],
        ["Cúp Pha Lê Mẫu 29","Vui lòng liên hệ công ty","29.jpg","29.jpg","",""],
        ["Cúp Pha Lê Mẫu 30","Vui lòng liên hệ công ty","30.jpg","30.jpg","",""],
        ["Cúp Pha Lê Mẫu 31","Vui lòng liên hệ công ty","31.jpg","31.jpg","",""],
        ["Cúp Pha Lê Mẫu 32","Vui lòng liên hệ công ty","32.jpg","32.jpg","",""],
        ["Cúp Pha Lê Mẫu 33","Vui lòng liên hệ công ty","33.jpg","33.jpg","",""],
        ["Cúp Pha Lê Mẫu 34","Vui lòng liên hệ công ty","34.jpg","34.jpg","",""],
        ["Cúp Pha Lê Mẫu 35","Vui lòng liên hệ công ty","35.jpg","35.jpg","",""],
        ["Cúp Pha Lê Mẫu 36","Vui lòng liên hệ công ty","36.jpg","36.jpg","",""],
        ["Cúp Pha Lê Mẫu 37","Vui lòng liên hệ công ty","37.jpg","37.jpg","",""],
        ["Cúp Pha Lê Mẫu 38","Vui lòng liên hệ công ty","38.jpg","38.jpg","",""],
        ["Cúp Pha Lê Mẫu 39","Vui lòng liên hệ công ty","39.jpg","39.jpg","",""],
    ];
    protected $cocMinhLong = [
        ["Cốc Sứ Minh Long Mẫu 1","Vui Lòng liên hệ","1.jpg","1.jpg","2.jpg", "3.jpg"],
        ["Cốc Sứ Minh Long Mẫu 2","Vui Lòng liên hệ","5.jpg","5.jpg", "6.jpg", "7.jpg"],
        ["Cốc Sứ Minh Long Mẫu 3","Vui Lòng liên hệ","9.jpg","9.jpg", "10.jpg", "11.jpg"],
        ["Cốc Sứ Minh Long Mẫu 4","Vui Lòng liên hệ","13.jpg","13.jpg", "14.jpg", "15.jpg"],
        ["Cốc Sứ Minh Long Mẫu 5","Vui Lòng liên hệ","17.jpg","17.jpg", "18.jpg", "19.jpg"],
        ["Cốc Sứ Minh Long Mẫu 6","Vui Lòng liên hệ","21.jpg","21.jpg", "22.jpg", "23.jpg"],
        ["Cốc Sứ Minh Long Mẫu 7","Vui Lòng liên hệ","25.jpg","25.jpg", "26.jpg", "27.jpg"],
        ["Cốc Sứ Minh Long Mẫu 8","Vui Lòng liên hệ","30.jpg","30.jpg", "31.jpg", "32.jpg"],
        ["Cốc Sứ Minh Long Mẫu 9","Vui Lòng liên hệ","33.jpg","33.jpg","",""],
        ["Cốc Sứ Minh Long Mẫu 10","Vui Lòng liên hệ","34.jpg","34.jpg","",""],
        ["Cốc Sứ Minh Long Mẫu 11","Vui Lòng liên hệ","35.jpg","35.jpg","",""],
        ["Cốc Sứ Minh Long Mẫu 12","Vui Lòng liên hệ","36.jpg","36.jpg","",""],
        ["Cốc Sứ Minh Long Mẫu 13","Vui Lòng liên hệ","37.jpg","37.jpg","",""],
        ["Cốc Sứ Minh Long Mẫu 14","Vui Lòng liên hệ","38.jpg","38.jpg","",""],
    ];

    protected $cocIn = [
        ["In Cốc  Sứ Cao Cấp","150000","3.jpg","3.jpg","","","Nhận in ảnh, in chứ, in logo lên cốc sứ. Tư vấn thiết kế miễn phí. Lấy ngay sau 10 phút.","Được làm từ chất liệu men sứ cao cấp, sáng bóng, mịn sử dụng công nghệ in hiện đại hình ảnh in lên cốc rõ nét không bị phai mờ qua thời gian."],
        ["In Ảnh Lên Cốc Dạ Quang","150000","15.jpg","15.jpg","","","Những chiếc cốc dễ thương nhiều mầu sắc sinh động có in hình gia đình,
bạn bè sẽ là món quà ý nghĩa trong dịp sinh nhật, ngày lễ lưu lại những kỷ niệm của bạn và người thân.","Cốc dạ quang là cốc có đặc điểm là trong điều kiện bình thường hình ảnh rất rõ nét còn trong bóng tối phát ra một ánh sáng mầu xanh huyền ảo.
Chiếc cố dạ quang có một lớp cảm quang bên ngoài nên ban ngày cốc sẽ tích ánh sáng và ban đêm khi để cốc trong bóng tối sẽ phát ra ánh sáng mờ mờ huyền ảo."],
        ["In Cốc Trắng Thường","70000","2.jpg","2.jpg", "8.jpg", "","Những chiếc cốc trắng đơn điệu là thế qua bàn tay người thợ nhiều năm kinh nghiệm trong ngành in, cùng với công nghệ in hiện đại  đã trở lên vô cùng độc đáo và sinh động.","
In ảnh lên cốc cũng là cách thể hiện tình cảm của mình đối với người thân, bạn bè.
Các bạn sẽ nhận được ưu đãi giảm giá khi in số lượng lớn."],
        ["In Cốc Cảm Biến Nhiệt","140000","13.jpg","13.jpg", "14.jpg", "","Cốc cảm biến nhiệt hay còn được gọi là cốc đổi mầu, cốc ma thuật. Chiếc cốc này ở nhiệt độ bình thường không nhin thấy hình ảnh nhưng khi rót nước nóng vào cốc hình ảnh từ từ hiện ra rất ró nét vô cùng sinh động. Sẽ là món quà đặc biệt dành tặng cho người thận, nguười iu trong dịp lễ, sinh nhật. ","Cốc cảm biến nhiệt là loại cốc thay đổi màu sắc hình ảnh theo nhiệt độ. Nhờ lớp men cảm biến nhiệt được tráng lên, thành cốc tiếp xúc với nhiệt từ nước nóng trong lòng cốc, lớp men đen sẽ biến mất dần dần hiền lên hình ảnh đầy mầu sắc được in lên trước đó.
 Đặc biệt thích hợp với những người hay uống café, trà, những loại đồ nóng. Sẽ là món quà đặc biệt dễ thương cho người thân, bạn bè."],
        ["In Ảnh Lên Cốc Quai Tai, Quai Tim","80000","","","","","Tặng gì cho người thân, bạn bè của mình trong dịp lễ tết, sinh nhật?
        Các bạn muốn tìm món quà gì đó thật ý nghĩa nhưng phải khác biệt?
        Đến với Công Ty Quà Tặng Smart Giift sẽ giúp bạn thực hiện một cách dễ dàng.","Những chiếc cốc quai tai, quai tim có in hình chính người thân, bạn bè của  bạn sẽ là món quà vô cùng ý nghĩa trong dịp sinh nhật, ngày lễ."],
["In Cốc Mầu","90000","5.jpg","5.jpg","","","Đôi khi trong cuộc sống các bạn muốn tạo ra sự khác biệt nhưng không biết bắt đầu từ đâu. Hãy bắt đầu từ những thứ bình thường đơn giản nhất xung quanh bạn nhưng không thể thiếu trong cuộc sống hàng ngày.","Bạn hãy thử thay đổi chiếc cốc trắng bình thường mà hàng ngày bạn vẫn uống nước thành chiếc cốc nhiều mầu sắc sinh động in hình ngộ nghĩnh của bạn hay người thân.
Chúng tôi có nhiều mầu cốc cho các bạn lựa chọn, hỗ trợ tư vấn thiết kế miễn phí, chiều lòng được những khách hàng khó tính nhất.
Ưu đãi giảm giá khi in số lượng lớn."],
["In Cốc Lòng Mầu","110000","10.jpg","10.jpg", "11.jpg", "","Những chiếc cốc dễ thương nhiều mầu sắc sinh động có in hình gia đình,
bạn bè sẽ là món quà ý nghĩa trong dịp sinh nhật, ngày lễ lưu lại những kỷ niệm của bạn và người thân.","In ảnh, chữ lên cốc lòng mầu, tư vấn thiết kế miễn phí, ảnh in lên cốc rõ nét.
In ảnh lên cốc lấy ngay, giá rẻ."],
["In Cốc Viền Mầu","105000","10.jpg","11.jpg", "", "", "Những chiếc cốc dễ thương nhiều mầu sắc sinh động có in hình gia đình,
bạn bè sẽ là món quà ý nghĩa trong dịp sinh nhật, ngày lễ lưu lại những kỷ niệm của bạn và người thân.","Hình in rõ nét, chất men sáng bóng, cốc cóc nhiều mầu cho bạn lựa chọ.
Tư vấn thiết kế miễn phí."],
["In Cốc Vát Có Thìa","145000","","","","","In ảnh, in chữ, in hình ngộ nghĩnh lên cốc vát có thìa vô cùng độc đáo ","Cốc có hình trụ phần dưới hơi vát dùng để in ảnh, in chữ, in logo,…cốc có nhiều mầu sắc khác nhau và có thêm chiếc thìa nhỏ vô cùng xinh xắn."]
    ];
    protected $inDia = [
        ["In Lên Đĩa Minh Long Mẫu 1","Vui lòng liên hệ ","1.jpg","1.jpg","",""],
        ["In Lên Đĩa Minh Long Mẫu 2","Vui lòng liên hệ ","2.jpg","2.jpg","",""],
        ["In Lên Đĩa Minh Long Mẫu 3","Vui lòng liên hệ ","3.jpg","3.jpg","",""]
    ];

    protected $inPhale = [
        ["In Ảnh Lên Pha Lê mẫu 1","Vui loàng liên hệ","1.jpg","1.jpg", "2.jpg", "3.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 2","Vui loàng liên hệ","4.jpg","4.jpg", "5.jpg", "6.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 3","Vui loàng liên hệ","7.jpg","7.jpg", "8.jpg", "9.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 4","Vui loàng liên hệ","10.jpg","10.jpg", "11.jpg", "12.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 5","Vui loàng liên hệ","13.jpg","13.jpg", "14.jpg", "15.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 6","Vui loàng liên hệ","16.jpg","16.jpg", "17.jpg", "18.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 7","Vui loàng liên hệ","19.jpg","19.jpg", "20.jpg", "21.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 8","Vui loàng liên hệ","22.jpg","22.jpg", "23.jpg", "24.jpg"],
        ["In Ảnh Lên Pha Lê mẫu 9","Vui loàng liên hệ","25.jpg","25.jpg", "26.jpg", "27.jpg"]
    ];

    protected $theTen = [
        ["Thẻ tên tấm đồng, nhôm mẫu 1","Vui lòng liên hệ trực tiếp","1.jpg","1.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 2","Vui lòng liên hệ trực tiếp","2.jpg","2.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 3","Vui lòng liên hệ trực tiếp","3.jpg","3.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 4","Vui lòng liên hệ trực tiếp","4.jpg","4.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 5","Vui lòng liên hệ trực tiếp","5.jpg","5.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 6","Vui lòng liên hệ trực tiếp","6.jpg","6.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 7","Vui lòng liên hệ trực tiếp","7.jpg","7.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 8","Vui lòng liên hệ trực tiếp","8.jpg","8.jpg","",""],
        ["Thẻ tên tấm đồng, nhôm mẫu 9","Vui lòng liên hệ trực tiếp","9.jpg","9.jpg","",""]
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

        foreach ($this->cupPL as $cup)
        {
            $product = new Product();
            $product->name = $cup[0];
            $product->price = -1;
            $product->thumbnail = '/upload/cate3/' . $cup[2];
            $product->image1 = $cup[3] ? '/upload/cate3/' . $cup[3] : '';
            $product->image2 = $cup[4] ? '/upload/cate3/' . $cup[4] : '';
            $product->image3 = $cup[5] ? '/upload/cate3/' . $cup[5] : '';
            $product->descriptionTitle = "Cúp pha lê thường được chọn làm quà tặng trong các sự kiện, lễ trao giải, lễ kỉ niệm,…
của các công ty, tổ chức, doanh nghiệp nhằm đánh dấu, ghi nhận và tôn vinh những công lao, cống hiến cho doanh nghiệp.
Chúng tôi có rất nhiều mẫu cúp pha lê cho quý doanh nghiệp lựa chọn phù hợp với mục tiêu của mình,";
            $product->descriptionContent = "Tự hào là đơn vị cung cấp cúp pha lê lớn nhất thị trường Hà Nội.

Đội ngũ nhân viên kỹ thuật tay nghề cao nhiều năm kinh nghiệm trong ngành pha lê.
Bạn chỉ cần gửi ảnh qua gmail, chúng tôi sẽ thiết kế chỉnh sửa ảnh dựa trên ý tưởng của khách hàng

Tư vẫn thiết kế miễn phí,";
            $product->categoryId = 3;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }

        foreach ($this->cocMinhLong as $cocML)
        {
            $product = new Product();
            $product->name = $cocML[0];
            $product->price = -1;
            $product->thumbnail = '/upload/cate4/' . $cocML[2];
            $product->image1 = $cocML[3] ? '/upload/cate4/' . $cocML[3] : '';
            $product->image2 = $cocML[4] ? '/upload/cate4/' . $cocML[4] : '';
            $product->image3 = $cocML[5] ? '/upload/cate4/' . $cocML[5] : '';
            $product->descriptionTitle = "Nhận in ảnh, in logo doanh nghiệp lên cốc sứ Minh Long.
Chúng tôi có nhiều kiểu dáng kích thước khác nhau đáp ứng nhu cầu của quý doanh nghiệp.
Chất lượng men sáng bóng, dầy dặn.";
            $product->descriptionContent = "Doanh nghiệp bạn đang cần một sản phẩm để tặng cho đối tác, nhân viên hay cho chiến dịch quảng cáo thì in hình ảnh, logo doanh nghiệp lên cốc sứ Minh Long là sự lựa chọn hoàn hảo.

Sự dụng công nghệ in hiện đại hình in sáng bóng, mịn, hình in rõ nét.
Đội ngũ nhân viên tay nghề cao nhiều năm làm trong ngành in sẽ giúp khách hàng có được sản phẩm ưng ý nhất.

Quý khách in số lượng lớn vui lòng liên hệ trực tiếp với chúng tôi.";
            $product->categoryId = 4;
            $product->rateTimes = 1;
            $product->ratePoints = 5;
            $product->save();
        }

        foreach ($this->cocIn as $inCoc) {
            $product = new Product();
            $product->name = $inCoc[0];
            $product->price = $inCoc[1];
            $product->thumbnail = $inCoc[2] ? '/upload/cate5/' . $inCoc[2] : '';
            $product->image1 = $inCoc[3] ? '/upload/cate5/' . $inCoc[3] : '';
            $product->image2 = $inCoc[4] ? '/upload/cate5/' . $inCoc[4] : '';
            $product->image3 = $inCoc[5] ? '/upload/cate5/' . $inCoc[5] : '';
            $product->descriptionTitle = $inCoc[6];
            $product->descriptionContent = $inCoc[7] ?: "";
            $product->categoryId = 5;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }

        foreach ($this->inDia as $dia) {
            $product = new Product();
            $product->name = $dia[0];
            $product->price = -1;
            $product->thumbnail = $dia[2] ? '/upload/cate7/' . $dia[2] : '';
            $product->image1 = $dia[3] ? '/upload/cate7/' . $dia[3] : '';
            $product->image2 = $dia[4] ? '/upload/cate7/' . $dia[4] : '';
            $product->image3 = $dia[5] ? '/upload/cate7/' . $dia[5] : '';
            $product->descriptionTitle = 'Nhận in hoa văn, in thông tin doanh nghiệp lên đía Minh Long.';
            $product->descriptionContent = "";
            $product->categoryId = 7;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }

        foreach ($this->inPhale as $dia) {
            $product = new Product();
            $product->name = $dia[0];
            $product->price = -1;
            $product->thumbnail = $dia[2] ? '/upload/cate8/' . $dia[2] : '';
            $product->image1 = $dia[3] ? '/upload/cate8/' . $dia[3] : '';
            $product->image2 = $dia[4] ? '/upload/cate8/' . $dia[4] : '';
            $product->image3 = $dia[5] ? '/upload/cate8/' . $dia[5] : '';
            $product->descriptionTitle = 'Nhận in ảnh, in logo lên pha lê sẽ là món quà độc đáo dành tặng người thân trong dịp sinh nhật, ngày lễ.
            Có nhiều hình dáng, kích thước pha lê cho các bạn lựa chọn phù hợp với mục đích của mình.';
            $product->descriptionContent = "Sử dụng công nghệ in phun kỹ thuật số và phương pháp chuyển lên pha lê
             bằng keo chuyên dụng uv và ánh sáng tử ngoại tạo ra những bức ảnh rõ nét trên những khối pha lê long lanh
             Tư vấn thiết kế miễn phí.";
            $product->categoryId = 8;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }
        foreach ($this->theTen as $dia) {
            $product = new Product();
            $product->name = $dia[0];
            $product->price = -1;
            $product->thumbnail = $dia[2] ? '/upload/cate10/' . $dia[2] : '';
            $product->image1 = $dia[3] ? '/upload/cate10/' . $dia[3] : '';
            $product->image2 = $dia[4] ? '/upload/cate10/' . $dia[4] : '';
            $product->image3 = $dia[5] ? '/upload/cate10/' . $dia[5] : '';
            $product->descriptionTitle = 'Nhận làm thẻ tên tấm đồng, nhôm chất lượng cao. Đặt kích thước theo yêu cầu của khách hàng';
            $product->descriptionContent = "Xưởng sản xuất trực tiếp không qua trung gian. Tư vấn thiết kế miễn phí.";
            $product->categoryId = 10;
            $product->rateTimes = 1;
            $product->ratePoints = 5;

            $product->save();
        }

        $product = new Product();
        $product->name = 'Móc Khóa Mica';
        $product->price = '40000';
        $product->thumbnail = '/upload/cate9/1.jpg';
        $product->image1 = '/upload/cate9/3.jpg';
        $product->image2 = '/upload/cate9/4.jpg';
        $product->image3 = '/upload/cate9/5.jpg';
        $product->descriptionTitle = 'Nhận làm móc khóa Mica giá rẻ.Sự dụng công nghệ in mới mực in không phai, không bong tróc.';
        $product->descriptionContent = "Bạn nghĩ sao khi tặng người thân, bàn bè mình một chiếc móc chìa khóa bằng mica nho nhỏ xinh xinh có hình của chính người bạn tặng. Chắc hẳn họ sẽ ngạc nhiên lắm đây.
        Tặng quà đâu cần phải những món quà đắt tiền phải không ạ? Món quà nhỏ nhưng chứa đựng đầy tình cảm.
        Nhận in số lượng lớn, nhỏ móc khóa mica, giao hàng toàn quốc.
        Quý khách làm số lượng lớn vui lòng liên hệ.";
        $product->categoryId = 9;
        $product->rateTimes = 1;
        $product->ratePoints = 5;

        $product->save();
    }
}