<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Region Additional Configurations --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('css/Auth/Login.css') }}" />

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- End Region Additional Configurations --}}

    <title>Register</title>
</head>
<body>
    <div class="form-signin">
        <form>
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            <h1 class="h3 mb-3 fw-normal">Register</h1>
        
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Jane Doe">
                <label for="floatingName">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="jdoe@example.com">
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <div class="checkbox mb-3 mt-3">
                {{-- <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label> --}}
                <span class="fw-light">Already have an account? <a href="/login">Login Here!</a></span>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
            <p class="mt-0 mb-0 text-muted text-center">OR</p>
            <a class="w-100 btn btn-lg btn-primary" href="/api/auth/google/redirect">Register with Google</a>
        </form>
    </div>
</body>
</html>