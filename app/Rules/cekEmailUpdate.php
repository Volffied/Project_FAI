<?php

namespace App\Rules;

use App\Model\PegawaiModel;
use Illuminate\Contracts\Validation\Rule;

class cekEmailUpdate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
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
        $dataPegawai = PegawaiModel::withTrashed()->where('id','<>',$this->id)->get();
        $boolmasuk = false;

        foreach ($dataPegawai as $data) {
            if($data->email === $value  && !$boolmasuk){
                $boolmasuk = true;
            }
            else{
                $boolmasuk = false;
            }
        }

        if($boolmasuk){
            return false;
        }else if(!$boolmasuk){
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Alamat Email Tidak Boleh Kembar!';
    }
}
