@extends('layouts.admin')


@section('title')
Perpustakaan Admin Dashboard Page
@endsection


@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">
                Perpustakaan Administrator
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Pengguna
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $pengguna }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Buku
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $buku }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Dipinjam
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $dipinjam }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Pengembalian
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $selesai }}
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
                                    {{-- <th scope="col">Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaction_data as $transaction)
                                <tr>
                                    <td>
                                        <img src="{{ Storage::url($transaction->book->galleries->first()->foto) }}"
                                            alt="" width="70px" height="100px" style="background-size:unset" />
                                    </td>
                                    <td class="align-middle">
                                        <div class="product-subtitle">{{ $transaction->book->judul }}</div>
                                        <div class="product-title">{{ $transaction->book->penulis->nama_penulis
                                            }}</div>
                                    </td>
                                    <td class="align-middle">{{ $transaction->transaction->user->nama }}</td>
                                    <td class="align-middle">{{
                                        Carbon\Carbon::parse($transaction->transaction->tanggal_pinjam)->format('d
                                        F Y') }}</td>
                                    <td class="align-middle">{{ $transaction->transaction->status }}</td>
                                    <td class="align-middle">
                                        {{-- <a href="/dashboard-transactions-details.html">
                                            <img src="/images/dashboard-arrow-right.svg" alt="" />
                                        </a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection