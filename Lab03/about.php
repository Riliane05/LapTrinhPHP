<?php include('template/head.php'); ?>
<?php include('template/header.php'); ?>
    <style>
        body {
            background: url('media/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .about-container {
            max-width: 900px;
            margin: 80px auto;
            padding: 40px 45px;

            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(20px);

            border-radius: 15px;
            border: 1px solid rgba(33, 25, 25, 0.3);
            color: #fff;

            box-shadow: 0 8px 30px rgba(0,0,0,0.25);
        }

        .about-container h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .about-container h2 {
            margin-top: 35px;
            font-weight: 600;
            font-size: 28px;
            color: #ffffffff;
        }

        .title-box {
            display: inline-block;
            padding: 8px 18px;
            border: 2px solid #fff;
            border-radius: 10px;  
            margin-bottom: 15px;
        }

        .subtitle-box {
            display: inline-block;
            padding: 6px 16px;
            border: 2px solid #fff;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .about-container p {
            font-size: 17px;
            line-height: 1.7;
            opacity: 0.95;
        }

        .about-container ul {
            margin-left: 15px;
        }

        .about-container li {
            margin-bottom: 10px;
            font-size: 17px;
            line-height: 1.7;
        }

        .about-banner {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.35);
        }
    </style>

    <div class="about-container">

        <img src="media/banner.jpg" class="about-banner" alt="Bookshop Banner">

        <h1><span class="title-box">About Our BookShop</span></h1>
        <p>
            Welcome to <strong>HP's BookShop</strong> — a place where stories come alive and 
            inspiration begins. Chúng tôi xây dựng trang web này để mang đến trải nghiệm mua sách 
            trực tuyến nhanh chóng, thuận tiện và thú vị.
        </p>

        <h2><span class="subtitle-box">Our Mission</span></h2>
        <p>
            Chúng tôi mong muốn tạo ra một thư viện mở, nơi bất cứ ai cũng có thể dễ dàng tìm 
            thấy những cuốn sách phù hợp với sở thích, phong cách và mục tiêu học tập của mình.
        </p>

        <h2><span class="subtitle-box">What We Offer</span></h2>
        <ul>
            <li>Nhiều thể loại sách: Fiction, Education, Self-Help, Science...</li>
            <li>Giao diện đơn giản – đẹp – thân thiện.</li>
            <li>Cập nhật sách mới liên tục.</li>
            <li>Thông tin sách rõ ràng, hình ảnh chất lượng.</li>
            <li>Tạo tài khoản để lưu trữ sách yêu thích.</li>
        </ul>

        <h2><span class="subtitle-box">Why Choose Us?</span></h2>
        <p>
            Chúng tôi tin rằng mỗi cuốn sách đều có sức mạnh thay đổi tư duy và cuộc sống của bạn.
            BookShop là cầu nối giúp bạn dễ dàng tiếp cận những nguồn tri thức quý giá.
        </p>

    </div>

<?php include('template/footer.php'); ?>
