@extends('backend.layout.master')
@section('title', 'Manage Coins')
@section('main_content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Coins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manage Coins</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create Coins</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <form id="coinForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter name" value="{{ old('name') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="shortname">Short Name</label>
                                                <input type="text" class="form-control" id="shortname" name="shortname"
                                                    placeholder="Enter short name" value="{{ old('shortname') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" class="form-control" id="price" name="price"
                                                    placeholder="Enter price" value="{{ old('price') }}">
                                            </div>
                                            <!-- Add other form fields -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="marketcapacity">Market Capacity</label>
                                                <input type="text" class="form-control" id="marketcapacity"
                                                    name="marketcapacity" placeholder="Enter market capacity"
                                                    value="{{ old('marketcapacity') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="volume">Volume</label>
                                                <input type="text" class="form-control" id="volume" name="volume"
                                                    placeholder="Enter volume" value="{{ old('volume') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="circulatingsupply">Circulating Supply</label>
                                                <input type="text" class="form-control" id="circulatingsupply"
                                                    name="circulatingsupply" placeholder="Enter circulating supply"
                                                    value="{{ old('circulatingsupply') }}">
                                            </div>
                                            <!-- Add other form fields -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="maxsupply">Max Supply</label>
                                                <input type="text" class="form-control" id="maxsupply" name="maxsupply"
                                                    placeholder="Enter max supply" value="{{ old('maxsupply') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fullydilutedmaketcap">Fully Diluted Market Cap</label>
                                                <input type="text" class="form-control" id="fullydilutedmaketcap"
                                                    name="fullydilutedmaketcap" placeholder="Enter fully diluted market cap"
                                                    value="{{ old('fullydilutedmaketcap') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ucid">UCID</label>
                                                <input type="text" class="form-control" id="ucid" name="ucid"
                                                    placeholder="Enter UCID" value="{{ old('ucid') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control-file" id="image"
                                                    name="image" accept="image/*">
                                            </div>
                                            <div id="image-preview" class="mt-2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="links">
                                                <div class="form-group">
                                                    <label for="links">Links</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="links[]"
                                                            placeholder="Link URL" value="{{ old('links.0') }}">
                                                        <input type="text" class="form-control" name="links_name[]"
                                                            placeholder="Link Name" value="{{ old('links_name.0') }}">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-success add-link"
                                                                type="button">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tags">Tags</label>
                                                <textarea class="form-control" id="tags" name="tags" placeholder="Enter tags">{{ old('tags') }}</textarea>
                                            </div>
                                            <div id="tags-container" class="my-2">
                                                @if (old('tags'))
                                                    @foreach (explode(',', old('tags')) as $tag)
                                                        <span class="badge badge-primary mr-1">{{ $tag }}
                                                            <button type="button" class="close"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                                <div id="successMessage" style="display: none;" class="alert alert-success"
                                    role="alert">
                                    Submitted successfully
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Add new link input field
        $(".add-link").click(function() {
            var html =
                '<div class="form-group"><div class="input-group"><input type="text" class="form-control" name="links[]" placeholder="Link URL"><input type="text" class="form-control" name="links_name[]" placeholder="Link Name"><div class="input-group-append"><button class="btn btn-danger remove-link" type="button">-</button></div></div></div>';
            $("#links").append(html);
        });

        // Remove link input field
        $(document).on('click', '.remove-link', function() {
            $(this).closest('.form-group').remove();
        });

        $('#tags').keypress(function(e) {
            if (e.which === 13) {
                var tag = $(this).val().trim();
                if (tag !== '') {
                    var badge = '<span class="badge badge-primary mr-1">' + tag +
                        ' <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></span>';
                    $('#tags-container').append(badge);
                    $(this).val('');
                }
            }
        });

        // Remove tag when close button is clicked
        $(document).on('click', '#tags-container .close', function() {
            $(this).parent().remove();
        });

        $('#image').change(function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html('<img src="' + e.target.result +
                        '" class="img-fluid">');
                };
                reader.readAsDataURL(input.files[0]);
            }
        });

        // Form submission
        $('#coinForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            // Extract tags from tags container
            var tags = [];
            $('#tags-container span').each(function() {
                var tagText = $(this).text().trim().split(' ')[0]; // Get text content of the tag
                tags.push(tagText);
            });
            formData.append('tags', tags.join(','));

            $.ajax({
                type: 'POST',
                url: '{{ route('coin.store') }}', // Replace this with your route
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Reset form
                    $('#coinForm')[0].reset();
                    // Clear error messages
                    $('#coinForm').find('.is-invalid').removeClass('is-invalid');
                    $('#coinForm').find('.invalid-feedback').remove();
                    // Clear tags container
                    $('#tags-container').empty();
                    // Clear image preview
                    $('#image-preview').empty();
                    // Show success message
                    $('#successMessage').text('Submitted successfully').fadeIn().delay(3000)
                        .fadeOut();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        // Clear existing error messages
                        $('#coinForm').find('.is-invalid').removeClass('is-invalid');
                        $('#coinForm').find('.invalid-feedback').remove();
                        // Display validation errors
                        $.each(errors, function(field, messages) {
                            var inputField = $('#' + field);
                            inputField.addClass('is-invalid');
                            $.each(messages, function(index, message) {
                                inputField.after(
                                    '<div class="invalid-feedback">' +
                                    message + '</div>');
                            });
                        });
                    } else {
                        console.log(xhr.responseText);
                        // Show generic error message if status is not 422
                        alert(
                            'An error occurred while submitting the form. Please try again.');
                    }
                }
            });


        });

    });
</script>
@endsection
