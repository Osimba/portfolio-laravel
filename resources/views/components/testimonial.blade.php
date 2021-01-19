<div id="testimonial-{{ $num }}" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="1"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="2"></li>
        <li data-bs-target="#testimonial-{{ $num }}" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ $image1 }}" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="{{ $image2 }}" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="{{ $image3 }}" class="d-block w-100" alt="Image 3">
        </div>
        <div class="carousel-item">
            <img src="{{ $image4 }}" class="d-block w-100" alt="Image 4">
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