<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'application' => 'required',
            'firstname' => 'required|min:5|max:255',
            'lastname' => 'required|min:5|max:255',
            'middlename' => 'required|min:5|max:255',
            'birthdate' => 'required',
            'citizenship' => 'required|min:5|max:255',
            'birthplace' => 'required',
            'residentialaddress' => 'required',
            'email' => 'required|min:5|max:255',
            'religion' => 'required|min:5|max:255',
            'living' => 'required',
            'contactnumber' => 'required|min:5|max:255',
            'mojorlanguages' => 'required',
            'previousschool' => 'required',
            'previousschooladdress' => 'required',
            'schooltable' => 'required',
            'fatherfirstname' => 'required|min:5|max:255',
            'fatherlastname' => 'required|min:5|max:255',
            'fathermiddlename' => 'required|min:5|max:255',
            'fathercitizenship' => 'required|min:5|max:255',
            'fathervisastatus' => 'required|min:5|max:255',
            'fatheremployer' => 'required',
            'fatherofficenumber' => 'required|min:5|max:255',
            'fatherdegree' => 'required',
            'fatherschool' => 'required',
            'fathernumber' => 'required|min:5|max:255',
            'motherfirstname' => 'required|min:5|max:255',
            'motherlastname' => 'required|min:5|max:255',
            'mothermiddlename' => 'required|min:5|max:255',
            'mothercitizenship' => 'required|min:5|max:255',
            'mothervisastatus' => 'required|min:5|max:255',
            'motheremployer' => 'required',
            'motherofficenumber' => 'required|min:5|max:255',
            'motherdegree' => 'required',
            'motherschool' => 'required',
            'mothernumber' => 'required|min:5|max:255',
            'emergencycontactname' => 'required',
            'emergencyofficephone' => 'required|min:5|max:255',
            'emergencymobilenumber' => 'required|min:5|max:255',
            'emergencyaddress' => 'required',
            'emergencyhomephone' => 'required|min:5|max:255',
            'date' => 'required',
            'schoolyear' => 'required|min:5|max:255',
            'date2' => 'required',

        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
