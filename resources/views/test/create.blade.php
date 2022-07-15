<div class="container">
    <form action="{{ route('test.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Name: </label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Number: </label>
                    <input type="text" name="number" class="form-control" value="{{ old('number') }}">
                    @error('number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
