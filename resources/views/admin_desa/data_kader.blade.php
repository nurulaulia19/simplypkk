@extends('admin_desa.layout')

@section('title', 'Data Kader | Admin Desa PKK Kab. Indramayu')

@section('bread', 'Data Kader')
@section('container')

    <!-- Main content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered data" id="add-row">
                                        <a href="{{ url('data_kader/create') }}" type="button"
                                            class="btn btn-success">Tambah</a><br><br>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>User Type</th>
                                                <th>Kader Dasawisma</th>
                                                <th>RT/RW</th>
                                                <th>Foto</th>
                                                <th>Nama Desa</th>
                                                <th>Nama kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($akun as $c)
                                                <tr>
                                                    <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                                    <td style="vertical-align: middle;">{{ $c->name }}</td>
                                                    <td style="vertical-align: middle;">{{ $c->email }}</td>
                                                    <td style="vertical-align: middle;">{{ $c->user_type }}</td>
                                                    <td style="vertical-align: middle;">
                                                        @if ($dasawisma = $c->dasawisma)
                                                            {{ $dasawisma->nama_dasawisma }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        @if ($rt = $c->dasawisma)
                                                            {{ $dasawisma->rt }}/{{ $dasawisma->rw }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <img src="{{ asset('uploads/'.$c->foto) }}" width="30px">
                                                    </td>
                                                    <td style="vertical-align: middle;">{{ $c->desa->nama_desa }}</td>
                                                    <td style="vertical-align: middle;">{{ $c->kecamatan->nama_kecamatan }}
                                                    </td>

                                                    <td class="text-center">
                                                        <form action="{{ route('data_kader.destroy', $c->id) }}"
                                                            method="POST">

                                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a> --}}

                                                            <a class="btn btn-primary btn-sm"
                                                                href="{{ url('data_kader/' . $c->id . '/edit') }}">Edit</a>

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm delete">Delete</button>
                                                        </form>
                                                    </td>


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

        </section>
    </div>
    <!-- /.content -->


    <!-- page script -->
@endsection

@push('script-addon')
    <script>
        $(document).ready(function() {
            $('.data').DataTable();
        });
    </script>

    <script>
        $('.delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin ingin menghapus data ini ?`,
                    text: "Jika anda menghapusnya maka datanya akan di hapus secara permanen",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
