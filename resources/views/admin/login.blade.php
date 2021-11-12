<!doctype html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/backend/img1/lock-login.png" sizes="16x16" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/backend/login1/css/style.css">

    <style>
        .ftco-section {
            padding: 4em 0;
        }
    </style>
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section"><img src="/backend/img1/logo-color.png" width="30%"></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                @if ($errors->any())
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <form action="{{ route('admin.postLogin') }}" method="POST" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="email" class="form-control rounded-left" placeholder="Email">
                        </div>
                        <div class="form-group d-flex">
                            <input name="password" type="password" class="form-control rounded-left" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Đăng nhập</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Nhớ Mật Khẩu
                                    <input type="checkbox" name="remember" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/backend/login1/js/jquery.min.js"></script>
<script src="/backend/login1/js/popper.js"></script>
<script src="/backend/login1/js/bootstrap.min.js"></script>
<script src="/backend/login1/js/main.js"></script>
<script>
    $(document).ready(function() {
        // show the alert
        $(".alert").first().hide().slideDown(600).delay(5000).slideUp(600, function () {
            $(this).remove();
        });
    });

</script>

</body>
</html>

