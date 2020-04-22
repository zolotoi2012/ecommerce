@section('gallery')
    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid" style="margin-bottom: 35px;">
                <div class="row">
                    <div class="gallery-items">
                        <img src="{{ asset('assets/img/gallery/gallery1.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('assets/img/gallery/gallery2.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('assets/img/gallery/gallery3.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('assets/img/gallery/gallery4.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('assets/img/gallery/gallery5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@yield('gallery')