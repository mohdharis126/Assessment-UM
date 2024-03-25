@extends('layouts.base')
@section('content')
    <style>
        .choices {
            margin-bottom: 0%;
        }
    </style>
    <x-header main="Pengurusan Pengguna" sub="Kakitangan" sub2="Daftar Kakitangan" />

    <div class="container">
        <form action="{{ route('pp.store') }}" method="post">
            @csrf
            <div class="row justify-content-center mt-4">
                <div class="col-10 px-0">
                    <h3 class="fw-bold text-uppercase text-main">Maklumat Kakitangan</h3>
                    <h5 class="text-main">Sila isikan maklumat kakitangan berikut dengan betul.</h5>

                    <div class="row align-items-center mt-5">
                        <div class="col-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">Nama</label>
                                </div>
                                <div class="col-xl-8">
                                    <input style="text-transform: uppercase" type="text" name="nama"
                                        class="form-control border-main  @error('nama') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-1"></div>
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">No. Kakitangan</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="no_kakitangan" id="inputNoKakitangan"
                                        class="form-control border-main  @error('no_kakitangan') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="" maxlength="8">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">Jantina</label>
                                </div>
                                <div class="col-xl-8">
                                    <select name="jantina"
                                        class="form-select border-main  @error('jantina') is-invalid @enderror">
                                        <option selected disabled hidden> SILA PILIH </option>
                                        <option value="lelaki">Lelaki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                {{-- <div class="col-xl-8">
                                    <input type="text" name="jantina"
                                        class="form-control border-main  @error('jantina') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="">
                                </div> --}}
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-1"></div>
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">Jawatan</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="jawatan"
                                        class="form-control border-main  @error('jawatan') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">No.Fon Pejabat</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="no_telefon_pejabat"
                                        class="form-control border-main  @error('no_telefon_pejabat') is-invalid @enderror"
                                        placeholder="000000000000" value="">
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-1"></div>
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">No. Telefon</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="no_telefon"
                                        class="form-control border-main @error('no_telefon') is-invalid @enderror"
                                        placeholder="0171231233" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">E-mel</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="email"
                                        class="form-control border-main  @error('email') is-invalid @enderror"
                                        placeholder="a@b.com" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-xl-1"></div>
                                <div class="col-xl-3">
                                    <label class="col-form-label text-main">Alamat Pejabat</label>
                                </div>
                                <div class="col-xl-8">
                                    <input type="text" name="alamat_pejabat"
                                        class="form-control border-main  @error('alamat_pejabat') is-invalid @enderror"
                                        placeholder="lot1234" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="text-center">
                    <button id="custom-btn-white" type="button" class="btn btn-white me-3 border-danger text-danger">
                        Set Semula
                        <span data-feather="refresh-ccw" style="width: 15px;"></span>
                    </button>
                    {{-- <a href="/pengurusan_pengguna/index" class="btn btn-primary">
                        Upload file csv
                        <span data-feather="settings"></span>
                    </a> --}}
                    <button type="submit" class="btn btn-success">Daftar
                        <span data-feather="plus-circle"></span>
                    </button>
                </div>
            </div>

        </form>

    </div>

    <script>
        $("#custom-btn-white").mouseenter(function() {
            $(this).removeClass('btn-white');
            $(this).removeClass('text-danger');
            $(this).addClass('btn-danger');
            $(this).addClass('text-white');

        });
        $("#custom-btn-white").mouseleave(function() {
            $(this).addClass('btn-white');
            $(this).addClass('text-danger');
            $(this).removeClass('btn-danger');
            $(this).removeClass('text-white');
        });

        $('#custom-btn-white').click(function() {
            location.reload();
        });

        $("#inputNoKakitangan").keyup(function(e) {
            var val = $(this).val();
            var trim = $.trim(val);

            $(this).val(trim);


        });
    </script>
@endsection
