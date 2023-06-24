
@include('header')


<section class="section">

  <div class="row " style="text-align:center;">
   
            <div class="col-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="card-content" >
                          <h5 class="font-15" > Threats Detected</h5>
                          <h2 class="mb-3 font-18 col-black">{{$threat_count}}</h2>
                          
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="card-content">
                          <h5 class="font-15"> Forwarded to Police</h5>
                          <h2 class="mb-3 font-18 col-red"> {{$forwarded_count}}</h2>
                       
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="card-content">
                          <h5 class="font-15"> False Positive</h5>
                          <h2 class="mb-3 font-18 col-green">{{$false_count}}</h2>
                       
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="card-content">
                          <h5 class="font-15"> Pending Cases</h5>
                          <h2 class="mb-3 font-18 col-orange">{{$pending_count}}</h2>
                       
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="card-content">
                          <h5 class="font-15"> Resolved Cases</h5>
                          <h2 class="mb-3 font-18 col-blue">{{$resolved_count}}</h2>
                       
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>
              


  <style>
    .mb-3, .my-3 {
    margin-top: 1rem !important;
    }
  </style>


</section>
@include('footer') 