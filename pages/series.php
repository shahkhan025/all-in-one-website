<?php include 'header.php'; ?>

<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card seriesBg">
                    <div class="card-header text-center bg-chocolateWhite"><h3 class="display-5">This Is A Series</h3> </div>
                    <!--                            <div class="card-body">-->
                    <div class="card-body">

                        <div class="row me-0">
                            <div class="col-lg-9 mx-auto">
                                <form action="action.php" method="post">

                                    <div class="row mb-3">
                                        <label class="col-md-3">Starting Number:</label>
                                        <div class="col-md-9">
                                            <input type="number" name="starting_number" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3">Ending Number:</label>
                                        <div class="col-md-9">
                                            <input type="number" name="ending_number" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3">RESULT:</label>
                                        <div class="col-md-9">
                                            <!--                                            <input type="text" value="" class="form-control"/>-->
                                            <textarea class="form-control" name=""><?php echo $result;?></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-outline-secondary text-dark btn-lg form-control" name="series_btn">
                                    <input type="reset" class="btn btn-info btn-lg mt-2" name="reset_btn">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center h-200 py-5">
        <h3 class="display-4 text-white-50">Welcome To U2S World</h3>
    </div>
</section>

<?php include 'footer.php'; ?>


