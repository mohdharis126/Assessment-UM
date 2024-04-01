@extends('layouts.base')
@section('content')
    <x-header main="Pengurusan Pengguna" sub="Kakitangan" sub2="Kemaskini Kakitangan" />

    <div class="container">
        <form action="{{ route('pp.update', $asset->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row justify-content-center mt-5">
                <div class="col-10 px-0">
                    <h3 class="fw-bold text-uppercase text-main">Maklumat Kakitangan</h3>
                    <h5 class="text-main">Sila isikan maklumat Kakitangan berikut dengan betul.</h5>
                    <div>
                        <img src="{{ asset($asset->gambar) }}" alt="User Picture">
                    </div>

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
                                    <input type="text" name="nama"
                                        class="form-control border-main  @error('nama') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="{{ $asset->nama }}">
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
                                    <input type="text" name="no_kakitangan"
                                        class="form-control border-main  @error('no_kakitangan') is-invalid @enderror"
                                        placeholder="SILA TAIP DI SINI" value="{{ $asset->no_kakitangan }}" maxlength="8">
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
                                        <option selected disabled hidden> {{ $asset->jantina }} </option>
                                        <option value="lelaki">Lelaki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
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
                                        placeholder="SILA TAIP DI SINI" value="{{ $asset->jawatan }}">
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
                                        placeholder="000000000000" value="{{ $asset->no_telefon_pejabat }}">
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
                                        placeholder="0171231233" value="{{ $asset->no_telefon }}">
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
                                        placeholder="a@b.com" value="{{ $asset->email }}">
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
                                        placeholder="lot1234" value="{{ $asset->alamat_pejabat }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="text-center">
                    <a href="/pengurusan_pengguna/index" class="btn btn-danger">
                        Kembali
                        <span data-feather="settings"></span>
                    </a>                    
                    <button class="btn btn-success" type="submit">Kemaskini
                        <span data-feather="check-circle"></span>
                    </button>
                </div>
            </div>

        </form>
    </div>
    


    <script>
        // $('#err-msg-pwd').hide();

        // $('#btnsubmitpwd').click(function(e) {
        //     e.preventDefault();
        //     if ($('#p1').val() != $('#p2').val()) {
        //         $('#err-msg-pwd').show();
        //     } else {
        //         $('#err-msg-pwd').hide();
        //         $('#formpwd').submit();
        //     }
        // });

        $("#btnsubmitpwd").click(function(e) {
            e.preventDefault();
            let form = $(this).parent('form');

            Swal.fire({
                title: 'Perhatian!',
                text: 'Adakah anda pasti?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Kembali',
                confirmButtonText: 'Pasti',
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formpwd').submit();
                }
            });
        });

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
    </script>
@endsection
