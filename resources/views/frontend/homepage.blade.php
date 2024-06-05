@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Rental Mobil - Laravel</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
</head>

<body>
  <!-- Navigation-->
  <!-- Header-->
  <header class="outer-header py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
        <p class="lead fw-normal text-white-50 mb-0">
          hanya dengan satu sentuhan
        </p>
      </div>
    </div>
  </header>
  <div class="outer-searchbar d-flex justify-content-center">
    <div class="searchbar mx-auto rounded-3">
        <div class="inner-searchbar mt-4 container">
          <div class="search-bar">
            <input type="text" class="search-input" placeholder="Lokasi Rental Anda">
            <button class="search-button">Search</button>
          </div>

          <div class="filter-options">
            <button class="filter-option">Tanggal Mulai</button>
            <button class="filter-option">Waktu Mulai</button>
            <button class="filter-option">Tanggal Selesai</button>
            <button class="filter-option">Waktu Selesai</button>
          </div>
        </div>
      
    </div>
  </div>

  </div>
  </div>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <h3 class="text-center mb-5">Daftar Mobil</h3>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-warning text-white position-absolute" style="top: 0; right: 0">
              Tidak Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202101/The_new_Fortuner_0_1200x768.png?vrt1xOHQoWhGPJtI4pJEp_AZgT2moIJe&size=770:433" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.gQKJWlU41ohUdXWjiDvUtQHaEK?rs=1&pid=ImgDetMain" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
              Tersedia
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="https://megatransgroup.id/wp-content/uploads/2020/12/jeep-wrangler-rubicon-jakarta.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.200.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Bahan bakar</span>
                    <span style="font-weight: 600">Bensin</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Jumlah Kursi</span>
                    <span style="font-weight: 600">5</span>
                  </li>
                  <li class="border-bottom p-2 d-flex justify-content-between">
                    <span>Transmisi</span>
                    <span style="font-weight: 600">Manual</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a class="btn btn-info mt-auto text-white" href="{{ route('detail') }}">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </section>

  
  @endsection
  <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
</html>