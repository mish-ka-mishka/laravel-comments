<?php

namespace Comments\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => [
                'string',
                'required',
                'max:' . config('comments.comment_max_length'),
            ],
        ];
    }
}
