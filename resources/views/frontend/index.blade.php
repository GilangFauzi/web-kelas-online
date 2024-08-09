<!doctype html>
<html lang="en">

<head>
    @include('frontend.layouts.header')
</head>

<body>
    @include('frontend.layouts.navbar')

    <div class="hero-section" id="beranda">
        <img src="{{ asset('img/hero.jpg') }}" class="img-fluid" alt="Hero Image" width="100%">
        <div class="overlay"></div>
        <div class="content">
            <h1 class="fw-bold">Tingkatkan Performa Bisnis Anda</h1>
            <p>Semua solusi untuk mempermudah training dan up skill karyawan di perusahaan anda</p>
            <button type="button" class="btn btn-primary">Ajukan Demo</button>
        </div>
    </div>

    <section class="bg-light p-5">
            <h3 class="fw-bold text-center">Telah dipercaya oleh 10.000+ profesional user dari</h3>
            <div id="carouselExampleControls" class="carousel slide mt-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-images d-flex justify-content-center flex-nowrap gap-5">
                            <img src="{{ asset('client/Blibli.svg') }}" alt="Blibli">
                            <img src="{{ asset('client/Gojek.svg') }}" alt="Gojek">
                            <img src="{{ asset('client/Google.svg') }}" alt="Google">
                            <img src="{{ asset('client/ShopeeFood.svg') }}" alt="ShopeeFood">
                            <img src="{{ asset('client/Tokopedia.svg') }}" alt="Tokopedia">
                            <img src="{{ asset('client/Blibli.svg') }}" alt="Blibli">
                            <img src="{{ asset('client/Gojek.svg') }}" alt="Gojek">
                            <img src="{{ asset('client/ShopeeFood.svg') }}" alt="ShopeeFood">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="container mt-5" id="benefit">
        <h3 class="fw-bold text-center">Bagaimana kelas center membantu anda?</h3>
        <div class="d-flex justify-content-center align-items-center text-center">
            <p style="max-width: 800px;">Kami menghadirkan platform pembelajaran yang komperhensif untuk memberdayakan
                karyawan anda. Tingkatkan produktifitas dan efisiensi tim dengan Kelas Center.</p>
        </div>

        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center gap-3 mt-3">
                <button type="button" id="lms" class="btn btn-outline-primary active-tab">LMS</button>
                <button type="button" id="featured" class="btn btn-outline-primary">Featured</button>
                <button type="button" id="video-learning" class="btn btn-outline-primary">Video Learning + Live
                    Webminar</button>
                <button type="button" id="inquiry-learning" class="btn btn-outline-primary">Inquiry Learning</button>
            </div>
        </div>

        {{-- CONTENT --}}
        <div class="row mt-5" id="lms-content">
            <div class="col-lg-6" data-aos-duration="2000" data-aos="fade-right">
                <h3>Optimalkan Potensi Karyawan Anda dengan Learning Management System (LMS)</h3>
                <p>Berdayakan tim anda untuk kesuksesan dengan data yang akurat dan solusi pembelajaran yang
                    terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktifitas yang
                    unggul dengan LMS kami.</p>

                <div class="content-wrapper">
                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">
                            <img src="{{ asset('img/ceklis2.png') }}" alt="" width="20px"
                                class="me-3">Issued Certificate
                        </div>
                    </div>
                    <p>Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>

                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">
                            <img src="{{ asset('img/ceklis2.png') }}" alt="" width="20px" class="me-3">On
                            Boarding
                        </div>
                    </div>
                    <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka
                        bergabung.</p>

                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">
                            <img src="{{ asset('img/ceklis2.png') }}" alt="" width="20px"
                                class="me-3">Training on-demand
                        </div>
                    </div>
                    <p>Training on-demand yang berfokus pada pengalaman pengguna. Pelatihan berkualitas tinggi menjadi
                        lebih mudah diakses dan disesuaikan dengan kebutuhan anda.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos-duration="2000" data-aos="fade-left">
                <img src="{{ asset('img/hero.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>

        <div class="row mt-5" id="featured-content">
            <div class="col-lg-6" data-aos-duration="2000" data-aos="fade-right">
                <h3>Data Beda</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel quae, vitae dolor doloribus
                    illum molestiae neque perferendis accusamus quidem.</p>

                <div class="content-wrapper">
                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">Issued Certificate</div>
                    </div>
                    <p>Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>

                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">On Boarding</div>
                    </div>
                    <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka
                        bergabung.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos-duration="2000" data-aos="fade-left">
                <img src="{{ asset('img/hero.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>

        <div class="row mt-5" id="video-content">
            <div class="col-lg-6" data-aos-duration="2000" data-aos="fade-right">
                <h3>Data Beda 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel quae, vitae dolor doloribus
                    illum molestiae neque perferendis accusamus quidem.</p>

                <div class="content-wrapper">
                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">Issued Certificate</div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">On Boarding</div>
                    </div>
                    <p>Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka
                        bergabung.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos-duration="2000" data-aos="fade-left">
                <img src="{{ asset('img/hero.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>

        <div class="row mt-5" id="inquiry-content">
            <div class="col-lg-6" data-aos-duration="2000" data-aos="fade-right">
                <h3>Data Beda 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel quae, vitae dolor doloribus
                    illum molestiae neque perferendis accusamus quidem.</p>

                <div class="content-wrapper">
                    <div class="card mb-3">
                        <div class="card-header fw-bold" style="border: none">Issued Certificate</div>
                    </div>
                    <p>Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos-duration="2000" data-aos="fade-left">
                <img src="{{ asset('img/hero.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
        {{-- END CONTENT --}}
    </section>

    <section class="container py-5 mb-5 mt-5" id="paket" data-aos-duration="2000" data-aos="fade-in">
        <h3 class="text-center py-4 fw-bold">Pilihan Paket Untuk Perusahaan di Kelas Center</h3>
        <div class="row" data-aos-duration="2000" data-aos="zoom-in">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="border rounded-bottom p-3 card-price-list" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('img/lampu.png') }}" alt="" width="30px" class="me-2">
                            <h5 class="card-title mb-0 fw-bold">Starter</h5>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">Kelebihan</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                        <div class="align-self-center">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="border-dashed mt-5"></div>

                        <div class="mt-3">
                            <p class="m-0">Rp185.700</p>
                            <h3 class="fw-bold d-inline">Rp159.000</h3><span>/bulan</span>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary d-block mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="border rounded-bottom p-3 card-price-list" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('img/user2.png') }}" alt="" width="30px" class="me-2">
                            <h5 class="card-title mb-0 fw-bold">Baasic</h5>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">Kelebihan</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                        <div class="align-self-center">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="border-dashed mt-5"></div>

                        <div class="mt-3">
                            <p class="m-0">Rp185.700</p>
                            <h3 class="fw-bold d-inline">Rp159.000</h3><span>/bulan</span>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary d-block mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="border rounded-bottom p-3 card-price-list" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('img/user3.png') }}" alt="" width="30px" class="me-2">
                            <h5 class="card-title mb-0 fw-bold">Pro</h5>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">Kelebihan</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                        <div class="align-self-center">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>LMS + kelas by Kelas Center</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>Up to 5 users</span>
                        </div>
                        <div class="align-self-center mt-3">
                            <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                class="d-inline me-2">
                            <span>No charge per user</span>
                        </div>
                        <div class="border-dashed mt-5"></div>

                        <div class="mt-3">
                            <p class="m-0">Rp185.700</p>
                            <h3 class="fw-bold d-inline">Rp159.000</h3><span>/bulan</span>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary d-block mt-3">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-rounded-bottom text-white border-0" style="background-color: #b89664;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="{{ asset('img/gedung.png') }}" alt="" width="30px"
                                        class="me-2">
                                    <h4 class="card-title mb-0 fw-bold">Enterprice</h4>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="me-3 d-inline">
                                        <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                            class="d-inline me-1">
                                        <span> > 100 Users</span>
                                    </div>
                                    <div class="me-3 d-inline">
                                        <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                            class="d-inline me-1">
                                        <span> All Access Class</span>
                                    </div>
                                    <div class="me-3 d-inline">
                                        <img src="{{ asset('img/ceklis.png') }}" width="20px" alt=""
                                            class="d-inline me-1">
                                        <span> More Fitures</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-outline-primary">ContactUs</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="container py-5 mt-5" id="kelas">
        <div data-aos-duration="2000" data-aos="fade-in">
            <div class="text-center">
                <h2 class="fw-bold">Lebih dari 2000+ Learning Video</h2>
                <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim
                    kurikulum profesional bersama tim video profesional dengan kualitas tinggi</p>
            </div>

            <div class="justify-content-center d-flex gap-3">
                <button type="button" id="kelas-com" class="btn btn-outline-primary active-tab">Kelas.com</button>
                <button type="button" id="kelas-work" class="btn btn-outline-primary">Kelas.work</button>
                <button type="button" id="bootcamp" class="btn btn-outline-primary">Bootcamp</button>
            </div>
        </div>

        {{-- CONTENT --}}
        <div class="container mt-5" id="kelas-com-content" data-aos-duration="2000" data-aos="zoom-in">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card shadow" style="border-radius: 10px">
                        <img src="{{ asset('img/hero.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                <p>Public Speaking: Merdeka dalam berbicara</p>
                            </div>
                            <h6 class="">Panji Pragiwaksono</h6>
                            <p class="card-text">Presenter Televisi & Komika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card shadow" style="border-radius: 10px">
                        <img src="{{ asset('img/hero.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                <p>Public Speaking: Merdeka dalam berbicara</p>
                            </div>
                            <h6 class="">Panji Pragiwaksono</h6>
                            <p class="card-text">Presenter Televisi & Komika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card shadow" style="border-radius: 10px">
                        <img src="{{ asset('img/hero.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                <p>Public Speaking: Merdeka dalam berbicara</p>
                            </div>
                            <h6 class="">Panji Pragiwaksono</h6>
                            <p class="card-text">Presenter Televisi & Komika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card shadow" style="border-radius: 10px">
                        <img src="{{ asset('img/hero.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                <p>Public Speaking: Merdeka dalam berbicara</p>
                            </div>
                            <h6 class="">Panji Pragiwaksono</h6>
                            <p class="card-text">Presenter Televisi & Komika.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 text-center" id="kelas-work-content" data-aos-duration="2000" data-aos="zoom-in">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, debitis. Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Laborum est amet architecto nobis sint quod numquam repellat eveniet
                totam, libero enim quia recusandae quo fugiat atque aspernatur quaerat, veritatis iusto!</p>
        </div>

        <div class="container mt-5 text-center" id="bootcamp-content" data-aos-duration="2000" data-aos="zoom-in">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, debitis. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Numquam corporis magnam, quis velit porro, nesciunt molestiae similique
                deserunt alias, aliquid delectus modi iure nam nihil itaque vero harum unde sed assumenda architecto?
                Excepturi, earum nobis eaque voluptatem voluptas labore, mollitia reprehenderit a laudantium facere
                dolores amet quia, possimus quam similique!</p>
        </div>
         {{-- END CONTENT --}}
    </section>

    <section class="hero-section-footer mt-5" id="kontak-kami">
        <img src="{{ asset('img/hero.jpg') }}" class="img-fluid" alt="Hero Image" width="100%">
        <div class="overlay-footer"></div>
        <div class="content">
            <h1>Tingkatkan Performa Bisnis Anda</h1>
            <p>Semua solusi untuk mempermudah training dan up skill karyawan di perusahaan anda</p>
            <button type="button" class="btn btn-primary">Ajukan Demo</button>
        </div>
    </section>

    @include('frontend.layouts.footer')
</body>
</html>
