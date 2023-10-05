
<div id="primary" class="content-area">
    <div id="title" class="page-title">
        <div class="section-container">
            <div class="content-title-heading">
                <h1 class="text-title-heading">
                    Register
                </h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{route('homepage')}}">Home</a><span class="delimiter"></span>Register
            </div>
        </div>
    </div>
    <div id="content" class="site-content" role="main">
        <div class="section-padding">
            <div class="section-container p-l-r">
                <div class="page-login-register">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12" style="margin: auto;">
                            <div class="box-form-login">
                                <h2 class="register">Register</h2>
                                <div class="box-content">
                                    <div class="form-register">
                                        <form method="POST" class="register" action="{{route('register')}}">
                                            @csrf

                                            <div class="email">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" class="input-text @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="email">
                                                <label>Username <span class="required">*</span></label>
                                                <input type="text" class="input-text @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}">
                                            
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="email">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" class="input-text @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                                            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="password">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" class="input-text" name="password" id="password">
                                            </div>
                                            <div class="password">
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input type="password" class="input-text @error('password') is-invalid @enderror" name="password_confirmation" id="password-confirm">
                                            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="button-register">
                                                <input type="submit" class="button" value="{{ __('Register') }}">
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