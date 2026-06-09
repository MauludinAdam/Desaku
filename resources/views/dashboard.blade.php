@extends('layout.template')

@section('content')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-5">
                <div class="card p-3" style="background:background: #2A7B9B;
                    background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 74%, rgba(237, 221, 83, 1) 100%);">
                    <div class="icon" style="font-size: 1.5rem;">
                        <i class="ti ti-trash p-2 rounded-circle text-white" style="background: #FF7F50;"></i>
                    </div>
                    <p class="mt-3 fw-bold" style="color: #7FFF00">--Bantuan Sosial</p>
                    <h4 class="text-white" style="font-weight: 600">Dari Desa Untuk Warga ❤️</h4>
                    <p class="text-white">Wujudkan kesejahteraan desa dengan bantuan sosial yang tepat sasaran</p>
                    <div class="card mt-3">
                        <div class="d-flex justify-content-between p-2">
                            <p class="text-black fw-bold">Bikin Bantuan Sosial</p>
                            <i class="ti ti-square-plus text-black" style="font-size: 1.5rem"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card p-3" style="border: 1px solid #7FFF00">
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">Jumlah Penduduk</p>
                                <i class="ti ti-users fw-bold" style="color: #7FFF00; font-size:1.3rem"></i>
                            </div>
                            <h5 style="font-weight: 800">93</h5>
                            <p><i class="ti ti-pencil bg-dark text-white rounded" style="padding: 2px"></i> +12% dari bulan sebelumnya</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card p-3" style="border: 1px solid #7FFF00">
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">Jumlah Penduduk</p>
                                <i class="ti ti-users fw-bold" style="color: #7FFF00; font-size:1.3rem"></i>
                            </div>
                            <h5 style="font-weight: 800">93</h5>
                            <p><i class="ti ti-pencil bg-dark text-white rounded" style="padding: 2px"></i> +12% dari bulan sebelumnya</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card p-3" style="border: 1px solid #7FFF00">
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">Jumlah Penduduk</p>
                                <i class="ti ti-users fw-bold" style="color: #7FFF00; font-size:1.3rem"></i>
                            </div>
                            <h5 style="font-weight: 800">93</h5>
                            <p><i class="ti ti-pencil bg-dark text-white rounded" style="padding: 2px"></i> +12% dari bulan sebelumnya</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card p-3" style="border: 1px solid #7FFF00">
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">Jumlah Penduduk</p>
                                <i class="ti ti-users fw-bold" style="color: #7FFF00; font-size:1.3rem"></i>
                            </div>
                            <h5 style="font-weight: 800">93</h5>
                            <p><i class="ti ti-pencil bg-dark text-white rounded" style="padding: 2px"></i> +12% dari bulan sebelumnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card p-3" style="border-radius: 1px solid #7FFF00">
                    <div class="d-flex justify-content-between">
                        <p class="fw-bold text-black">Bantuan Sosial</p>
                        <i class="ti ti-shopping-cart fs-6" style="color: #7FFF00"></i>
                    </div>
                    <h5 style="font-weight: 800">11</h5>
                    <p><i class="ti ti-pencil bg-dark text-white rounded" style="padding: 2px"></i> +12% dari bulan sebelumnya</p>
                    <hr />
                    <div class="mt-3">
                        <p class="text-dark" style="font-weight: 800">Bansos Terakhir</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <i class="ti ti-cash-banknote p-1 rounded" style="color: #a9e869; font-size:2rem"></i>
                                <p class="text-black"><b>Rp.363.500.000</b> <br> <small><i class="ti ti-users"></i> Diberikan oleh Sunandar Jayadi</small></p>
                            </div>
                            <div>
                                <span class="badge bg-warning p-2" style="border-radius: 20px">Menunggu</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <i class="fas fa-shopping-bag p-1" style="color:#7FFF00; font-size: 2rem"></i>
                                <p class="text-black"><b>Beras 10Kg</b> <br> <small><i class="ti ti-users"></i> Diberikan oleh Sunandar Jayadi</small></p>
                            </div>
                            <div>
                                <span class="badge bg-success p-2" style="border-radius: 20px">Diterima</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <i class="ti ti-cash-banknote p-1 rounded" style="color: #a9e869; font-size:2rem"></i>
                                <p class="text-black"><b>Rp.52.500.000</b> <br> <small><i class="ti ti-users"></i> Diberikan oleh Sunandar Jayadi</small></p>
                            </div>
                            <div>
                                <span class="badge bg-danger p-2" style="border-radius: 20px">Ditolak</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card p-3">
                    <div class="d-flex justify-content-between">
                        <i class="ti ti-arrow-left fs-6" style="color: #7FFF00"></i>
                        <p> Upcomming E-vents (3)</p>
                        <i class="ti ti-arrow-right fs-6" style="color: #7FFF00"></i>
                    </div>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('image/coding.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('image/coding-1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('image/coding-2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
