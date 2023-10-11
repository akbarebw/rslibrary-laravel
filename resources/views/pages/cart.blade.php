@extends('layouts.app')

@section('title')
perpustakaan success page
@endsection

@section('content')
<div class="page-content page-cart">
    <section class="perpus-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="perpus-cart">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                    <table class="table table-borderless table-cart" aria-describedby="Cart">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">book &amp; author</th>
                                <th scope="col">Status</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-1.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">best self</div>
                                    <div class="product-subtitle">by Dr. pilip john</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Tersedia</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-1.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 25%;">
                                    <div class="product-title">best self</div>
                                    <div class="product-subtitle">by Dr. pilip john</div>
                                </td>
                                <td style="width: 25%;">
                                    <div class="product-title">Tersedia</div>
                                </td>
                                <td style="width: 25%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-1.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 25%;">
                                    <div class="product-title">best self</div>
                                    <div class="product-subtitle">by Dr. pilip johnx</div>
                                </td>
                                <td style="width: 25%;">
                                    <div class="product-title">Tersedia</div>
                                </td>
                                <td style="width: 25%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2 class="mb-4">Peminjam Details</h2>
                </div>
            </div>
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" aria-describedby="emailHelp"
                            name="namaLengkap" value="Akbar Bintang" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                            value="akbar@gmail.com" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" id="alamat" aria-describedby="alamatHelp" name="alamat"
                            value="Jl. Soekarno Hatta" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="+628 2020 11111" />
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2>peminjaman Informations</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control">
                    </div>
                </div>

                <div class="col-8 col-md-3">
                    <a href="/success.html" class="btn btn-primary mt-4 px-4 btn-block">
                        Pinjam Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection