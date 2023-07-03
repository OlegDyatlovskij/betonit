<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MyException;
class Permissions extends Model
{
    protected $fillable = ['role_id', 'name', 'login', 'password'];

    protected static $headers = ['id', 'role_id', 'name', 'login', 'password', 'created_at', 'updated_at'];

    public static function createRecord(Request $request)
    {
        $data['role_id'] = $request->input('role_id');
        $data['name'] = $request->input('name');
        $data['login'] = $request->input('login');
        $data['password'] = Hash::make($request->input('password'));
        if (Permissions::firstWhere('login', $data['login']))
        {
            throw new MyException('Такой логин уже существует');
        }
        return self::create($data);
    }
    public static function getAllRecords()
    {
        $records = Permissions::all();
        $records = $records->toArray();
        foreach ($records as &$record)
        {
            foreach ($record as $key => $value)
            {
                if ($key === 'role_id')
                {
                    $record[$key] = DB::table('roles')->where('id', $value)->value('role');
                }
            }
        }
        return $records; 
    }
    public static function getRecord($id)
    {
        $record = Permissions::find($id);
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Permissions::find($id);
        if ($record)
        {
            $record->delete();
            return true;
        }
        return false;
    }
    public static function updateData($id, Request $request)
    {
        $newData = $request->except('_token', '_method');
        $login = $request->input('login');
        if(Permissions::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
?>