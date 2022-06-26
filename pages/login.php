<?php include 'header.php'; ?>

<?php if (isset($_SESSION['id'])){
    header('Location: action.php?page=home');
} ?>
    <section class="py-5 bg-secondary loginHgt">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card loginBg">
                        <div class="card-header text-center"><p class="text-success">Already Have An Account?</p><h5>LOGIN HERE</h5></div>
                        <div class="card-body">
                            <p class="text-center text-danger"><?php echo isset($message) ? $message :'' ?></p>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Enter Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Enter Password:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success form-control" name="loginBtn"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer text-center"><p class="text-danger">Don't have Account?:</p> <a href="">Register Here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
