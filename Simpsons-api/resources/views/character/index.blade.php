@extends('templates.base')
@section('title','Characters')
@section('header', 'Characters')
@section('content') 
    
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>gender</th>
                        <th>age</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td>{{ $character['id'] }}</td>
                            <td>{{ $character['name'] }}</td>
                            <td>{{ $character['gender'] }}</td>
                            <td>{{ $character['age'] }}</td>
                            <td>{{ $character['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection