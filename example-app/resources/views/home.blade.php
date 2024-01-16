@extends('layouts.default')

@section('title','Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">WorkShop</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">WorkShop Page1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-body">
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Form </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="name" class="form-control" id="exampleInputName" placeholder="Enter name">
                                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputLastName">Lastname</label>
                                        <input type="lastname" class="form-control" id="exampleInputLastName" placeholder="Enter lastname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="exampleInputFile">Birthday</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>

                                        </div>
                                    <!--<div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>-->
                                    </div>

                                        <form>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                            </div>
                                            <div class="form-group">

                                                <label>Gender</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1">
                                                            <label class="form-check-label">Man</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1">
                                                            <label class="form-check-label">Woman</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Favorite color</label>
                                                <select class="form-control">
                                                <option>None</option>
                                                <option>Red</option>
                                                <option>Skyblue</option>
                                                <option>Pink</option>
                                                <option>Purple</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Favorite music genre</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">International</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Thai Luk Thung</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Thai For Life</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                  <!-- /.card-body -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                      <!-- text input -->
                                            <div class="form-group">
                                                <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <div class="card-footer">
                                                <button type="reset" class="btn btn-primary" >Reset</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div><!-- /.container-fluid -->
    <style>
        button.btn {
            width: 100%;
            display: block;
            margin: 0 auto;

        }
        form{
            display: block;
            margin: 0 auto;
        }
        input.input-date-brithday{
            width: 100%;
        }

    </style>
    

    <!-- /.content -->
@endsection
