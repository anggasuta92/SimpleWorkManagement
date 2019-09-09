@extends('layouts.main-app')

@section('content')
<form action="{{ route('phonebook') }}" method="get" name="ph">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Phone Book</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 350px;">
                            <input type="text" name="q" class="form-control pull-right" placeholder="Search number...">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                <a href="" class="btn btn-success">New Phone Number</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 70px;">#</th>
                            <th style="width: 200px;">Customer</th>
                            <th style="width: 320px;">Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                        </tr>
                        @foreach ($phonebooks as $ph)
                        <tr>
                            <td>
                                <a href="{{ route('phonebook.edit', $ph->id) }}" title="Update this data..." class="glyphicon glyphicon-pencil text-blue"></a> &nbsp;
                                <a href="" title="Delete this data..." class="glyphicon glyphicon-remove text-red"></a>
                            </td>
                            <td>- non customer -</td>
                            <td>{{ $ph->name }}</td>
                            <td>{{ $ph->address }}</td>
                            <!-- <td><span class="label label-success">Approved</span></td>-->
                            <td>{{ $ph->phone_number }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
            {{ $phonebooks->links() }}
        </div>
    </div>
</form>
@endsection
