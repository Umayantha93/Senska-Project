<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Item Management System</title>
  </head>
  <body>

@include('navbar')

<div class="row header-container justify-content-center">
    <div class="header">
    <h1 style="text-align:center">Item Management System</h1>
    </div>
</div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class= "row">
            <section class="col-md-5">
                @include("itemlist")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
    <div class="row">
        <section class="col">
            @include("itemlist")
        </section>
        <section class="col">


        <div class="card mb-3">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Add New Item</h5>

                <form action="{{url('/store')}}" method="POST">
            @csrf 
                <div class="form-group">
                    <label>Item Name</label>
                    <input name="item_name" type="text" class="form-control" placeholder="Enter Item Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" type="text" class="form-control" placeholder="Enter Address">
                </div>
                <br>
                <div class="form-group">
                    <label>Discription</label>
                    <input name="discription" type="text" class="form-control" placeholder="Enter Discription">
                </div>
                <br>
                <div class="form-group">
                    <label>Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Enter Price">
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </section>
        </div>
    </div>
            </div>
        </div>


            
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("itemlist")
            </section>
            <section class="col">

            </section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("itemlist")
            </section>
            <section class="col">
                <div class="card mb-3">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Update the Item Information</h5>
                        <form action="{{url('/update/'.$item->id)}}" method="POST">
            @csrf 
                <div class="form-group">
                    <label>Item Name</label>
                    <input value="{{ $item->item_name }}" name="item_name" type="text" class="form-control" placeholder="Enter Item Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Address</label>
                    <input value="{{ $item->address }}" name="address" type="text" class="form-control" placeholder="Enter Address">
                </div>
                <br>
                <div class="form-group">
                    <label>Discription</label>
                    <input value="{{ $item->discription }}" name="discription" type="text" class="form-control" placeholder="Enter Discription">
                </div>
                <br>
                <div class="form-group">
                    <label>Price</label>
                    <input value="{{ $item->price }}" name="price" type="text" class="form-control" placeholder="Enter Price">
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
                    </div>
                </div>
                </section>
        </div>
    </div>
            
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>