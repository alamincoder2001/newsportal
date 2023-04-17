@extends('layouts.backend_master')

@section('title', 'Create User')
@section('breadcrumb_title', 'Create User')
@section('breadcrumb_item', 'Create User')

@section('content')
    <create-user></create-user>
@endsection

{{-- <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form id="addUser" onsubmit="addUser(event)">
                    <div class="row justify-content-evenly">
                        <!-- user create form -->
                        <div class="col-md-5">
                            <div class="form-group row mb-2">
                                <input type="hidden" name="admin_id" id="admin_id">
                                <label for="name" class="col-md-3">Name<span
                                        class="text-danger fw-bold">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" id="name" name="name" class="form-control"
                                        autocomplete="off" placeholder="Name">
                                    <span class="error-name error text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="name" class="col-md-3">User Name<span
                                        class="text-danger fw-bold">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" id="username" name="username" class="form-control"
                                        placeholder="User Name" autocomplete="off">
                                    <span class="error-username error text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="name" class="col-md-3">Email<span
                                        class="text-danger fw-bold">*</span></label>
                                <div class="col-md-9">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" autocomplete="off">
                                    <span class="error-email error text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row mb-2">
                                <label for="name" class="col-md-3">Role<span
                                        class="text-danger fw-bold">*</span></label>
                                <div class="col-md-9">
                                    <select id="role" name="role" class="form-select shadow-none">
                                        <option value="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                    <span class="error-role error text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="name" class="col-md-3">Password<span
                                        class="text-danger fw-bold">*</span></label>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Password" autocomplete="off">
                                    <span class="error-password error text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group row text-end">
                                <label for="name" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-success text-light">
                                        <i class="fa fa-floppy-o pe-1" aria-hidden="true"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <!-- user list -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User List</h5>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script>
        //get Data
        var table = $('#datatable').DataTable({
            ajax: location.origin + "/admin/user-fetch",
            order: [
                [0, "desc"]
            ],
            columns: [{
                    data: 'id',
                },
                {
                    data: 'name',
                },
                {
                    data: 'username',
                },
                {
                    data: 'email',
                },
                {
                    data: 'role',
                },
                {
                    data: null,
                    render: data => {
                        return `
                            ${'<a href="/admin/user/permission/'+data.id+'" title="permission"> <i class="fa fa-cogs" aria-hidden="true"></i></a>'}
                            ${'<a href="" onclick="Edit('+data.id+')" title="edit"> <i class="fa fa-edit" aria-hidden="true"></i></a>'}
                            ${'<a href="" onclick="Delete('+data.id+')" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>'}
                        `;
                    }
                }
            ],
        });

        // store user
        function addUser(event) {
            event.preventDefault();

            var formdata = new FormData(event.target)
            $.ajax({
                url: location.origin + "/admin/user",
                method: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $("#addUser").find(".error").text("");
                },
                success: res => {
                    if (res.error) {
                        $.each(res.error, (index, value) => {
                            $("#addUser").find(".error-" + index).text(value);
                        })
                    } else {
                        table.ajax.reload()
                        $("#addUser").trigger('reset')
                        $("#addUser").find("#admin_id").val('')
                        $(".changeBtn").text("Save User").removeClass("btn-primary").addClass("btn-success");
                        $.notify(res, "success");
                    }
                }
            })
        }

        // edit fetch data
        function Edit(id) {
            event.preventDefault()
            $(".changeBtn").text("Update User").removeClass("btn-success").addClass("btn-primary");
            $.ajax({
                url: location.origin + "/admin/user-fetch/" + id,
                method: "GET",
                dataType: "JSON",
                success: res => {
                    $.each(res.data, (index, value) => {
                        $("#addUser").find("#" + index).val(value);
                    })
                    $("#addUser").find("#admin_id").val(res.data.id);
                    if (res.data.image != null) {
                        document.querySelector('.img').src = location.origin + "/" + res.data.image
                    } else {
                        document.querySelector('.img').src = location.origin + "/noImage.jpg"
                    }
                }
            })
        }

        // delete department
        function Delete(id) {
            event.preventDefault()
            if (confirm("Are you sure want to delete this data!")) {
                $.ajax({
                    url: location.origin + "/admin/user/delete",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: (response) => {
                        $.notify(response, "success");
                        table.ajax.reload();
                    }
                })
            }
        }
    </script>
@endpush --}}
