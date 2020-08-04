<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionnaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name'              => 'required|size: 50',
            'age'               => 'required|digits: 2|min: 5',
            'gender'            => 'required',
            'phone'             => 'nullable|numeric',
            'email'             => 'required|email',
            'shouldfixed'       => 'required|size: 100',
            'goodthings'        => 'required|size: 100',
            'ordertype'         => 'required|size: 100',
            'foodordered'       => 'required|size: 100',
            'foodsatisfaction'  => 'required|numeric|digits: 1|min: 1|max: 3',
            'drinkordered'      => 'required|size: 100',
            'drinksatisfaction' => 'required||numeric|digits: 1|min: 1|max: 3',
            'favoritefood'      => 'required|size: 100',
            'favoritedrink'     => 'required|size: 100',
            'menusuggestion'    => 'required|size: 100',
            'price'             => 'required|numeric|digits: 1|min: 1|max: 3',
            'howoften'          => 'required|numeric|digits: 1|min: 1|max: 3',
            'references'        => 'required|numeric|digits: 1|min: 1|max: 3',
            'promo'             => 'required|numeric|digits: 1|min: 1|max: 3',
            'distance'          => 'required|numeric|digits: 1|min: 1|max: 3',
            'stafffriendliness' => 'required|numeric|digits: 1|min: 1|max: 3',
            'servicequality'    => 'required|numeric|digits: 1|min: 1|max: 3',
            'outletcleanliness' => 'required|numeric|digits: 1|min: 1|max: 3'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Bagian ini wajib diisi.',
            'name.size'             => 'Maksimum 50 karakter.',
            'age.required'          => 'Bagian ini wajib diisi.',
            'age.digits'            => 'Maksimum 2 karakter.',
            'age.min'               => 'Minimum umur 5 tahun.',
            'gender.required'       => 'Jenis kelamin harus dipilih.',
            'phone.numeric'         => 'Bagian ini harus diisi dengan angka.',
            'email.required'        => 'Bagian ini harus diisi.',
            'email.email'           => 'Format penulisan e-mail salah.',
            'shouldfixed.required'  => 'Bagian ini wajib diisi.',
            'shouldfixed.size'      => 'Maksimum 100 karakter',
            'goodthings.required'   => 'Bagian ini wajib diisi.',
            'goodthings.size'       => 'Maksimum 100 karakter.',
            'ordertype.required'    => 'Bagian ini wajib diisi.',
            'ordertype.size'        => 'Maksimum 100 karakter.',
        ];
    }
}
