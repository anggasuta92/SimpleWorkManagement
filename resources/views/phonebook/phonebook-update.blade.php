@extends('layouts.main-app')

@section('content')
<form action="{{ route('phonebook') }}" method="get" name="ph">
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Phone Book / Edit</h3>
                </div>
                <div class="box-body">                    
                    <form role="form">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" value="{{ $data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address" value="{{ $data->address }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Mail" value="{{ $data->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" value="{{ $data->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea name="note" class="form-control" id="note">{{ $data->note }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('phonebook') }}" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
