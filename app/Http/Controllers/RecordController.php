<?php
namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Information;
use App\Models\Permissions;
use App\Models\Facilities;
use Illuminate\Http\Request;
use App\Exceptions\MyException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
class RecordController extends Controller
{
    public function fillMainIndex()
    {
        $informationModel = app("App\\Models\\information");
        $informationRecords = $informationModel::getAllRecords();
        
        $productsModel = app("App\\Models\\products");
        $productsRecords = $productsModel::getAllRecords();

        $facilitiesModel = app("App\\Models\\Facilities");
        $facilitiesRecords = $facilitiesModel::getAllRecords();

        return view(
            'index', 
            [
                'productsRecords' => $productsRecords, 
                'informationRecords' => $informationRecords,
                'facilitiesRecords' => $facilitiesRecords
            ]
        );
    }
    public function fillPrivacyPolicy()
    {
        $informationModel = app("App\\Models\\information");
        $informationRecords = $informationModel::getAllRecords();
        return view(
            'privacy-policy', 
            [
                'informationRecords' => $informationRecords 
            ]
        );
    }
    public function create(Request $request, $tableName, $main = false)
    {
        $tableModel = app("App\\Models\\$tableName");
        try
        {
            $tableModel::createRecord($request);
        }
        catch (MyException $e)
        {
            return redirect()->route('table.action', [
                'table' => $tableName, 
                'action' => 'create', 
                'errorMessage' => $e->getErrorMessage()
            ]);
        }
        if ($main)
            return redirect()->route('main.index');
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'create']);
    }

    public function update(Request $request, $id, $tableName)
    {
        $tableModel = app("App\\Models\\$tableName");
        try
        {
            $tableModel::updateData($id, $request);
        }
        catch (MyException $e)
        {
            return redirect()->route('form.update', [
                'table' => $tableName, 
                'id' => $id,
                'updateRecord' => true,
                'errorMessage' => $e->getErrorMessage()
            ]);
        }
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'update']);
    }

    public function delete(Request $request, $id, $tableName)
    {
        $tableModel = app("App\\Models\\$tableName");
        $tableModel::deleteRecord($id);
        return redirect()->route('table.action', ['table' => $tableName, 'action' => 'delete']);
    }
}
?>