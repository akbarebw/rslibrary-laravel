@extends('layouts.app')

@section('title')
perpustakaan penulis page
@endsection

@section('content')
<div class="page-content page-home">


    <!-- start list product -->
    <section class="perpus-new-product">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Semua penerbit</h5>
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
</div>
@endsection