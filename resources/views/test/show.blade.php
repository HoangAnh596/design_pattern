<div class="card mb-3" style="width: 50rem;">
    <div class="row g-0">
        
        <div class="col-md-8">
            <div class="card-body">
                <h1 style="color: red" class="card-title">Personal information</h1>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Name:</b> {{ $test->name }}</li>
                <li class="list-group-item"><b>Number:</b> {{ $test->number }}</li>
                <li class="list-group-item"><b>Email:</b> {{ $test->email }}</li>
            </ul>
        </div>
    </div>
</div>
