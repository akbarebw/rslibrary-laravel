@extends('layouts.dashboard')


@section('title')
    Perpustakaan Dashboard Peminjaman Detail Page
@endsection


@section('content')
           <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">#PERPUS0203</h2>
                            <p class="dashboard-subtitle">
                                Detail Peminjaman
                            </p>
                        </div>
                        <div class="dashboard-content" id="transactionDetails">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <img src="/images/product-peminjaman.jpg" alt=""
                                                        class="w-60 mb-3" />
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Judul Buku</div>
                                                            <div class="product-subtitle">Best Self</div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Author</div>
                                                            <div class="product-subtitle">
                                                                Dr. pilip john
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">
                                                               Nama peminjam
                                                            </div>
                                                            <div class="product-subtitle">
                                                               Akbar Bintang
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">email</div>
                                                            <div class="product-subtitle">akbawr@gmail.com</div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Mobile</div>
                                                            <div class="product-subtitle">
                                                                +628 2020 11111
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Jenis Kelamin</div>
                                                            <div class="product-subtitle">
                                                                Laki-laki
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="col-12 col-md-6">
                                                            <div class="product-title">Status</div>
                                                            <div class="product-subtitle text-danger">
                                                                {{ old('status') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mt-4">
                                                    <h5>
                                                       Informasi Peminjaman
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Tanggal peminjaman</div>
                                                            <div class="product-subtitle">
                                                                29 September 2023
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Tanggal Pengembalian</div>
                                                            <div class="product-subtitle">
                                                                3 Oktober 2023
                                                            </div>
                                                        </div>
                                                         <div class="col-12 col-md-6">
                                                            <div class="product-title">Kode Peminjaman</div>
                                                            <div class="product-subtitle">
                                                                BK00097271
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="product-title">Status</div>
                                                                    <select name="status" id="status"
                                                                        class="form-control" v-model="status">
                                                                        <option value="Diproses">Diproses</option>
                                                                        <option value="Dipinjam">Dipinjam</option>
                                                                        <option value="Dikembalikan">Dikembalikan</option>
                                                                        <option value="Terlambat">Terlambat</option>
                                                                    </select>
                                                                </div>
                                                                <template v-if="status == 'Diproses'">
                                                                    <div class="col-md-3">
                                                                        <div class="product-title">
                                                                            Kode peminjaman
                                                                        </div>
                                                                        <input class="form-control" type="text"
                                                                            name="kode" id="openPerpusTrue"
                                                                            v-model="kode" />
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <button type="submit"
                                                                            class="btn btn-success btn-block mt-4">
                                                                            Update Kode
                                                                        </button>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('addon-script')
     <script src="/vendor/vue/vue.js"></script>
    <script>
        var transactionDetails = new Vue({
            el: "#transactionDetails",
            data: {
                status: "Diproses",
                kode: "BDO12308012132",
            },
        });
    </script>
@endpush