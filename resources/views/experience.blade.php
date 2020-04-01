@extends('layout') @section('content')
<div>
    <div class="container" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-md-12 col-lg-12 offset-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="{{ url('experiencep')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1 class="text-center">Experience</h1>
                            <button id="add" class="btn btn-success" style="float:right">Add Experience</button>
                            <br>
                            <div id='ex'>
                                <div class="form-group">
                                    <label for="workplace" class="h4">Work Place :</label>
                                    <input type="text" class="form-control" name="workplace[]" required="" value="" />
                                    <label for="role" class="h4">Role :</label>
                                    <textarea type="text" class="form-control" name="role[]" required="" value="" ></textarea>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="fw" class="h4">From :</label>
                                            <input type="date" class="form-control" name="fw[]" required="" value="" />
                                        </div>
                                        <div class="col-6">
                                            <label for="tw" class="h4">To :</label>
                                            <input type="date" class="form-control" name="tw[]" required="" value="" />
                                        </div>
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
<script>
    $( document ).ready(function() {
        $( "#add" ).click(function() {
            let x = '<hr><div class="form-group"> <label for="workplace" class="h4">Work Place :</label> <input type="text" class="form-control" name="workplace[]" required="" value="" /> <label for="role" class="h4">Role :</label> <textarea type="text" class="form-control" name="role[]" required="" value="" ></textarea> <div class="row"> <div class="col-6"> <label for="fw" class="h4">From :</label> <input type="date" class="form-control" name="fw[]" required="" value="" /> </div> <div class="col-6"> <label for="tw" class="h4">To :</label> <input type="date" class="form-control" name="tw[]" required="" value="" /> </div> </div> </div><hr>';
            $('#ex').append(x);
        });
    });
</script>
@endsection