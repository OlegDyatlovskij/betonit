<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MyException;
class Users extends Model
{
    protected $fillable = ['name', 'phone', 'email'];

    protected static $headers = ['id', 'name', 'phone', 'email', 'created_at', 'updated_at'];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        $email = $request->input('email');
        $phone = $request->input('phone');
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            if (Users::firstWhere('email', $email))
            {
                throw new MyException('Такая почта уже существует');
            }
        } 
        else 
        {
            throw new MyException('Ошибка в адресе почты');
        }
        if (filter_var($phone, FILTER_VALIDATE_INT)) 
        {
            if (Users::firstWhere('phone', $phone))
            {
                throw new MyException('Такой телефон уже существует');
            }
        } 
        else 
        {
            throw new MyException('Ошибка в номере телефона');
        }
        return self::create($data);
    }
    public static function getAllRecords()
    {
        //$records = Users::select('id', 'name', 'phone', 'email')->get();
        $records = Users::all();
        $records = $records->toArray();
        return $records;
    }
    public static function getRecord($id)
    {
        $record = Users::find($id);
        return $record->toArray();
    }
    public static function getAllId()
    {
        $record = Users::pluck('name', 'id');
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Users::find($id);
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
        $email = $request->input('email');
        $phone = $request->input('phone');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            throw new MyException('Ошибка в адресе почты');
        } 
        if (!filter_var($phone, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в номере телефона');
        } 
        if(Users::where('id', $id)->update($newData))
        {
            return true;
        }
        return false;
    }
}
?>