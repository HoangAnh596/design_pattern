<button class="btn btn-info">
    <a href="{{ route('user.create') }}">Add user</a>
</button>

@if( session('message') != null )
<div class="text-danger">{{ session('message') }}</div>
@endif
<!-- @if ( session('success' ))
<div class="alert alert-success text-white" role="alert">
    {{ session('success') }}
</div>
@endif -->

<table class="table table-hover">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
                <a class="btn btn-primary" href="{{ asset('user/'.$item->id.'/edit') }}">Edit</a>
                <a class="btn btn-success" href="{{ asset('user/'.$item->id) }}">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>