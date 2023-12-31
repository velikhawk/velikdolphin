<?= $this->extend('layout/template_login'); ?>
<?= $this->section('content_login'); ?>

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <img class="col-lg-5 d-none d-lg-block " src="img/login.jpg"></i>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Registrasi User Baru</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                        </div>
                        <a href="/login" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="#">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>