
@include('header')

<section class="section">
            <h2 class="section-title" style="margin-top:0;">Threat Detected</h2>
      

            <div class="row  justify-content-around">
            
            @foreach($threat as $threat)

                <div class="card col-5 ">
                  <div class="card-header">
                    <h4>Threat Number: {{$threat->id}}</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-2 text-muted">Click the picture below to see the image!</div>
                    <div class="chocolat-parent">
                      <a href="" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="/../{{$threat->file_location}}" class="img-fluid">
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

            @endforeach
            </div>
              
</section>

<img alt="image" src="{{asset('/../../static/video/5a978222-d3f1-4168-878e-9808ed24d801.png')}}" class="img-fluid">



@include('footer') 