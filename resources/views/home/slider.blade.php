


<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliderdata as $rs)
            <div class="carousel-item">
                <img class="w-100" src="{{Storage::url($rs->image)}}" style="height: 800px;width: 1366px" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">{{$rs->title}}</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In Town</h2>
                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                </div>
            </div>
            @endforeach
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets')}}img/carousel-2.jpg" style="height: 800px;width: 1366px" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">Gym &amp; Fitness Center</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In Shape</h2>
                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>


<!-- Carousel End -->
