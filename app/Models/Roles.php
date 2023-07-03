<?php

namespace App\Models;

use App\Exceptions\MyException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Roles extends Model
{
    protected $fillable = ['role'];

    protected static $headers = ['id', 'role', 'created_at', 'updated_at'];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        if (!$data['role'])
            throw new MyException('заполните поля');
        return self::create($data);
    }
    public static function getAllRecords()
    {
        $records = Roles::all();
        $records = $records->toArray();
        return $records; 
    }
    public static function getRecord($id)
    {
        $record = Roles::find($id);
        return $record->toArray();
    }
    public static function getAllId()
    {
        $record = Roles::pluck('role', 'id');
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Roles::find($id);
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
        if(Roles::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
?>