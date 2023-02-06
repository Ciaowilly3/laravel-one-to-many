<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'description' =>'required|string',
            'cover_img' =>'required|image',
            'git_link' =>'required|url',
        ];
    }
    public function messages() {
        return [
            "name.required" => "Il nome è obbligatorio",
            "name.min" =>  "Il nome deve avere almeno :min caratteri",
            "name.max" =>  "Il nome deve avere massimo :max caratteri",
            "description.required" => "Il contenuto del progetto è obbligatorio",
            "cover_img.required" => "L'immagine e' richiesta",
            "cover_img.image" => "L'immagine deve essere un URL",
            "git_link.url" => "Il link deve essere un URL",
            "git_link.required" => "Il link deve esserci",
        ];
    }
}
