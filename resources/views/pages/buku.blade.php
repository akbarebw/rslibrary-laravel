@extends('layouts.app')

@section('title')
    perpustakaan buku page
@endsection

@section('content')
   <div class="page-content page-home">
        
        <!-- start list categories -->
        <section class="perpus-list-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Semua Kategori</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image"><img src="images/icon/fiksi_kategori.svg" alt=""
                                    class="w-100"></div>
                            <p class="categories-text">Fiksi</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image"><img src="images/icon/ilmiah_kategori.svg" alt=""
                                    class="w-100"></div>
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
                            <div class="categories-image"><img src="images/icon/makanan_kategori.svg" alt=""
                                    class="w-100"></div>
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
                        <h5>Semua Buku</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_1.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 1</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_2.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 2</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_3.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 3</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_4.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 4</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_5.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 5</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_6.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 6</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_7.jpg');">
                                </div>
                            </div>
                            <div class="product-author">erling haaland</div>
                            <div class="product-text">Buku 7</div>

                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                        <a href="/detail.html" class="component-product d-block">
                            <div class="product-thumbnail">
                                <div class="product-image"
                                    style="background-image: url('images/product/product_8.jpg');">
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
    </div>
@endsection