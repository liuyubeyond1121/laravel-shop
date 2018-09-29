<?php

namespace App\Http\Requests;


class ApplyRefundRequest extends Request
{
    public function rules()
    {
        return [
            'reason' => 'require',
        ];
    }

    public function attributes()
    {
        return [
            'reason' => '原因',
        ];
    }
}


