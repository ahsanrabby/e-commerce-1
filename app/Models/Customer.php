<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public static $customer;

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name     = $request->name;
        self::$customer->email    = $request->email ;
        self::$customer->mobile   = $request->mobile ;
        if ($request->password)
        {
            self::$customer->password = bcrypt($request->password);
        }
        else
        {
            self::$customer->password = bcrypt($request->mobile);
        }
        self::$customer->save();
        return self::$customer;
    }
    public static function updateCustomer($request, $id)
    {
        self::$customer = Customer::find($id);
        self::$customer->name        = $request->name;
        self::$customer->mobile        = $request->mobile;
        self::$customer->address        = $request->address;
        self::$customer->date_of_birth        = $request->date_of_birth;
        self::$customer->nid       = $request->nid;
        self::$customer->blood_group       = $request->blood_group;

        self::$customer->save();
    }

}
