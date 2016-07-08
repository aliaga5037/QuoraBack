<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\User;
	use App\Category;
	use Auth;
	class VerifyController extends Controller
	{

			protected $user;
			protected $role;

			public function __construct()
		{
				$this->middleware('auth');
				$this->user = Auth::user();
				$this->role = $this->user->role;
				
		}

		protected function tables(Request $request)
		{
			
			
			if ($this->role == 'user') {
					return redirect()->intended('/');
				}
			$users = User::all();
			return view('admin.tables',compact('users'));
			
			
			
		}



	    protected function admin(Request $request)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	            
	            return view('admin.index');
	        

	        
	    
		}

		protected function questions(Request $request)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	            
	            return view('admin.questions');
	        

	        
	    }

	    protected function cats(Request $request)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	            $cat = Category::all();
	            return view('admin.categories',compact('cat'));
	    }

	   //  public function add_cat()
	   //  {
	   //  	if ($this->role == 'user') {
				// 	return redirect()->intended('/');
				// }
				// return view('cat.add');
	   //  }
}