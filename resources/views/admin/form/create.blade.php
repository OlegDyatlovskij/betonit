<div class="card-header">
    <h3 class="card-title">{{$tableName}}</h3>
</div>
<form method="POST" action="{{ route('record.create', ['table' => $tableName]) }}">
    @csrf
    <div class="card-body">
    @foreach($headers as $key)
    
        @if ($key === "id" or $key === 'created_at' or $key === 'updated_at')
            @continue;
        @endif
        <div class="form-group">
            <label>{{ $key }}</label>
            <input class="form-control" name = "{{ $key }}" placeholder="Enter {{ $key }}">
        </div>
    @endforeach
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>