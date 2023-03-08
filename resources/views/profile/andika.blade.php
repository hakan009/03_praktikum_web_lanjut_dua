@extends('layouts.app')
@section('title', 'Andika Ainur')
@section('sub-title', 'Andika Ainur')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid "
                                src="{{asset('image/FotoKTM.jpg')  }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Andika Ainur</h3>

                        <p class="text-muted text-center">Andika Ainur</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tentang Saya</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                        <p class="text-muted">
                            SMK Barunawati Surabaya
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">Darmo Permai, Surabaya Barat </p>

        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">


                                <h1>Hobi</h1>

                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <img class="img-fluid"
                                            src="https://img.freepik.com/free-vector/characters-celebrating-holi-festival-concept_23-2148405462.jpg?w=740&t=st=1678290021~exp=1678290621~hmac=e993f11abc5287973d5990676176916b83d1e3629e95630fa448833d13736355"
                                            alt="Bermain Kalimba">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-3"
                                                src="https://img.freepik.com/free-vector/group-young-people-posing-photo_52683-18823.jpg?size=338&ext=jpg&ga=GA1.2.977163093.1678289260&semt=sph"
                                                    alt="Menggambar">
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection