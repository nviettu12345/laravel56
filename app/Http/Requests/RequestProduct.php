<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
        return [
            'pro_name'=>'required|unique:products,pro_name,'.$this->id,
            'pro_category_id'=>'required',
            'pro_avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'pro_name.required' => 'Trường này không được để trống',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại',
            'pro_category_id.required' => 'Trường này không được để trống',
            'pro_avatar.max' => 'file tải lên kích thước tối đa 2M',
            'pro_avatar.image' => 'file tải lên sai định dạng'  
        ];
    }
}
