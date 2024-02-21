<x-main>
    <title>Welcome to Contacts</title>
    <div class="login-card">
        <div class="card">
            <div class="card-inner">
                <div class="center mgb-4">
                    <div class="circle">
                        <p class="darkBtn"><span class="fas fa-sun fa-2x"></span></p>
                        <p class="lightBtn"><span class="fas fa-moon fa-2x"></span></p>
                    </div>
                </div>
                <img src="{{asset('images/logo.png')}}" class="card-logo"/>
                <h2 class="text-center primary-text bold mgt-3 mgb-1">Contacts App</h2>
                <p class="text-center sub-text mgt-0 mgb-1">Lets help you safely store all contacts</p>
                <div class="center">
                    <hr>
                    <div class="mgt-2">
                        <h4 class="bold">LOGIN</h4>
                    </div>
                </div>
                <form id="loginForm" method="POST" style="padding: 0 .75rem">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" value="{{old('username')}}" autocomplete="username" class="form-input" name="username" id="username" />
                        @error('username')
                        <p class="error-text">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" value="{{old('password')}}" autocomplete="current-password" class="form-input" name="password" id="password" />
                        <span onclick="showpass('password', 'showpass')" id="showpass" class="showhidebtn" title="Toggle show/hide password">
                            <i class="far fa-eye-slash eye-off"></i>
                        </span>
                        @error('password')
                        <p class="error-text">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="center">
                        <button class="button button-primary">LOGIN</button>
                    </div>
                </form>
                <div class="mgt-3 text-center">
                    <p class="">Forgot password? Click <a href="/forgot">here</a></p>
                    <p class="mgt-3"><a href="/signup"><span class="bold">Register</span></a></p>
                </div>
            </div>
        </div>
    </div>
</x-main>
<script>
    $("form#loginForm").submit(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: '/users/login',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $(".flash-wrapper").fadeIn();
                $('.flash-message').html("Please wait... <span class='fas fa-1x fa-spinner fa-spin'></span>");
            },
            success: function(data) {
                var res = $.parseJSON(data);
                if (res.status == "success") {
                    $(".flash-wrapper").fadeIn();
                    $(".flash-message").html(res.response);
                    setTimeout(' window.location.href = "/dashboard"; ', 3000);
                    setTimeout(function() {
                        $(".flash-wrapper").fadeOut();
                    }, 10000);
                } else {
                    $(".flash-wrapper").fadeIn();
                    $(".flash-message").html(res.response);
                    setTimeout(function() {
                        $(".flash-wrapper").fadeOut();
                    }, 10000);
                }
            },
            cache: false,
            error: function() {
                $(".flash-wrapper").fadeIn();
                $('.flash-message').html("An error has occured!!");
                setTimeout(function() {
                    $(".flash-wrapper").fadeOut();
                }, 10000);
            },
            contentType: false,
            processData: false
        });
    });
</script>