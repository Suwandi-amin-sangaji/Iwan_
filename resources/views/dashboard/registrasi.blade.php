@extends('layouts.app')

@section('title', 'Pendaftaran')


@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pendaftaran</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic DataTables</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Kapal</th>
                                                <th>Email</th>
                                                <th>Hp</th>
                                                <th>Jumlah</th>
                                                <th>Cluster</th>
                                                <th>Tanggal</th>
                                                <th>Titik Selam</th>
                                                <th>Jam</th>
                                                <th>Note</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registrasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_kapal }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->no_hp }}</td>
                                                <td>{{ $item->jumlah_penumpang }}</td>
                                                <td>{{ $item->cluster->nama_cluster }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>{{ $item->titikSelam->nama }}</td> 
                                                <td>{{ $item->waktu->jam }}</td> 
                                                <td>{{ $item->note }}</td>
                                                {{-- <td><a href="#" class="btn btn-secondary">Detail</a></td> --}}
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
@endsection

@section('sidebar')
    @parent
@endsection
