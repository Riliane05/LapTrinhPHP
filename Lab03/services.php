<?php include('template/head.php'); ?>
<?php include('template/header.php'); ?>

<style>
/* ==== BACKGROUND ==== */
body {
    background: url('media/background.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* ==== WRAPPER ==== */
.services-container {
    max-width: 1000px;
    margin: 80px auto;
    padding: 40px 45px;

    background: rgba(0, 0, 0, 0.25);
    backdrop-filter: blur(40px);
    -webkit-backdrop-filter: blur(20px);

    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;

    box-shadow: 0 8px 30px rgba(0,0,0,0.25);
}

/* ==== TITLE BOXES ==== */
.title-box {
    display: inline-block;
    padding: 8px 18px;
    border: 2px solid #fff;
    border-radius: 10px;
    margin-bottom: 20px;
}

.subtitle-box {
    display: inline-block;
    padding: 6px 16px;
    border: 2px solid #fff;
    border-radius: 10px;
    margin-bottom: 15px;
}

/* ==== SERVICE CARD ==== */
.service-card {
    background: rgba(255, 255, 255, 0.5);
    border-radius: 12px;
    padding: 25px;
    height: 100%;
    border: 1px solid rgba(255,255,255,0.2);
    transition: 0.3s ease;
}

.service-card:hover {
    background: rgba(255, 255, 255, 0.75);
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.35);
}

.service-card h4 {
    color: #4A90E2;
    margin-bottom: 15px;
    font-weight: 700;
}

.service-card p {
    font-size: 16px;
    line-height: 1.7;
}

.service-icon {
    font-size: 40px;
    margin-bottom: 12px;
    color: #4A90E2;
}
</style>


<div class="services-container">

    <h1><span class="title-box">Our Services</span></h1>
    <p>We provide a variety of services to help you discover, enjoy, and learn through books.</p>

    <h2><span class="subtitle-box">What We Provide</span></h2>

    <div class="row mt-4">

        <!-- SERVICE 1 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">📚</div>
                <h4>Book Collections</h4>
                <p>
                    Discover thousands of books from multiple genres, carefully curated
                    to bring you the best reading experience.
                </p>
            </div>
        </div>

        <!-- SERVICE 2 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">🚚</div>
                <h4>Fast Delivery</h4>
                <p>
                    Your orders are delivered quickly and securely, ensuring your books
                    arrive in perfect condition.
                </p>
            </div>
        </div>

        <!-- SERVICE 3 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">⭐</div>
                <h4>Book Reviews</h4>
                <p>
                    Read detailed reviews from our community to help you decide which
                    books are worth reading next.
                </p>
            </div>
        </div>

        <!-- SERVICE 4 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">🎁</div>
                <h4>Gift Packaging</h4>
                <p>
                    Sending books as a gift? We offer beautiful gift-wrapping
                    services to make your present extra special.
                </p>
            </div>
        </div>

        <!-- SERVICE 5 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">🛒</div>
                <h4>Online Shopping</h4>
                <p>
                    Enjoy a seamless shopping experience with our intuitive and
                    user-friendly online bookstore interface.
                </p>
            </div>
        </div>

        <!-- SERVICE 6 -->
        <div class="col-md-4 mb-4">
            <div class="service-card text-center">
                <div class="service-icon">🎓</div>
                <h4>Learning Resources</h4>
                <p>
                    Access study materials, educational books, and professional 
                    development resources to support your learning journey.
                </p>
            </div>
        </div>
    </div>

</div>

<?php include('template/footer.php'); ?>
