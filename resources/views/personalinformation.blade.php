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
								<label for="name" class="h4">Full Name :</label>
								<input type="text" class="form-control" name="name" required="" value="" />
                            </div>
                            
                            <div class="form-group">
								<label for="job" class="h4">Job Title :</label>
								<input type="text" class="form-control" name="job" required="" value="" />
                            </div>
                            
                            <div class="form-group">
								<label for="date" class="h4">Date of Birth :</label>
								<input type="date" class="form-control" name="date" required="" value="" />
                            </div>
                            
                            <div class="form-group">
								<label for="address" class="h4">Address :</label>
								<textarea type="text" class="form-control" name="address" required="" value="" ></textarea>
                            </div>
                            
                            <div class="form-group">
								<label for="mobile" class="h4">Mobile :</label>
								<input type="number" class="form-control" name="mobile" required="" value="" />
                            </div>
                            
                            <div class="form-group">
								<label for="email" class="h4">Email :</label>
								<input type="email" class="form-control" name="email" required="" value="" />
                            </div>
                            
                            <div class="form-group">
								<label for="linkedin" class="h4">LinkedIn :</label>
								<input type="text" class="form-control" name="linkedin" required="" value="" />
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