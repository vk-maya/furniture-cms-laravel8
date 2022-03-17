@extends('layouts.admin.master')
@section('title', 'Dashboard')
@push('css')
    <style>
        .img-box {
            background: #fff;
            border: 3px dashed #e8e8e8;
            color: #aaa;
            cursor: pointer;
            display: block;
            font-size: 22px;
            padding: 40px 0 26px;
            position: relative;
            text-align: center;
        }
        .img-box button {
            font-size: 14px;
            color: #555555;
        }
                .img-box span {
            font-size: 10px;
        }

    </style>
@endpush
@section('section')
    <div class="row">
        <div class="col-lg-4 mt-5">
            <div class="card ">
                <div class="card-body">
                    <h4 class="header-title">Add Category</h4>
                    <form action="{{ route('admin.savecategory') }}" method="POST" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            {{-- <li class="nav-item">
                                <a class="nav-link active" id="cat-tab" data-toggle="tab" href="#cat" role="tab"
                                    aria-controls="home" aria-selected="true">Add Category</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Basic</a>
                            </li>                         
                            <li class="nav-item">
                                <a class="nav-link" id="media-tab" data-toggle="tab" href="#media" role="tab"
                                    aria-controls="media" aria-selected="false">Image</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab"
                                    aria-controls="seo" aria-selected="false">SEO</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">                            
                            {{-- <div class="tab-pane fade show active" id="cat" role="tabpanel" aria-labelledby="cat-tab">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label"><b>Category Name</b></label>
                                    <input class="form-control form-control-sm" type="text" value="" id="category">
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <label for="" class="col-form-label d-block"><b>Status</b></label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" checked="" id="customRadio4" name="customRadio2"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio5" name="customRadio2"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Inactive</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="example-text-input3" class="col-form-label"><b>Order</b></label>
                                        <input class="form-control form-control-sm" type="number" value=""
                                            id="example-text-input3">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label"><b>Category Name</b></label>
                                    <input class="form-control form-control-sm" type="text" name="categoryname" value="" id="category">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input2" class="col-form-label"><b>Category Slug</b></label>
                                    <input class="form-control form-control-sm" name="categoryslug" type="text" readonly value=""
                                        id="inputslug">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input2" class="col-form-label"><b>Select Category </b></label>
                                    <select class="form-control" name="categoryname" id="exampleFormControlSelect1">
                                        <option value=" Test Category">1 Test Category</option>
                                        <option>2 Test Category</option>
                                        <option>3 Test Category</option>
                                        <option>4 Test Category</option>
                                        <option>5 Test Category</option>
                                      </select>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <label for="" class="col-form-label d-block"><b>Status</b></label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" checked="" id="customRadio4" name="customRadio2"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio5" name="customRadio2"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Inactive</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="example-text-input3" class="col-form-label"><b>Order</b></label>
                                        <input class="form-control form-control-sm" type="number" value=""
                                            id="example-text-input3">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                                <input type="file" class="" hidden name="" id="cat-img">
                                <label for="cat-img" class="img-box">
                                    <div class="col-12">Pick a Image</div>
                                    <div class="col-12"><span>OR</span></div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-xs">Get from URL <i
                                                class="ml-3 ti-link"></i></button>
                                    </div>
                                </label>
                            </div>
                            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label"><b>SEO Title</b></label>
                                    <input class="form-control form-control-sm" type="text" value=""
                                        id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label"><b>Meta Keywords</b></label>
                                    <input class="form-control form-control-sm" type="text" value=""
                                        id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input2" class="col-form-label"><b>Meta Description</b></label>
                                    <input class="form-control form-control-sm" type="text" value=""
                                        id="example-text-input2">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-flat btn-primary btn-xs btn-block mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Categories</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class=" text-capitalize">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary"><i
                                                            class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#category').onchange(function(e) {
            {
                'category': $(this).val()
            },
            function(data) {
                $('#inputslug').val(data.slug);
            }
        );
        });
    </script>
@endpush