
<div id="primary" class="content-area">
    <div id="title" class="page-title">
        <div class="section-container">
            <div class="content-title-heading">
                <h1 class="text-title-heading">
                    Login
                </h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{route('homepage')}}">Home</a><span class="delimiter"></span>Login
            </div>
        </div>
    </div>
    <div id="content" class="site-content" role="main">
        <div class="section-padding">
            <div class="section-container p-l-r">
                <div class="page-login-register">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 sm-m-b-50" style="margin: auto;">
                            <div class="box-form-login">
                                <h2>Login</h2>
                                <div class="box-content">
                                    <div class="form-login">
                                        <form method="POST" class="login" action="{{route('login')}}">
                                            @csrf

                                            <div class="username">
                                                <label>Username <span class="required">*</span></label>
                                                <input type="text" class="input-text @error('username') is-invalid @enderror" name="username" id="username">

                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="password">
                                                <label for="password">Password <span class="required">*</span></label>
                                                <input class="input-text @error('password') is-invalid @enderror" type="password" name="password" id="password">
                                            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="rememberme-lost">
                                                <div class="remember-me">
                                                    <input name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="inline" for="remember">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                            <div class="button-login">
                                                <input type="submit" class="button" value="{{ __('Login') }}"> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
