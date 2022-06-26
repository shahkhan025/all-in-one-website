<?php include 'header.php'; ?>

<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="bg-calc-color bg-secondary py-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-7 mx-auto calcBg">
                <div class="card border-0 bg-secondary">

                    <div class="card-header text-white text-center mb-3"><h4>CALCULATOR</h4></div>
                    <div class="card-body">
                    <form action="action.php" method="post" class="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="" class="">Enter First Number</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="first_number" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="" class="">Enter Second Number</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="second_number" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="" class="">Showing Result</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="result" class="form-control" value="<?php echo $result; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="action" class="form-label">Choose Action</label>
                            </div>
                            <div class="col-md-8">
                                <label><input type="radio" name="action" value="+"/> Addition</label>
                                <label><input type="radio" name="action" value="-"/> Subtraction</label>
                                <label><input type="radio" name="action" value="*"/> multiplication</label>
                                <label><input type="radio" name="action" value="/"/> Division</label>
                                <label><input type="radio" name="action" value="%"/> Reminder</label>
                            </div>
                        </div>
                        <input type="submit" name="btn_calc" class="btn btn-outline-warning form-label form-control text-white" value="Calculate" >

                    </form>
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
