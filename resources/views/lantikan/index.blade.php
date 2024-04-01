@extends('layouts.base')
@section('content')
    <x-header main="Pengurusan Pengguna" sub="Pengguna" sub2="" />

    <div class="my-4">
        <h4 class="text-center">JUMLAH Pengguna</h4>
        <h1 class="text-center text-danger fw-bold"></h1>
    </div>


    <div class="row justify-content-center">
        {{-- <div class="col-8">
            <div class="row">
                <div class="col-2">
                    <p class="fw-bold">No. Kakitangan</p>
                </div>
                <div class="col-7 mt-1">
                    <input type="text" name="search" id="search" class="form-control">
                </div>
                <div class="col-3 px-0 mt-1">
                    <button class="btn btn-sm btn-primary" id="btnSearch">Cari
                        <span data-feather="search"></span>
                    </button>
                    <button class="btn btn-sm btn-link btnRefresh">
                        <span class="refreshbtn" style="color:grey" data-feather="refresh-ccw"></span>
                    </button>
                </div>
            </div>
        </div> --}}



        <div class="col-10 mt-2">
            {{-- <div class="text-end mb-3">
                <a href="{{ route('pp.create') }}" class="btn btn-success">Daftar
                    <span class="text-white" data-feather="plus-circle"></span>
                </a>
            </div> --}}

            <div class="card">
                <div class="card-body">
                    <div
                        data-list='{"valueNames":["bil","kakitangan","pekerja","email"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar table-striped">
                            <table class="table fs--1 mb-0 text-center" id="example">
                                <thead class=" text-900">
                                    <tr style="border-bottom-color: #F89521">
                                        <th class="sort" data-sort="bil">Bil</th>
                                        <th class="sort" data-sort="kakitangan">nama</th>
                                        <th class="sort" data-sort="pekerja">Email</th>
                                        <th class="sort" data-sort="email">Peranan</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="tablebody">
                                    @foreach ($users as $user)
                                        <tr style="border-bottom:#fff">
                                            <td class="bil">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="kakitangan">
                                                {{ $user->name }}
                                            </td>
                                            <td class="pekerja">
                                                {{ $user->email }}
                                            </td>
                                            <td class="email">
                                                {{ $user->role->name }}
                                            </td>
                                            <td>
                                                {{-- <form action="" method="post"
                                                    class="d-inline-flex">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn-del btn btn-sm btn-danger">
                                                        <span class="fas fa-trash-alt" style="width:15px;"></span>Delete
                                                    </button>
                                                </form> --}}
                                                <a href="{{ route('uc.edit', $user->id) }}"
                                                    class="ms-2 btn btn-sm btn-secondary">
                                                    <span class="fas fa-edit" style="width:15px;"></span>Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                data-list-pagination="prev"><span class="fas fa-chevron-left"></span>Previous</button>
                            <ul class="pagination mb-0"></ul>
                            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                data-list-pagination="next"><span class="fas fa-chevron-right"> </span>Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            var url = window.location.href;
            $('#btnSearch').click(function() {
                $data = $('#search').val();
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        "search": $data
                    },
                    success: function(response) {
                        $('#tablebody').html('');
                        let i = 1;
                        response[0].forEach(element => {
                            
                            console.log(element.id);
                            $('#tablebody').append(`
                                <tr style="border-bottom:#fff">
                                    <td class="bil">
                                        ` + i + `
                                    </td>
                                    <td class="kakitangan">
                                        ` + element.no_kakitangan + `
                                    </td>
                                    <td class="pekerja">
                                         ` + element.nama + `
                                    </td>
                                    <td class="email">
                                         ` + element.email + `
                                    </td>
                                    <td>
                                        <form action="/pengurusan_pengguna/delete/` + element.id + ` " method="post"
                                            class="d-inline-flex">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <span class="fas fa-trash-alt" style="width:15px;"></span>Delete
                                            </button>
                                        </form>
                                        <a href="/pengurusan_pengguna/edit/` + element.id + `"
                                            class="ms-2 btn btn-sm btn-secondary">
                                            <span class="fas fa-edit" style="width:15px;"></span>Edit
                                        </a>
                                    </td>
                                </tr>
                            `);
                            i++;
                        });
                    }
                });
            });
        });
    </script>
@endsection
