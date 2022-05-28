<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SummonerRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'serverName' => ['string', 'max:255'],
            'summonerName' => ['string', 'max:255'],
        ];
    }
}
