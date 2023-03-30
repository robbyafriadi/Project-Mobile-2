@extends('layout.mainfront')

@section('Judul')
    Tambah data Peminjaman
@endsection

@section('Isi')
    <section class="py-1">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="col-lg-6 mb-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button class="btn btn-primary" type="button"
                                    onclick="window.location='/peminjaman/datapeminjaman'">
                                    &laquo; Kembali
                                </button>
                            </h3>
                        </div>
                        <div class="card-body">
                            @if (session('msg'))
                                {{ session('msg') }}
                            @endif

                            <form class="form-group" method="POST" action="{{ url('/peminjaman/simpan') }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <table class="table table-sm table-striped">
                                    <tr>
                                        <td> ID Pelanggan </td>
                                        <td>
                                            <input type="text" name="nama_mobil" id="nama_mobil" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Nama Mobil </td>
                                        <td>
                                            <input type="text" name="nama_mobil" id="nama_mobil" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Plat Mobil </td>
                                        <td>
                                            <input type="text" name="plat_mobil" id="plat_mobil" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Harga Sewa </td>
                                        <td>
                                            <input type="text" name="harga_sewa" id="harga_sewa" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Keterangan </td>
                                        <td>
                                            <input type="text" name="keterangan" id="keterangan" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Gambar Mobil </td>
                                        <td>
                                            <input type="text" name="gambar" id="gambar" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="card">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-3">
                            <div>
                                <table class="table table-sm table-striped">
                                    <tr>
                                        <td> Tanggal Pinjam </td>
                                        <td>
                                            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                                                class="form-control form-control-sm 
                            @error('tanggal_pinjam') 
                            is-invalid 
                            @enderror"
                                                value="{{ old('tanggal_pinjam') }}">

                                            @error('tanggal_pinjam')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Lama Pinjam </td>
                                        <td>
                                            <input type="text" name="lama_pinjam" id="lama_pinjam"
                                                class="form-control form-control-sm 
                            @error('lama_pinjam') 
                            is-invalid 
                            @enderror"
                                                value="{{ old('lama_pinjam') }}">

                                            @error('lama_pinjam')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>



                                    <tr>
                                        <td> Total Harga </td>
                                        <td>
                                            <input type="text" name="total_harga" id="total_harga" readonly
                                                style="cursor: not-allowed" class="form-control form-control-sm">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Jaminan (KTP) </td>
                                        <td>
                                            <input type="file" name="gambar" id="gambar"
                                                class="form-control form-control-sm  @error('gambar') 
                            is-invalid 
                            @enderror"
                                                accept="image/*">

                                            @error('gambar')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>

                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-success" type="submit">
                                                Simpan
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
