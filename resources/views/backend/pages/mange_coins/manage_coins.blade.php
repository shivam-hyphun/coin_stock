@extends('backend.layout.master')
@section('title', 'Dashboard')
@section('main_content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container">
                <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">Create New Coins</a>
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Short Name</th>
                            <th>Price</th>
                            <th>Market Capacity</th>
                            <th>Volume</th>
                            <th>Circulating Supply</th>
                            <th>FDMC</th>
                            <th>UCID</th>
                            <th>Image</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="productForm" name="productForm" class="form-horizontal">
                                <input type="hidden" name="product_id" id="product_id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Name" value="" maxlength="50" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Details</label>
                                    <div class="col-sm-12">
                                        <textarea id="detail" name="detail" required placeholder="Enter Details" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('coin.index') }}",
    columns: [
        {
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            title: 'No'
        },
        {
            data: 'name',
            name: 'name',
            title: 'Name'
        },
        {
            data: 'short_name',
            name: 'short_name',
            title: 'Short Name'
        },
        {
            data: 'price',
            name: 'price',
            title: 'Price'
        },
        {
            data: 'market_capacity',
            name: 'market_capacity',
            title: 'Market Capacity'
        },
        {
            data: 'volume',
            name: 'volume',
            title: 'Volume'
        },
        {
            data: 'circulating_supply',
            name: 'circulating_supply',
            title: 'Circulating Supply'
        },
        {
            data: 'fully_diluted_market_cap',
            name: 'fully_diluted_market_cap',
            title: 'FDMC'
        },
        {
            data: 'ucid',
            name: 'ucid',
            title: 'UCID'
        },
        {
            data: 'image',
            name: 'image',
            title: 'Image'
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            title: 'Action'
        }
    ]
});

        $('#createNewProduct').click(function() {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Create New Product");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editProduct', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('coin.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeading').html("Edit User");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                $('#name').val(data.name);
                $('#detail').val(data.detail);
            })
        });

        $('#saveBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#productForm').serialize(),
                url: "{{ route('coin.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#productForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        $('body').on('click', '.deleteProduct', function() {
            var product_id = $(this).data("id");
            confirm("Are You sure want to delete !");
            $.ajax({
                type: "DELETE",
                url: "{{ route('coin.store') }}" + '/' + product_id,
                success: function(data) {
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });

    });
</script>
