<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MyException;
use Illuminate\Http\Request;
class Products extends Model
{
    protected $fillable = ['title', 'price', 'period', 'description'];

    protected static $headers = ['id', 'title', 'price', 'period', 'description', 'created_at', 'updated_at'];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        $price = $request->input('price');
        if (!filter_var($price, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в стоимости');
        } 
        return self::create($data);
    }
    public static function getAllRecords()
    {
        $trace = explode("\\", debug_backtrace()[0]['file']);
        $records = Products::all();
        $records = $records->toArray();
        if (empty($records))
        {
            for($i = 0; $i <3; $i++)
            {
                $records[$i] = ['title' => '#', 'price' => '#', 'period' => '#', 'description' => '#'];

            }
        }
        if (end($trace) === "TableController.php")
            return $records;
        foreach ($records as &$record)
        {
            foreach ($record as $key=>$value)
            {
                if ($key === 'description')
                {
                    
                    $record[$key] = explode("&", $record[$key]);
                }
            }
            
        }
        return $records; 
    }
    public static function getRecord($id)
    {
        $record = Products::find($id);
        return $record->toArray();
    }
    public static function getAllId()
    {
        $record = Products::pluck('title', 'id');
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Products::find($id);
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
        $price = $request->input('price');
        if (!filter_var($price, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в стоимости');
        } 
        if(Products::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
?>