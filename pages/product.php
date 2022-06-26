<?php include 'header.php' ?>
<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="py-5 bg-calc-color">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
                <div class="col-md-3">
                    <div class="card bg-secondary">
                        <img src="assets/images/<?php echo $product['image'];?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h3><?php echo $product['name'];?></h3>
                            <h5><?php echo $product['price'];?></h5>
                            <hr/>
                            <p><?php echo $product['description'];?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id'];?> " class="btn btn-outline-warning text-dark form-control">Details & Order</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-12 text-center h-200 py-5">
        <h3 class="display-4 text-white-50">Welcome To U2S World</h3>
    </div>
</section>

<?php include 'footer.php' ?>
