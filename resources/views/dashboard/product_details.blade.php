@extends('layouts.appdash')

@section('content')
<!-- delete model-->
 
 

<div class="container">
  
<h1 class="alert alert-info">تفاصيل المنتجات</h1>
<form action="{{route('createnewdet')}}" method="post"        enctype="multipart/form-data">
    @csrf
 <div class="card">
    <div class="card-body">
    <div class="row">
   
   <div class="col">
       <label for="product_no"> اختر المنتج</label>
       <select class="form-select" name="product_no" id="product_no">
        @foreach($prod as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
       </select>
   </div>
 </div>

 <div class="row mt-3">
   <div class="col">
       <label for="price" class="form-label">سعر المنتج</label>
       <input type="text" class="form-control" id="price" name="price">
   </div>
   <div class="col">
   <label for="qty" class="form-label">الكمية </label>
   <input type="text" class="form-control" id="qty" name="qty">
   </div>
 </div>

 <div class="row mt-3">
   <div class="col">
       <label for="color" class="form-label">لون المنتج</label>
       <input type="text" class="form-control" id="color" name="color">
   </div>
   <div class="col">
   <label for="img" class="form-label">صورة المنتج </label>
   <input type="file" class="form-control" id="img" name="img"      required>
   </div>
 </div>

 <div class="row mt-2">
   <div class="col text-center">
       <button class="btn btn-primary">حفظ</button>
   </div>
 </div>
 
    </div>
    </div>
    </form> 

 <div class="row mt-5">
  <div class="col">
    <div class="card">
      <div class="card-body">
      <table class="table text-center">
                    <thead>
                        <tr>
                            <th>رقم المنتج</th>
                            <th>اسم المنتج</th>
                            <td>سعر المنتج </td>
                            <td>الكمية </td>
                            <td>الصوره </td>
                            <td>اللون </td>
                            <td colspan="2">إجراء </td>

                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($productdetails as $item)
                        <tr>
                   <td>{{$item->id}} </td>
                   <td>{{$item->name}} </td>
                <td>{{$item->price}} </td>
                   <td>{{$item->qty}} </td>
                
                  <td> <img src="{{ asset('images/' . $item->image) }}"
                   alt="Product Image" width="200"></td>


                   <td>{{$item->color}} </td>

                   <td><a href="#" onclick="lunch({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                            
                   <td><a href="{{route('edit',['id'=>$item->id])}}"><i class="bi bi-pen text-success"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
  

                  </table>
      </div>
    </div>
  </div>
</div>


</div>

@endsection