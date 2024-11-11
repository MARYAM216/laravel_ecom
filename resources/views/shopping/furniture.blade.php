@extends('layouts.appuserui')

@section('content')

  <div class="container">
    <div class="row mt-5">
      <div class="col">
          @foreach($product as $item)
            <div class="row mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <br>
                                <img  class="h-75 w-75 img-thumbnail" src="{{ asset('images/' . $item->image) }}" alt="صورة المنتج" class="img-fluid" width="300"></div>                                <div class="col">
                                  <h1 class="alert alert-primary">{{$item->name}}</h1>
                                  <p>{{$item->Description}}</p>
                                </div>
                            </div>

                            <div class="row mt-2">
                              <div class="col text-center">
                                <a href="{{route('proddet',['id'=>$item->id])}}" class="btn btn-success">تفاصيل</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection