@extends('layouts/app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <h1>Sign Up To Notifications For Deals</h1>
                <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstnameinput">First Name</label>
                      <input type="text" name="fname" class="form-control" id="firstnameinput" placeholder="John">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastnameinput">Last Name</label>
                      <input type="lname" name="phone" class="form-control" id="lastnameinput" placeholder="Doe">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="emailinput">Email address</label>
                      <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phoneinput">Phone #</label>
                      <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="718-219-8652">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p>In signing up I acknowledge that I am 18 years of age or older, want to receive email offers from Billy's Burgers and, if I select to join Dine Rewards, agree to the terms and conditions of the program.</p>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>    
                  </div>
                </div>
                </form>
              </div>
            </div>
        </div>
    </div>
@endsection