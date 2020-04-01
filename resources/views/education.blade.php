@extends('layout') @section('content')
<div>
    <div class="container" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-md-12 col-lg-12 offset-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="{{ url('educationp')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1 class="text-center">Education</h1>
                            <div class="form-group">
								<label for="school" class="h4">Secondary School :</label>
                                <input type="text" class="form-control" name="school" required="" value="" />
                                <div class="row">
                                <div class="col-6">
                                <label for="fschool" class="h4">From :</label>
                                <input type="date" class="form-control" name="fschool" required="" value="" />
                                </div>
                                <div class="col-6">
                                <label for="tschool" class="h4">To :</label>
                                <input type="date" class="form-control" name="tschool" required="" value="" />
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
								<label for="collage" class="h4">Collage :</label>
                                <input type="text" class="form-control" name="collage" required="" value="" />
                                <div class="row">
                                    <div class="col-6">
                                        <label for="fcollage" class="h4">From :</label>
                                        <input type="date" class="form-control" name="fcollage" required="" value="" />
                                    </div>
                                    <div class="col-6">
                                        <label for="tcollage" class="h4">To :</label>
                                        <input type="date" class="form-control" name="tcollage" required="" value="" />
                                    </div>
                                </div>
                            </div>

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