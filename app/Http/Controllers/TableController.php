<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Roles;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Information;
use App\Models\Permissions;
use App\Models\Facilities;
use Illuminate\Support\Facades\Schema;

class TableController extends Controller
{
    public function showUpdateForm($tableName, $id, $updateRecord, $errorMessage = '')
    {
        $tableModel = app("App\\Models\\$tableName");
        $record = $tableModel::getRecord($id);
        $action = 'update';
        $output = [
            'action' => $action, 
            'tableName' => $tableName, 
            'updateRecord' => $updateRecord, 
            'record' => $record,
            'errorMessage' => $errorMessage
        ];
        if ($tableName === 'orders')
        {
            $usersId = Users::getAllId();
            $productsId = Products::getAllId();
            $output['usersId'] = $usersId;
            $output['productsId'] = $productsId;
        }
        else if ($tableName === 'permissions')
        {
            $rolesId = Roles::getAllId();
            $output['rolesId'] = $rolesId;
        }
        return view('layouts.admin', $output);
    }
    public function showForm($tableName, $action, $errorMessage = '')
    {
        $updateRecord = false;
        $tableModel = app("App\\Models\\$tableName");
        $headers = $tableModel::getHeaders();
        $output = [
            'tableName' => $tableName, 
            'action' => $action,
            'updateRecord' => $updateRecord,
            'headers' => $headers,
            'errorMessage' => $errorMessage
        ];
        if ($action != 'create')
        {
            $table = $tableModel::getAllRecords();
            $output['table'] = $table;
        }
        else
        {
            if ($tableName === 'orders')
            {
                $usersId = Users::getAllId();
                $productsId = Products::getAllId();
                $output['usersId'] = $usersId;
                $output['productsId'] = $productsId;
            }
            else if ($tableName === 'permissions')
            {
                $rolesId = Roles::getAllId();
                $output['rolesId'] = $rolesId;
            }
        }
        return view('layouts.admin', $output);
            /*[
                'action' => $action, 
                'table' => $table, 
                'tableName' => $tableName, 
                'updateRecord' => $updateRecord, 
                'headers' => $headers
            ]*/
    }
}
