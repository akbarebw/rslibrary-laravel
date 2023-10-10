@extends('layouts.dashboard')


@section('title')
    Perpustakaan Dashboard Page
@endsection


@section('content')
        <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Dashboard</h2>
                            <p class="dashboard-subtitle">
                                Your Journey Through Books Begins Here.
                            </p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">
                                                Koleksi buku
                                            </div>
                                            <div class="dashboard-card-subtitle">
                                                10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">
                                                Peminjaman Hari Ini
                                            </div>
                                            <div class="dashboard-card-subtitle">
                                                5
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="dashboard-card-title">
                                                Pengembalian Terlambat
                                            </div>
                                            <div class="dashboard-card-subtitle">
                                                2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    <h5 class="mb-3">Peminjaman terbaru</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Buku</th>
                                                    <th scope="col">Judul & author</th>
                                                    <th scope="col">Peminjam</th>
                                                    <th scope="col">Tanggal Peminjaman</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="/images/product-dashboard.jpg" alt="" />
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="product-subtitle">best self</div>
                                                        <div class="product-title">by Dr. pilip john</div>
                                                    </td>
                                                    <td class="align-middle">akbar bintang</td>
                                                    <td class="align-middle">28 September, 2023</td>
                                                    <td class="align-middle">Dipinjam</td>
                                                    <td class="align-middle">
                                                        <a href="/dashboard-transactions-details.html">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                                                        </a>
                                                    </td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>
                                                        <img src="/images/product-dashboard.jpg" alt="" />
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="product-subtitle">best self</div>
                                                        <div class="product-title">by Dr. pilip john</div>
                                                    </td>
                                                    <td class="align-middle">akbar bintang</td>
                                                    <td class="align-middle">28 September, 2023</td>
                                                    <td class="align-middle">Dipinjam</td>
                                                    <td class="align-middle">
                                                        <a href="/dashboard-transactions-details.html">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                                                        </a>
                                                    </td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>
                                                        <img src="/images/product-dashboard.jpg" alt="" />
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="product-subtitle">best self</div>
                                                        <div class="product-title">by Dr. pilip john</div>
                                                    </td>
                                                    <td class="align-middle">akbar bintang</td>
                                                    <td class="align-middle">28 September, 2023</td>
                                                    <td class="align-middle">Dipinjam</td>
                                                    <td class="align-middle">
                                                        <a href="/dashboard-transactions-details.html">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                                                        </a>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@endsection