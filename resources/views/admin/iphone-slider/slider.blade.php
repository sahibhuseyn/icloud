@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add new Slide
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('select_iphone_add', $language_id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone_name" placeholder="Phone Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix add-new-input">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="country_name[]"  placeholder="Country Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 button-section">
                                    <input type="button" class="add-btn btn btn-success" value="+" >
                                    <input type="button" class="remove-btn btn btn-danger" value="-" >
                                </div>
                            </div>
                            <div class="row clearfix add-new-input">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="service_type[]" placeholder="Service Type">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 button-section">
                                    <input type="button" class="add-btn btn btn-success" value="+" >
                                    <input type="button" class="remove-btn btn btn-danger" value="-" >
                                </div>
                            </div>
                            <div class="row clearfix add-new-input">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="estimate_days[]"  placeholder="Estimate Day">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 button-section">
                                    <input type="button" class="add-btn btn btn-success" value="+" >
                                    <input type="button" class="remove-btn btn btn-danger" value="-" >
                                </div>
                            </div>
                            <div class="row clearfix add-new-input">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="price[]"  placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 button-section">
                                    <input type="button" class="add-btn btn btn-success" value="+" >
                                    <input type="button" class="remove-btn btn btn-danger" value="-" >
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @foreach($selects as $count => $slide)
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <form action="{{ route('select_iphone_delete', $slide->id) }}" method="post" class="pull-right">
                                    {{ csrf_field() }}

                                    <div class="col-sm-4">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </div>
                                </form>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <img src="{{ url('/uploads/' . $slide->image) }}" class="img-responsive" alt="">
                                </div>
                            </div>

                            <hr>

                            <form action="{{ route('select_iphone_update', $slide->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="language_id" value="{{ $slide->language->id }}">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="image" placeholder="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="phone_name" value="{{ $slide->phone_name }}" placeholder="Phone Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $country_names = explode("_", $slide->country_name);
                                    $service_types = explode("_", $slide->service_type);
                                    $prices = explode(",", $slide->price);
                                    $estimate_days = explode("_", $slide->estimate_day);
                                @endphp

                                @foreach($country_names as $count => $country_name)
                                    <div class="row clearfix add-new-input">
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="country_name[]" value="{{ @$country_name }}" placeholder="Country Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 button-section">
                                            <input type="button" class="add-btn btn btn-success" value="+" >
                                            <input type="button" class="remove-btn btn btn-danger" value="-" >
                                        </div>
                                    </div>
                                    <div class="row clearfix add-new-input">
                                        <div class="col-sm-10 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="service_type[]" value="{{ @$service_types[$count] }}" placeholder="Service Type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 button-section">
                                            <input type="button" class="add-btn btn btn-success" value="+" >
                                            <input type="button" class="remove-btn btn btn-danger" value="-" >
                                        </div>
                                    </div>
                                    <div class="row clearfix add-new-input">
                                        <div class="col-sm-10 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="estimate_day[]" value="{{ @$estimate_days[$count] }}" placeholder="Estimate Day">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 button-section">
                                            <input type="button" class="add-btn btn btn-success" value="+" >
                                            <input type="button" class="remove-btn btn btn-danger" value="-" >
                                        </div>
                                    </div>
                                    <div class="row clearfix add-new-input">
                                        <div class="col-sm-10 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="price[]" value="{{ @$prices[$count] }}" placeholder="Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 button-section">
                                            <input type="button" class="add-btn btn btn-success" value="+" >
                                            <input type="button" class="remove-btn btn btn-danger" value="-" >
                                        </div>
                                    </div>
                                    <hr>

                                @endforeach


                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
