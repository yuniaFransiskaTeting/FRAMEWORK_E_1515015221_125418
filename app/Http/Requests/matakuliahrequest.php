<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class matakuliahrequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validasi = [
        'title'=>'required',
        'keterangan'=>'required'];
        if($this->is('ruangan/tambah')){
            $validasi['keterangan'] = 'required';
        }
        return $validasi;
    }
}
