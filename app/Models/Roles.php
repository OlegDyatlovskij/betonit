<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Roles extends Model
{
    protected $table = 'roles';

    protected $fillable = ['role'];

    public static function createRecord($data)
    {
        return self::create($data);
    }
    public static function getAllRecords()
    {
        return self::all(); // возвращается в виде модели. Чтобы представить в виде ассоциативного массива метод: ->toArray()
    }

    public static function deleteRecord($id)
    {
        $record = Roles::find();
        if ($record)
        {
            $record->delete();
            return true;
        }
        return false;
    }
    public static function updateData($id, $newData)
    {
        if(Roles::where('id', $id)->update($newData)) // update возвращает кол-во обновленных строк, или 0 (false) если не найдено записей по условию
        {
            return true;
        }
        return false;
    }
}
?>