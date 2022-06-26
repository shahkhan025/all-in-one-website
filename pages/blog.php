<?php include 'header.php'?>

<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row" align="center"><?php foreach ($blogs as $blog){ ?>
                <div class="col-md-3 mb-4">
                    <div class="card bg-secondary">
                        <div class="card-header">
                            <img src="assets/images/<?php echo $blog['image'];?>" class="h-200" width="200" alt=""/>
                        </div>
                        <div class="card-body text-center">
                            <h2>Name: <?php echo $blog['name']?></h2>
                            <h4>Author:  <?php echo $blog['author']?></h4>
                            <hr/>
                            <h6>Content:  <?php echo $blog['content']?></h6>
                        </div>
                        <a href="action.php?page=rm_btn&&id=<?php echo $blog['id']?> " class="btn btn-secondary">Read More Blog</a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
