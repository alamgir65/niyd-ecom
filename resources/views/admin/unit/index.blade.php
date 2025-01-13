@extends('admin.master')
@section('title')
    manage-unit
@endsection

@section('body')

    <div class="row">
        <div class="col">
            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Unit</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($units as $unit)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$unit->name}}</td>
                                <td>{{$unit->code}}</td>
                                <td>{{$unit->description}}</td>
                                <td>{{$unit->status==0?'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('unit.edit',['id'=>$unit->id])}}" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('unit.delete',['id'=>$unit->id])}}" onclick="confirm('Are you sure you want to delete this Unit?')" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
