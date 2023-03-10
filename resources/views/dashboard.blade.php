@extends('Index')
@section('content')
<main>
    <div class="container-fluid px-4">
                            <h1 class="mt-4">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active"></li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $buku_tersedia }}</h3>
                                            <p style="font-size:20px"><a href="#" class="text-white text-decoration-none">Jumlah Buku</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $buku_tidak_dipinjam }}</h3>
                                            <p style="font-size:20px"><a href="/user" class="text-white text-decoration-none">Buku yang tersedia</a></p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-danger text-white mb-4">
                                        <div class="card-body text-center">
                                            <h3 style="font-size:50px">{{ $buku_dipinjam }}</h3>
                                            <p style="font-size:20px"><a href="#" class="text-white text-decoration-none">Buku Dipinjam</a></p>
                                        </div>
                                    </div>
                                </div>
                                                    
                                
@endsection
    

