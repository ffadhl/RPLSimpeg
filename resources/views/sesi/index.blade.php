<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Kepegawaian Rosati Hospital</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"
        integrity="sha256-CfQXwuZDtzbBnpa5nhZmga8QAumxkrhOToWweU52T38=" crossorigin="anonymous"></script>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="/sesi/create" method="POST" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="{{ asset('logologin.png') }}" height="auto" width="auto"
                                alt="Rosati Hospital" />
                            <h4>Rosati Hospital</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="/sesi" class="toggle">Sign in</a>
                        </div>
                        @csrf
                        <div class="actual-form">
                            <div class="txt_field">
                                <input type="name" minlength="4" class="input-field" autocomplete="off"
                                    value="{{ Session::get('name') }}" name="name" class="form-control" required />
                                <label for="name" class="from-label">Name</label>
                            </div>

                            <div class="txt_field">
                                <input type="email" minlength="4" class="input-field" autocomplete="off"
                                    value="{{ Session::get('email') }}" name="email" class="form-control" required />
                                <label for="email" class="from-label">Email</label>
                            </div>

                            <div class="txt_field">
                                <input type="password" minlength="4" class="input-field" autocomplete="off"
                                    name="password" class="form-control" required />
                                <label for="password" class="from-label">Password</label>
                            </div>

                            <input type="submit" value="Register" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="{{ asset('slide1.png') }}" class="image img-1 show" alt="" />
                        <img src="{{ asset('slide2.png') }}" class="image img-2" alt="" />
                        <img src="{{ asset('slide3.png') }}" class="image img-3" alt="" />
                        <img src="{{ asset('slide4.png') }}" class="image img-4" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2></h2>
                                <h2></h2>
                                <h2></h2>
                                <h2></h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                            <span data-value="4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>