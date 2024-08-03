<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // *********************AUTHORISED BA LOGIN NA THAKLE KAJ KORBENA TAI JA KORTE HOBE----
        //-->ata kaj korbena bolbe unothorised karon se chai j amra autorised hoi ba login thaki
        //-->atake authorised korar jonno upore authorize methode false k tru kore dibo tahole e
        //-->authorise hoyejabe kaj korbe(formValidation kaj koranor jonno)
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ //AI FILE TI OPEN KORAR JONNO  : php artisan make:request formValidation
            //ata kaj korbena bolbe unothorised karon se chai j amra autorised hoi ba login thaki
            // -->atake authorised korar jonno upore authorize methode false k tru kore dibo tahole e
            // --> authorise hoyejabe kaj korbe
             "name" => "required|min:3|max:10|alpha|not_in:admin|starts_with:A|ends_with:z",
            "email" => "required|email",
            "price"=>"required|numeric|between:10,100|min:10|max:100",
        ];
    }

    // *** error massage gulu customize korar jonno
    function messages(){
        return [
            // 'title.required' => 'A title is required',
            // 'body.required' => 'A message is required',
        'name.require'=>"name missing this is required",
        'email.required'=>"email missing this is required",
            'price.required'=>"price missing this is required"
        
            ];
    }
    // avabei kaj kore janina akhane kno kaj kortesena dekhate hobe

}
