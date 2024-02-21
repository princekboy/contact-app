<x-main>
    <title>Register | Contacts</title>
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
                        <h4 class="bold">REGISTER</h4>
                    </div>
                </div>
                <form class="register" method="POST" action="/users/register" style="padding: 0 .75rem">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" value="{{old('username')}}" autocomplete="username" class="form-input" name="username" id="username" />
                        @error('username')
                        <p class="error-text">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" value="{{old('email')}}" autocomplete="email" class="form-input" name="email" id="email" />
                        @error('email')
                        <p class="error-text">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" value="{{old('phone')}}" autocomplete="phone" class="form-input" name="phone" id="phone" />
                        @error('phone')
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
                        <button class="button button-primary">REGISTER</button>
                    </div>
                </form>
                <div class="mgt-3 text-center">
                    <p class="mgt-3">Already registered? <a href="/"><span class="bold">Log in</span></a></p>
                </div>
            </div>
        </div>
    </div>
</x-main>