@extends('template')

@section('content')
    <h1 class="mb-3 ms-2">Manage Item</h1>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col" class="table-warning">No</th>
                <th scope="col"class="table-warning">Book Name</th>
                <th scope="col"class="table-warning">Book Author</th>
                <th scope="col"class="table-warning">Synopsis</th>
                <th scope="col"class="table-warning">Book Price</th>
                <th scope="col"class="table-warning">Update Book</th>
                <th scope="col"class="table-warning">Delete Book</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item as $p)
                <tr>
                    <th scope="row" class="table-warning">{{ $loop->iteration }}</th>
                    <td class="table-warning">{{ $p->title }}</td>
                    <td class="table-warning">{{ $p->author }}</td>
                    <td class="table-warning">{{ $p->synopsis }}</td>
                    <td class="table-warning">{{ $p->price }}</td>
                    <td class="table-warning">
                        <a href="/updateitem/{{ $p->id }}" type="button" class="btn btn-warning"><img
                                src="ctrl/edit.png" alt=""></a>
                    </td>
                    <td class="table-warning">
                        <a href="/delete/{{ $p->id }}" type="button" class="btn btn-warning"><img
                                src="ctrl/delete.png" alt=""></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
