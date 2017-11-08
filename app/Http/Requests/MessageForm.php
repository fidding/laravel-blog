<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Response;
class MessageForm extends Request
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

    public function rules()
    {

        return [
            'username' => 'required',
            'email' => 'required|email',
            'content' => 'required|max:200',
        ];

    }
}
