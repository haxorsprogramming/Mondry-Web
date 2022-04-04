@include('layout.headerAuth')

<body class="h-100">
    <div class="authincation h-100" id="divAppAuth">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html">
                                            <img src="https://s3.jagoanstorage.com/aditia-storage/asset/logo/mondry_logo.png" alt="" style="width: 200px;border-radius:12px;">
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <div class="form-group">
                                        <label class="mb-1 text-white"><strong>Email</strong></label>
                                        <input type="text" class="form-control" id="txtUsername" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 text-white"><strong>Password</strong></label>
                                        <input type="password" class="form-control" id="txtPassword" placeholder="Password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox ml-1 text-white">
                                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div style="margin-top:20px;margin-bottom:20px;display:none;" id="divAuthStatus">
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            <strong>@{{ titleErrorAuth }}</strong> @{{ textError }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn bg-white text-primary btn-block" @click="loginAtc()">Sign Me In</a>
                                    </div>

                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footerAuth')