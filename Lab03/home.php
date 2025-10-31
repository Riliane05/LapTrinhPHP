<?php include('template/head.php'); ?>
<?php include('template/header.php'); ?>

    <style>
        body {
            background: url('media/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .hero {
            background: linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.1)),
                        url('media/banner.jpg') center/cover no-repeat;
            height: 320px;
            border-radius: 12px;
            margin: 20px auto 40px auto;
            display: flex;
            align-items: center;
            padding-left: 50px;
            color: #fff;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
            margin-top: 10px;
            opacity: 0.9;
        }

        .category-box {
            height: 200px;
            border-radius: 15px;
            position: relative;
            color: #fff;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            
            font-size: 26px;
            font-weight: 700;
            text-transform: uppercase;
            
            cursor: pointer;
            transition: 0.4s ease;
        }

        .category-box:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .category-box h4 {
            position: relative;
            z-index: 2;
            color: #fff;
            margin: 0;
        }

        .category-box .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.35);
            transition: 0.4s ease;
        }

        .category-box:hover .overlay {
            background: rgba(0,0,0,0.15);
        }

        .bg1 { background: url('media/cate1.jpg') center/cover no-repeat; }
        .bg2 { background: url('media/cate2.jpg') center/cover no-repeat; }
        .bg3 { background: url('media/cate3.jpg') center/cover no-repeat; }

        .book-card {
            background: #fff;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: 0.2s ease;
            text-align: center;

            height: 430px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .book-card img {
            width: 100%;
            height: 330px;
            object-fit: cover;
            border-radius: 8px;
        }

        .book-card h5 {
            margin-top: 12px;
            font-size: 17px;
            height: 22px;
            overflow: hidden;
        }

        .book-card .price {
            margin-top: 0;
            margin-bottom: 0;
            font-weight: 600;
            color: #4A90E2;
        }
    </style>

    <div class="container">
        <div class="hero">
            <div>
                <h1>Welcome to BookShop</h1>
                <p>Your journey begins with a single book.</p>
            </div>
        </div>

        <h3 class="mb-4">Categories</h3>
        <div class="row mb-5">

            <div class="col-md-4">
                <div class="category-box bg1">
                    <div class="overlay"></div>
                    <h4>Fiction</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-box bg2">
                    <div class="overlay"></div>
                    <h4>Education</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-box bg3">
                    <div class="overlay"></div>
                    <h4>Self-Help</h4>
                </div>
            </div>

        </div>

        <h3 class="mb-4">Featured Books</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="book-card">
                    <img src="media/book1.jpg">
                    <h5>The Silent World</h5>
                    <p class="price">$12.89</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="book-card">
                    <img src="media/book2.jpg">
                    <h5>Space Odyssey</h5>
                    <p class="price">$15.49</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="book-card">
                    <img src="media/book3.png">
                    <h5>Atomic Habits</h5>
                    <p class="price">$10.79</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="book-card">
                    <img src="media/book4.jpg">
                    <h5>Deep Work</h5>
                    <p class="price">$11.99</p>
                </div>
            </div>
        </div>

    </div>

<?php include('template/footer.php'); ?>
