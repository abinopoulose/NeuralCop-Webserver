
@include('header')
<section class="section">
         
<form method="POST" action="new_security">
@csrf
<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Security Officers</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="fname" class="form-control">
                      </div>
                    </div>
                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="lname" class="form-control">
                      </div>
                    </div>
                 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Place</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="place" class="form-control">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="tel" name="phno" class="form-control">
                      </div>
                    </div>
                   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" name="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="username" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Add</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
</form>

</section>
@include('footer') 