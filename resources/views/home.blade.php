@extends('base')
    @section('content')
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/welcome.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Web pencari barang hilang.</h1>
                <p class="lead">Siapa yang tidak sedih saat barang berharga yang kita miliki hilang begitu saja. Sudah berusaha mencarinya, tetap saja barang tersebut tidak ketemu. Kita sampai kelelahan mencarinya, barang itu belum juga kita temukan. Jika mengalami hal tersebut, jangan bersedih. Arcari akan mencoba membantumu.</p>
            </div>
            </div>
        </div>
        <section>
          <div class="px-4">
            <h3>Barang hilang</h3> 
          </div>
          <div class="container mt-5 px-4">
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                  @foreach ($data as $item)
                  <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$item['location']}}</div>
                        <img class="card-img-top" src="{{$item['photo']}}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{$item['name']}}</h5>
                                <span class="text-muted"> {{$item['created_at']}}</span>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lihat Detail</a></div>
                        </div>
                    </div>
                    </div>
                  @endforeach
              </div>
          </div>
      </section>
    @endsection