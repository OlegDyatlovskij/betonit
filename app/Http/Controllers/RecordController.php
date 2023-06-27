<?php
namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Information;
use App\Models\Permissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RecordController extends Controller
{
    public function fillMainIndex()
    {
        $informationModel = app("App\\Models\\information");
        $informationRecords = $informationModel::getAllRecords();
        //$informationHeaders = Schema::getColumnListing('information');

        $productsModel = app("App\\Models\\products");
        $productsRecords = $productsModel::getAllRecords();
        //dd(json_decode($productsRecords->toArray()[0]['description']));
        //$productsHeaders = Schema::getColumnListing('products');
        return view(
            'index', 
            [
                'productsRecords' => $productsRecords, 
                'informationRecords' => $informationRecords 
            ]
        );
    }
    public function create(Request $request, $tableName, $main = false)
    {
        $tableModel = app("App\\Models\\$tableName");
        $data = $request->except('_token');
        //$data['role'] = $request->input('role');
        $tableModel->fill($data);
        $tableModel->save();
        if ($main)
            return redirect()->route('main.index');
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'create']);
    }

    public function update(Request $request, $id, $tableName)
    {
        $tableModel = app("App\\Models\\$tableName");
        
        if ($tableName === 'information')
        {
            $record = $tableModel::where('INN', $id)->first();
        } 
        else
        {
            $record = $tableModel::find($id);
            dd("ошибка");
        }
        $fillable = $record->getFillable();
        foreach ($fillable as $field)
        {
            if ($request->has($field) and $request->filled($field))
            {
                $record->$field = $request->input($field);
            }
        }
        $record->save();
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'update']);
    }

    public function delete(Request $request, $id, $tableName)
    {
        $tableModel = app("App\\Models\\$tableName");
        if ($tableName === 'information')
        {
            $tableModel->where('INN', $id)->delete();
        }
        else
        {
            $tableModel->where('id', $id)->delete();
        }
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'delete']);
    }
}
?>