
@include('header')

<section class="section" style="margin-top=-200px;">
         

            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header row  justify-content-around">
                    <h4 class="card-title" style="color:red;">Forwarded Threats</h4>
                  </div>
                
                </div>
              </div>
            </div>




            <div class="row  justify-content-around">
            
            @foreach($threat as $threat)

                <div class="card col-5 ">
                  <div class="card-header">
                    <h4>Threat ID: {{$threat->id}}</h4>
                    <div class="card-header-action">
                        <a target="_blank"href="https://www.google.com/maps/search/?api=1&query={{$threat->longitude}}%2C{{$threat->latitude}}" class="btn btn-danger">
                            Location<svg style="height: 10px;width: 10px;" viewBox="0 0 16 16">
                            <polygon fill="currentColor" points="5 4.31 5 5.69 9.33 5.69 2.51 12.51 3.49 13.49 10.31 6.67 10.31 11 11.69 11 11.69 4.31 5 4.31" data-v-22ee7e7c="">
                            </polygon>
                            </svg>
                        </a>
                    </div>
                  </div>
                  <div class="card-body">
                   
                    <div class="chocolat-parent">
                        <div data-crop-image="265">
                          <img alt="image" src="{{asset($threat->file_location)}}" class="img-fluid">
                        </div>
                    </div>
                    <div >
                    <div class="card-header-action row justify-content-around">
                    <a href="#" class="btn btn-danger" style="width:100%;">
                            Status: Forwarded to Police
                        </a>
                    </div>
                    </div>
                  </div>

                 
                </div>

            @endforeach
            </div>
           
              
</section>



@include('footer') 