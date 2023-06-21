
@include('header')
<section class="section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View Police</h4>
                    <div class="card-header-form">
                   
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="text-center" >Sl.No.</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Place</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Delete</th>
                        </tr>
                        @php  $i=1; @endphp
                        @foreach($police as $police)
                        <tr>
                            <td class="text-center" >  @php echo $i; $i++; @endphp </td>
                            <td> 
                            @php App\Http\Controllers\HomeController::getUsername($login,$police->login_id) @endphp
                            </td>
                            <td> {{$police->fname}} {{$police->lname}} </td>
                            <td> {{$police->place}}  </td>
                            <td> {{$police->phone}}  </td>
                            <td> {{$police->email}}  </td>
                            <td><a href="/delete_police/{{$police->police_id}}" class="btn btn-primary">Delete</a></td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</section>
@include('footer') 