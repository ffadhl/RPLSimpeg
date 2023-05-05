<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
</head>

<body>

    <body>
        <div class="center">
            <h1 class="navbar-brand" href="/"><img src="{{ asset('logo1.png') }}" width="auto" height="150"
                    alt="">
                <p style="font-weight: bold"> Register </p>
            </h1>
            <form action="/sesi/create" method="POST">
                @csrf
                <div class="txt_field">
                    <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control">
                    <span></span>
                    <label for="name" class="from-label">Name</label>
                </div>
                <div class="txt_field">
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                    <span></span>
                    <label for="email" class="from-label">Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" class="form-control">
                    <span></span>
                    <label for="password" class="from-label">Password</label>
                </div>
                <input type="submit" value="Register">
                <div class="signup_link">
                    Have Account? <a href="/sesi">Login</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>
</body>

</html>
