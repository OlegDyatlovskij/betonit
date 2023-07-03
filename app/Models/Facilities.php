<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Exceptions\MyException;

class Facilities extends Model
{
    protected $fillable = ['title', 'description', 'srcset', 'alt', 'src'];

    protected static $headers = ['id', 'title', 'description', 'srcset', 'alt', 'src','created_at', 'updated_at'];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        if (!$data['title'] or !$data['description'] or !$data['srcset'] or !$data['alt'] or !$data['src'])
            throw new MyException('заполните поля');
        //dd($data);
        return self::create($data);
    }
    public static function getAllRecords()
    {
        $records = Facilities::all();
        $records = $records->toArray();
        return $records; 
    }
    public static function getRecord($id)
    {
        $record = Facilities::find($id);
        return $record->toArray();
    }
    public static function getAllId()
    {
        $record = Facilities::pluck('title', 'id');
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Facilities::find($id);
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
        if (!$newData['title'] or !$newData['description'] or !$newData['srcset'] or !$newData['alt'] or !$newData['src'])
            throw new MyException('заполните поля');
        if(Facilities::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
