<button class="btn btn-info">
    <a href="{{ route('test.create') }}">Add Test</a>
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
        <th scope="col">Number</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
        @foreach ($test as $item)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a class="btn btn-primary" href="{{ asset('test/'.$item->id.'/edit') }}">Edit</a>
                <a class="btn btn-success" href="{{ asset('test/'.$item->id) }}">Detail</a>
                <form action="{{ route('test.destroy', ['test' => $item->id]) }}" method="post">
                    @csrf
                    @method('Delete')
                    <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Do you really want to delete?')" />
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>