<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    /**
     * field filters
     * @var array<string>
     */
    protected $filters = 
    [
        'name', 
        'first_name'
    ];
    

    public function filter1(Request $request)
    {
        foreach($this->filters as $field)
        {
            if(!empty($request->$field))
            {
                $query = User::where($field,'=',$request->$field);
            }
        }

        return $query->get();
    }


    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function active(Request $request)
    {
	    return User::where('status','=','1')->orderBy('id','desc')->get();
    }		    

    public function search(Request $request)
    {              
        $search = $request->value;
       
        return User::whereRaw("concat(first_name, ' ', last_name) like '%$search%'")
          ->orWhereRaw("concat(last_name, ' ', first_name) like '%$search%'")
          ->get();

    }		    

    public function index(Request $request)
    {
        return User::orderBy('id','desc')->get();

    }
}
