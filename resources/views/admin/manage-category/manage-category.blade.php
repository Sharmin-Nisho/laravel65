@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading panel-title text-center">
                        <span class="text-success">All Category Info Goes Here:</span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Status</th>
                                <th>Take_Action</th>
                            </tr>

                            <tr>
                                <td>demo</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>
                                    <a href="" class="btn btn-info btn-xs" title="Edit Category">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a> ||
                                    <a href="" onclick="return confirm('Are you sure to delete this category?')" class="btn btn-danger btn-xs" title="Delete Category">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection