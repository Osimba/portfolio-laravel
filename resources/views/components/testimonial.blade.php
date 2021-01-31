<div id="testimonial-{{ $num }}" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="1"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="2"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ $image1 }}" class="d-none d-sm-block w-100" alt="Image 1">
            <div class="d-sm-none p-5">
                <span>"Very conscientious worker. Very fair with billing hours and not overcharging. Competent on items I needed."</span>
                <br>
                <span>- Upwork Client</span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ $image2 }}" class="d-none d-sm-block w-100" alt="Image 2">
            <div class="d-sm-none p-5">
                <span>"Very knowledgeable  in Javascript programming and HTML."</span>
                <br>
                <span>- Upwork Client</span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ $image3 }}" class="d-none d-sm-block w-100" alt="Image 3">
            <div class="d-sm-none p-5">
                <span>"Osei Quashie was one of the best freelancers that I have ever hired on Upwork and I have hired a lot of freelancers. From my experience, most..."</span>
                <br>
                <span>- Upwork Client</span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ $image4 }}" class="d-none d-sm-block w-100" alt="Image 4">
            <div class="d-sm-none p-5">
                <span>"Osei was easy to work with and did a nice job. He worked with me through a couple of iterations of the web page until we got it how we wanted."</span>
                <br>
                <span>- Upwork Client</span>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#testimonial-{{ $num }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonial-{{ $num }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>