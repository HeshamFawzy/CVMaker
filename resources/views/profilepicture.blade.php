@extends('layout') @section('content')
<div>
    <div class="container" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-md-6 col-lg-9 offset-lg-0">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1 class="text-center">Profile Picture</h1>
                            <div class="form-group">
                                <label for="image" class="h4">Image :</label>
                                <input id="upload" type="file" class="form-control" name="image" accept="image/gif, image/jpeg, image/png" required="" />
                            </div>

                            <div class="form-group">
                                <input style="float: right;" type="submit" class="btn btn-primary float-right" name="submit" value="Next" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <section id="vertical-menu">
                    <img id="img" src="#" alt="Uploaded Image" width="100%" />
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#upload').change(function() {
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#img').attr('src', '/assets/no_preview.png');
            }
        });
    });
</script>
@endsection