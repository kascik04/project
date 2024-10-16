<?php include('../head.php')?>
<?php include_once('../header-style.php')?>
<section class="pt-3">
    <div class="container">
        <div class="row g-2 g-lg-4">

            <?php include_once('./tab-info.php')?>
            <!-- Sidebar END -->

            <!-- Main content START -->
            <div class="col-lg-8 col-xl-9">
                <!-- Offcanvas menu button -->
                <div class="d-grid mb-0 d-lg-none w-100">
                    <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <i class="fas fa-sliders-h"></i> Menu
                    </button>
                </div>

                <!-- Card START -->
                <div class="card border">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h4 class="card-header-title">Delete Account</h4>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <h6>Before you go...</h6>
                        <ul>
                            <li>Take a backup of your data <a href="#">Here</a> </li>
                            <li>If you delete your account, you will lose your all data.</li>
                        </ul>
                        <div class="form-check form-check-md my-4">
                            <input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
                            <label class="form-check-label" for="deleteaccountCheck">Yes, I'd like to delete my
                                account</label>
                        </div>
                        <a href="#" class="btn btn-success-soft btn-sm mb-2 mb-sm-0">Keep my account</a>
                        <a href="#" class="btn btn-danger btn-sm mb-0">Delete my account</a>
                    </div>
                    <!-- Card body END -->
                </div>
                <!-- Card END -->
            </div>
            <!-- Main content END -->
        </div>
    </div>
</section>

<section class="bg-dark pt-5">
    <?php include('../footer-private.php')?>
</section>
<div class="back-top "></div>
</body>

</html>