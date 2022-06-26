<?php include 'header.php'?>

<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                    <img src="assets/images/<?php echo $singleBlog['image']; ?> " width="230" height="300" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body bg-secondary">
                    <h1>Blog Name:<?php echo $singleBlog['name'];?></h1
                    <h3>Blog Author:<?php echo $singleBlog['author'];?></h3>
                    <br/>
                    <hr/>
                    <hr/>
                    <p>Description:<?php echo $singleBlog['fullContent'];?></p>
                    <a href="" class="btn btn-outline-secondary">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
