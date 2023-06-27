<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Roles;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Information;
use App\Models\Permissions;
use Illuminate\Support\Facades\Schema;

class TableController extends Controller
{
    public function showUpdateForm($tableName, $id, $updateRecord)
    {
        $tableModel = app("App\\Models\\$tableName");
        $table = $tableModel::getAllRecords();
        if ($tableName === 'information')
            $record = $tableModel::where('INN', $id)->first();
        else
            $record = $tableModel::find($id);
        $home = false;
        $action = 'update';
        return view('layouts.admin', ['action' => $action, 'home' => $home, 'table' => $table, 'tableName' => $tableName, 'updateRecord' => $updateRecord, 'id' => $id, 'record' => $record]);
    }
    public function showForm($tableName, $action, $updateRecord = false)
    {
        $tableModel = app("App\\Models\\$tableName");
        $table = $tableModel::getAllRecords();
        $headers = Schema::getColumnListing($tableName);
        $home = false;
        
        return view('layouts.admin', ['action' => $action, 'home' => $home, 'table' => $table, 'tableName' => $tableName, 'updateRecord' => $updateRecord, 'headers' => $headers]);
    }
}
