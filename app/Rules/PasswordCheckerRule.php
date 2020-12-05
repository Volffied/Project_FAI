<?php

namespace App\Rules;

use App\Model\CustomerModel;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class PasswordCheckerRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($email = null)
    {
        $this->email = $email;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(session()->has('userLogin'))
            $cust = CustomerModel::find(session()->get('userLogin')->id);
        else $cust = CustomerModel::where('email',$this->email)->first();
        if(Hash::check($value,$cust->password)) return true;
        else return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Wrong Password';
    }
}
