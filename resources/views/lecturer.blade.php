@extends('layouts.app')
@section('content')
    <section class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-warning">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">Jabatan Fungsional</th>
                            <th scope="col">Homebase</th>
                        </tr>
                    </thead>
                    <tbody class="sr-tbody">
                        <tr>
                            <th scope="row">1</th>
                            <td>0928119301</td>
                            <td>Sumantri S</td>
                            <td>Asisten</td>
                            <td>D4 Transportasi laut</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>0905039201</td>
                            <td>Reskyani</td>
                            <td>Asisten</td>
                            <td>D4 Transportasi laut</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
