<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MyException;
class Information extends Model
{
    protected $fillable = ['INN', 'company', 'phone', 'address', 'email', 'skype', 'whatsapp', 'telegram'];

    protected static $headers = [
        'id', 'INN', 'company', 'phone', 'address', 'email', 
        'skype', 'whatsapp',	'telegram', 'created_at', 'updated_at'
    ];

    public static function createRecord(Request $request)
    {
        $data = $request->except('_token');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $inn = $request->input('INN');
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            if (Information::firstWhere('email', $email))
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
            if (Information::firstWhere('phone', $phone))
            {
                throw new MyException('Такой телефон уже существует');
            }
        } 
        else 
        {
            throw new MyException('Ошибка в номере телефона');
        }
        return self::create($data);
        if (!filter_var($inn, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в номере ИНН');
        }
    }
    public static function getAllRecords()
    {
        $trace = explode("\\", debug_backtrace()[0]['file']);
        $records = Information::all();
        $records = $records->toArray();
        if (end($trace) === "TableController.php")
            return $records;
        if (empty($records))
            $records[0] = ['INN' => '2130183567', 
            'company' => 'ООО «Команда Ф5»', 
            'phone' => '88002009397', 
            'address' => "Россия, г. Чебоксары, ул. Карла Маркса, 52/9", 
            'email' => 'hello@proplan.su', 
            'skype' => '#', 
            'whatsapp' => 
            '#', 'telegram' => '#'];
        return $records; 
    }

    public static function getRecord($id)
    {
        $record = Information::find($id);
        return $record->toArray();
    }
    public static function getHeaders()
    {
        return self::$headers;
    }
    public static function deleteRecord($id)
    {
        $record = Information::find($id);
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
        $inn = $request->input('INN');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            throw new MyException('Ошибка в адресе почты');
        } 
        if (!filter_var($phone, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в номере телефона');
        }
        if (!filter_var($inn, FILTER_VALIDATE_INT)) 
        {
            throw new MyException('Ошибка в номере ИНН');
        }
        // update возвращает кол-во обновленных строк, или 0 (false) если не найдено записей по условию
        if(Information::where('id', $id)->update($newData)) 
        {
            return true;
        }
        return false;
    }
}
?>