<?php namespace App\Http\Controllers;

    //use App\Http\Requests\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Request;
    // FORM REQUEST //
    use App\Http\Requests\CreateOrganisationRequest;
    // MODEL //
    use App\Organisation;
    use App\Site;
    use App\Contact;
    use App\Setting;
    use Mail;
    use App;
    use Auth;


    class OrganisationsController extends Controller {

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {

        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            return view('organisations.create');
        }


        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */

        public function store(CreateOrganisationRequest $request)
        {
            $org = new Organisation($request->except('name','firstname','email','function','telephone','mobile'));
            $site = new Site($request->only('adress_1','adress_2','zipcode','city','country'));
            $contact = new Contact($request->only('name','firstname','email','function','telephone','mobile'));

            $org->save();
            $site->siref = $org->org_siren;
            $i = 1;

            $checkcontact = Contact::where('username','LIKE','%'. substr($this->usernameGen(Request::input('firstname'), Request::input('name'), Request::input('org_name'),$i),0,2) . '%')->get();

            if($checkcontact)
            {
                $contact->username = $this->usernameGen(Request::input('firstname'), Request::input('name'), Request::input('org_name'),$checkcontact->count() + 1);
            }
            else
            {
                $contact->username = $this->usernameGen(Request::input('firstname'), Request::input('name'), Request::input('org_name'),1);
            }
            $contact->password = $plainpwd = $this->passwordGenerator(10);
            $contact->confirmtoken = $token = md5( uniqid(mt_rand(), true) );
            $contact->save();
            $org->sites()->save($site);
            $org->contacts()->attach($contact->id);

            Mail::send('emails.confirm',['firstname' => Request::input('firstname'),'username' => $contact->username,'password' => $plainpwd,'token' => $token],function($message)
            {
                $message->to(Request::input('email'))->subject("Confirmation d'ouverture de compte client");
            });
            return redirect()->back();
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function show($id)
        {
            //
        }

        public function usernameGen($firstname,$name,$corp,$i)
        {
            return substr($name,0,1) . substr($firstname,0,1) . $i . '-' . $corp;
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update($id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy($id)
        {
            //
        }

        function passwordGenerator($chars = 8) {
            $letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            return substr(str_shuffle($letters), 0, $chars);
        }

        public function confirm($token)
        {
            $contact =  Contact::where('confirmtoken','=', $token)->first();
            if($token === $contact->confirmtoken)
            {
                $contact->active = 1;
                $contact->save();
            }
            return redirect('')->with('message','Votre compte est maintenant actif');
        }

        public function passGen($firstname,$name,$country)
        {
            return strtolower(substr($firstname,0,1)) . strtolower(substr($name,0)) . strtoupper(substr($country,0,2));
        }

        public function loadSettings()
        {
            $orgasettings = Setting::whereUrl
        }


    }
