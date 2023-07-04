@if (!$updateRecord)
@php
    $updateRecord = true;
@endphp
<div class="card">
    <div class="card-header">
        <h3> {{$tableName}} </h3>
    </div>
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                        <thead>
                            <tr>
                                @foreach($headers as $header)
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">{{$header}}</th>
                                @endforeach
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Action</th>
                            </tr>
                        </thead>
                        <tbody>  
                        @foreach($table as $record)
                            <tr>
                                @foreach($record as $key => $value)
                                <td>{{ $value }}</td>
                                @endforeach
                                <td>
                                    <form action="{{ route('form.update', ['table' => $tableName, 'id' => $record['id'], 'updateRecord' => $updateRecord]) }}" method="POST">
                                    @method('GET')
                                    @csrf                                    
                                    <button type="submit">Update</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                @foreach($headers as $header)
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">{{$header}}</th>
                                @endforeach
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Действие</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>
@else
<div class="card-header">
    <h3 class="card-title">{{$tableName}}</h3>
</div>
<form method="POST" action="{{ route('record.update', ['id' => $record['id'], 'table' => $tableName]) }}">
    @csrf
    @method('PUT')
    <div class="card-body">
    @if ($tableName === 'orders')
        <label>user_id</label>
        <select class="form-control" name="user_id">
            @foreach ($usersId as $id=>$name)
                @php
                @endphp
                @if ($record['user_id'] === $id)
                    <option value="{{ $id }}" selected>{{ $name }}</option>
                    @continue
                @endif
                    <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select> 
        <label>product_id</label>
        <select class="form-control" name="product_id">
            @foreach ($productsId as $id=>$title)
                @if ($record['product_id'] === $id)
                    <option selected value="{{ $id }}">{{ $title }}</option>
                    @continue
                @endif
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        <label>state</label>
        <select class="form-control" name="state">
                <option value="В ожидании" {{ $record['state'] === 'В ожидании' ? 'selected' : '' }}>В ожидании</option>
                <option value="В обработке" {{ $record['state'] === 'В обработке' ? 'selected' : '' }}>В обработке</option>
                <option value="Принят" {{ $record['state'] === 'Принят' ? 'selected' : '' }}>Принят</option>
                <option value="Отклонён" {{ $record['state'] === 'Отклонён' ? 'selected' : '' }}>Отклонён</option>
        </select>
    @else
        @foreach($record as $key => $value)
            @if ($key === "id" or $key === 'created_at' or $key === 'updated_at')
                @continue;
            @endif
            @if ($tableName === 'permissions')
                @if ($key === 'role_id')
                    <label>{{ $key }}</label>
                    <select class="form-control" name="{{ $key }}">
                        @foreach ($rolesId as $id=>$role)
                            @if ($record['role_id'] === $id)
                                <option selected value="{{ $id }}">{{ $role }}</option>
                                @continue
                            @endif
                                <option value="{{ $id }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @continue
                @endif
            @endif
            <div class="form-group">
                <label>{{ $key }}</label>
                <input class="form-control" name = "{{ $key }}" placeholder="{{ $value }}" value="{{ $value }}">
            </div>
        @endforeach
    @endif
    </div>
    <div class="card-footer">
        <p><button type="submit" class="btn btn-primary">Update</button>   {{ $errorMessage }}</p>
    </div>
</form>
@endif
