@extends('layouts.app')

@section('title', 'User Registration')

@section('Maincontent')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
     <div class="page-title">
     <h2>Create an Account</h2>
  </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>


<!-- BEGIN Main Container -->

       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">
	       <div class="main">
           <div class="account-login container">
  <!--page-title-->

        <form action="{{ route('register') }}" method="POST" >
            @csrf
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset class="col2-set">
            <div class="col-1 new-users">
                  <strong>New Customers</strong>
                <div class="content">

                    <p>By creating an account with our car rental app, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                     <div class="buttons-set">
                    {{--  <button type="button" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>  --}}
                </div>
                </div>
                <div class="content">

                    <p>By creating an account with our car rental app, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                     <div class="buttons-set">
                    {{--  <button type="button" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>  --}}
                </div>
                </div>
            </div>
            <div class="col-2 registered-users">
             <strong>Create an Account</strong>
                <div class="content">
                    <ul class="form-list">
                        <li>
                             <label for="name">Your Name<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="name" value="{{ old('name') }}" id="name" class="input-text required-entry validate-email {{ $errors->has('name') ? 'is-invalid' : '' }}" title="Your's Name">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </li>
                        <li>
                            <label for="email">Email Address<em class="required">*</em></label>
                           <div class="input-box">
                               <input type="text" name="email" value="{{ old('email') }}" class="input-text required-entry validate-email {{ $errors->has('email') ? 'is-invalid' : '' }}" title="Email Address">
                               @if ($errors->has('email'))
                               <span class="invalid-feedback">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                            </div>
                       </li>
                        <li>
                            <label for="pass">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" class="input-text required-entry validate-password {{ $errors->has('password') ? 'is-invalid' : '' }}" title="Password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </li>
                        <li>
                            <label for="pass">Confirm Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password_confirmation" class="input-text required-entry validate-password" title="Confirm Password">
                            </div>
                        </li>
                        </ul>
                    <div class="remember-me-popup">
    <div class="remember-me-popup-head" style="display:none">
        <h3 id="text2">What's this?</h3>
        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
    </div>
    <div class="remember-me-popup-body" style="display:none">
        <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right">
            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
            showDiv()"><span>Close</span></a>
        </div>
    </div>
</div>

<div class="buttons-set">
    <button type="submit" class="button login" title="Login" name="send" id="send2"><span>SignUP</span></button>
        </div> <!--buttons-set-->
        </div> <!--content-->
        </div> <!--col-2 registered-users-->
    </fieldset> <!--col2-set-->
    </form>

</div> <!--account-login-->
</div><!--main-container-->
</div>

@endsection
