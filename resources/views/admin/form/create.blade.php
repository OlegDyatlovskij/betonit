<div class="card-header">
    <h3 class="card-title">{{$tableName}}</h3>
</div>
<form method="POST" action="{{ route('record.create', ['table' => $tableName]) }}">
    @csrf
    <div class="card-body">
    @foreach($headers as $header)
    
        @if ($header === "id" or $header === 'created_at' or $header === 'updated_at')
            @continue;
        @endif
        @if ($tableName === 'orders')
            <label>user_id</label>
            <select class="form-control" name="user_id">
                @foreach ($usersId as $id=>$name)
                    <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>

            <label>product_id</label>
            <select class="form-control" name="product_id">
                @foreach ($productsId as $id=>$title)
                    <option value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>

            <label>state</label>
            <select class="form-control" name="state">
                    <option selected value="В ожидании">В ожидании</option>
                    <option value="В обработке">В обработке</option>
                    <option value="Принят">Принят</option>
                    <option value="Отклонён">Отклонён</option>
            </select>
            @break

        @elseif ($tableName === 'permissions')
            @if ($header === 'role_id')
                <label>{{ $header }}</label>
                <select class="form-control" name="{{ $header }}">
                    @foreach ($rolesId as $id=>$role)
                        <option value="{{$id}}">{{$role}}</option>
                    @endforeach
                </select>
                @continue
            @endif
        @endif
        <div class="form-group">
            <label>{{ $header }}</label>
            <input class="form-control" name = "{{ $header }}" placeholder="Enter {{ $header }}">
        </div>
    @endforeach
    </div>
    <div class="card-footer">
        <p><button type="submit" class="btn btn-primary">Add</button>   {{ $errorMessage }}</p>
    </div>
</form>