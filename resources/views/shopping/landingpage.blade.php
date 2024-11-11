@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-end text-primary-emphasis"> أهلا بكم في منصتنا الإلكترونية لتسويق المنتجات المنزلية</h3>
            <p class="text-end text-body-tertiary">منصة رائدة لتسويق الأدوات المنزلية وبأفضل الأسعار </p>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col">
        <a href="{{route('decor')}}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col text-end">
                        <i class="bi bi-flower3 h1 text-warning"></i>
                                            </div>
                        <div class="col text-end">
                            
                            <h3>الديكور</h3>
                        </div>

                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col">
        <a href="{{route('furniture')}}">
        <div class="card">
                <div class="card-body bg-tertiary">
                    <div class="row">
                    <div class="col text-end">
                        <i class="bi bi-house h1 text-danger-emphasis"></i>
                        </div>
                        <div class="col text-end">
                            <h3> الأثاث </h3>
                        </div>

                    </div>
                </div>
            </div>
            </a>
         </div>
         
         <div class="col">
            <a href="{{route('electric')}}">
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col text-end">
                                <i class="bi bi-plug h1"></i>
                                </div>
                                <div class="col text-end">
                                    <h3>الأجهزة </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </a>
    </div>
</div>

@endsection
