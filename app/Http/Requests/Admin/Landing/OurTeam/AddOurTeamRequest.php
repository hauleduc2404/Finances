<?php

namespace App\Http\Requests\Admin\Landing\OurTeam;

use Illuminate\Foundation\Http\FormRequest;

class AddOurTeamRequest extends FormRequest
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
            'avatar' => 'required|string|max:255',
            'fullname' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'landing_service_id' => 'required|integer',
            'youtube_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
        ];
    }
}
