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
                <form class="" style="padding: 0 .75rem">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" autocomplete="username" class="form-input" name="username" id="username" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" autocomplete="current-password" class="form-input" name="password" id="password" />
                        <span onclick="showpass('password', 'showpass')" id="showpass" class="showhidebtn" title="Toggle show/hide password">
                            <i class="far fa-eye-slash eye-off"></i>
                        </span>
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