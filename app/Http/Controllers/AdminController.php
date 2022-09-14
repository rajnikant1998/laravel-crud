<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function show()
	{

		$users = DB::table('admins')->get();


		foreach($users as $user){
		echo "<pre>";
		print_r($user->name);
		echo "</pre>";
		}

		// RETRIEVING A SINGLE ROW DATA
		// $user = DB::table('admins')->where('name','Mona Bernier')->first();
		// echo $user->email;

		// $email = DB::table('admins')->where('name','Mona Bernier')->value('email');
		// echo $email;

		// $user = DB::table('admins')->find(5);
		//     print_r($user);

		// $titles = DB::table('admins')->pluck('name');

		// foreach ($titles as $title) {
		// 	echo "<pre>";
		// 	echo $title;
		// 	echo "</pre>";
		// }

		// $user = DB::table('admins')->count('id');
		// echo $user;

		// $user = DB::table('admins')->max('id');
		// echo $user;

		// $user = DB::table('admins')->min('id');
		// echo $user;

		// $user = DB::table('admins')->where('name','Mona Bernie')->exists();
		// if($user){
		// 	print_r($user) ;
		// }else{
		// 	echo "user not exists";
		// }

		// if(DB::table('admins')->where('id',70)->doesntExist()){
		// 	dd("id does not exist");
		// }

		// $users = DB::table('admins')->distinct()->get();
		// print_r($users);

			// $user = DB::table('admins')->where('id','<',10)->get();
			// dd($user);

			// $user = DB::table('admins')->where('name','like','A%')->get();
			// dd($user);

			// $user = DB::table('admins')->where('name','like','%b%')->get();
			// dd($user);

			// $user = DB::table('admins')->where('id','<',10)->orWhere('name','rajni')->get();
			// dd($user);

			// $user = DB::table('admins')->whereBetween('id',[1,14])->get();
			// dd($user);

			// $user = DB::table('admins')->whereNotBetween('id',[1,40])->get();
			// dd($user);

			// $user = DB::table('admins')->whereIn('id',[1,4,5])->get();
			// dd($user);

		// $users=DB::table('admins')->latest('id')->first();
        // $users=DB::table('admins')->oldest('id')->first();
		// $users=DB::table('admins')->inRandomOrder('id')->get();
		//  dd($users);

		// $query = DB::table('admins')->orderBy('name');
		// 	// dd($query);
        // $unorderedUsers = $query->reorder()->get();
		// dd($unorderedUsers);

		//DB::update('update admins set city=? where id=?',['surat',7]);
		//DB::delete('delete from admins where id=?',[7]);
	}
}
