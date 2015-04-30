<?php namespace App\Http\Requests;

    use App\Http\Requests\Request;

    class CreateOrganisationRequest extends Request {

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
                    'org_name' => 'required|alpha_num|between:3,40',
                    'org_type' => 'required',
                    'org_siren' => 'required|digits:9',
                     'org_ape_naf' => 'required|alpha_num|size:5',
                     'name' => 'required|alpha|min:2',
                     'firstname' => 'required|alpha|min:2',
                     'email' => 'required|email|unique:contacts',
                     'telephone' => 'required|digits_between:8,15',
                     'mobile' => 'required|digits_between:8,15',
                     'adress_1' => 'required|alpha_num|max:255',
                     'adress_2' => 'required|alpha_num|max:255',
                     'zipcode' => 'required|alpha_num|between:4,10',
                     'city' => 'required|alpha|max:150',
                     'country' => 'required|alpha|max:150',
                     'bic' => 'required|alpha_num|size:8',
                     'iban' => 'required|alpha_num|min:27|max:34',
                     'username' => 'unique:contacts'
            ];
        }

    }
