@extends('layout') @section('content')
<div>
    <div class="container" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-md-12 col-lg-12 offset-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="{{ url('personalinformationp')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1 class="text-center">Personal Information</h1>
                            

                            <div class="form-group">
                                <input style="float: right;" type="submit" class="btn btn-primary float-right" name="submit" value="Next" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection