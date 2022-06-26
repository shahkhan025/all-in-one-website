<?php include 'header.php'; ?>

<?php if (!isset($_SESSION['id'])){
   header('Location: action.php?page=login');
} ?>

<section>
    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1900">
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#carousel" data-bs-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/images/banner_1.jpg" alt="" class="w-100 h-500">
                <div class="carousel-caption text-white-50">
                    <h2>BISMILLAH-ALHAMDULILLAH</h2>
                    <a href="" class="btn btn-outline-warning">REGISTER HERE</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/images/banner_2.jpg" alt="" class="w-100 h-500"/>
                <div class="carousel-caption text-white-50">
                    <h2>BISMILLAH-SUBHANALLAH</h2>
                    <a href="" class="btn btn-outline-primary">REGISTER HERE</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/images/banner_3.jpg" alt="" class="w-100 h-500"/>
                <div class="carousel-caption text-white-50">
                    <h2>BISMILLAH-ALLAHUAKBAR</h2>
                    <a href="" class="btn btn-outline-danger">REGISTER HERE</a>
                </div>
            </div>

        </div>
        <a href="#carousel" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#carousel" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<section class="py-5 bg-secondary">
    <div class="text-center text-white-50"><h4 class="display-5">OUR SERVICES</h4></div>
</section>

<?php include 'footer.php'; ?>