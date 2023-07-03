<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class Orders extends Model
{
    protected $fillable = ['product_id', 'user_id', 'state'];

    protected static $headers = ['id', 'product_id', 'user_id', 'state', 'created_at', 'updated_at'];
    
    protected $attributes = [
        'state' => 'В ожидании',
    ];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        return self::create($data);
    }
    public static function getAllRecords()
    {
        $records = Orders::all();
        $records = $records->toArray();
        foreach ($records as &$record)
        {
            foreach ($record as $key => $value)
            {
                if ($key === 'product_id')
                {
                    $record[$key] = DB::table('products')->where('id', $value)->value('title');
                }
                else if ($key === 'user_id')
                {
                    $record[$key] = DB::table('users')->where('id', $value)->value('name');
                }
            }
        }
        return $records; 
    }

    public static function getRecord($id)
    {
        $record = Orders::find($id);
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Orders::find($id);
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
        if(Orders::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
?>