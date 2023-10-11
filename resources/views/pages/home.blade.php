@extends('layouts.app')

@section('title')
perpustakaan homepage
@endsection

@section('content')
<div class="page-content page-home">
    <!-- start carousel -->
    <section class="perpus-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <div id="perpusCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#perpusCarousel" data-slide-to="0"></li>
                            <li data-target="#perpusCarousel" data-slide-to="1"></li>
                            <li data-target="#perpusCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/banner/banner.jpg" alt="carousel image" class="d-block w-100">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/banner/banner2.jpg" alt="carousel image" class="d-block w-100">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/banner/banner3.jpg" alt="carousel image" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end carousel -->

    <!-- start list categories -->
    <section class="perpus-list-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Kategori Populer</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/fiksi_kategori.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">Fiksi</p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/ilmiah_kategori.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">Ilmiah</p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/non_fiksi_kategori.svg" alt=""
                                class="w-100"></div>
                        <p class="categories-text">Non Fiksi</p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/kesehatan_kategori.svg" alt=""
                                class="w-100"></div>
                        <p class="categories-text">Kesehatan</p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/seni_kategori.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">Seni</p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image"><img src="images/icon/makanan_kategori.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">Kuliner</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end list categories -->

    <!-- start list product -->
    <section class="perpus-new-product">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Buku Terbaru</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_1.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 1</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_2.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 2</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_3.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 3</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_4.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 4</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_5.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 5</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_6.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 6</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_7.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 7</div>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                    <a href="/detail.html" class="component-product d-block">
                        <div class="product-thumbnail">
                            <div class="product-image" style="background-image: url('images/product/product_8.jpg');">
                            </div>
                        </div>
                        <div class="product-author">erling haaland</div>
                        <div class="product-text">Buku 8</div>

                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end list product -->

    <!-- start about -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Ducimus rerum libero reprehenderit cumque</h2>
                    <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                        reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui
                        assumenda incidunt voluptatem tempora deleniti soluta.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Eius provident</h3>
                                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                    voluptatem</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Rerum aperiam</h3>
                                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                    quia</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Veniam omnis</h3>
                                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                    corrupti</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Delares sapiente</h3>
                                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis
                                    quideme lorenda</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- end about -->

    <!-- start stats  -->
    <section id="stats" class="stats">

        <img src="images/stats-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- End Stats  -->
</div>
@endsection