<?php

namespace App\Http\Controllers;

//use App\Models\Product;
use Config;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class MyprofController extends Controller
{
	
	
    
	 public function aboutme()
    {
		$tittle="About Me";
	    return view('aboutme',['tittle'=>$tittle]);
	   // return view('aboutme');
    }
	 public function contacts()
    {
		
	   // return view('contact');
	   $tittle="Contacts";
		 return view('contact',['tittle'=>$tittle]);
    }
	 public function accomplishments()
    {
		
	   // return view('accomplishments');
	   $tittle="Major Accomplishments";
		 return view('accomplishments',['tittle'=>$tittle]);
    }
	 public function awards()
    {
		
	   // return view('awards');
	   $tittle="Awards";
		 return view('awards',['tittle'=>$tittle]);
    }
	 public function education()
    {
		
	  //  return view('education');
	  $tittle="Educational Background";
		return view('education',['tittle'=>$tittle]);
    }
	 public function employment()
    {
		
	   // return view('employment');
	   $tittle="Employment History";
		return view('employment',['tittle'=>$tittle]);
		
    }
	 public function experience()
    {
		
	   // return view('experience');
	   $tittle="Areas of Experience";
		return view('experience',['tittle'=>$tittle]);
    }
	 public function hobbies()
    {
		echo config('myvars.oclor');
	  $m_color = "    bg-red-100    " ; //= Config('myvars.color');
	    //return view('hobbies');
		$tittle="Hobbies";
	//	echo $m_color;
		return view('hobbies',['tittle'=>$tittle],['color'=>$m_color]);
    }
	 public function personal()
    {
		$tittle="Personal Details";
	  //  return view('personal');
		return view('personal',['tittle'=>$tittle]);
    } public function profession()
    {
		$tittle="Professional Background";
	    return view('profession',['tittle'=>$tittle]);
    }
	 public function referees()
    {
		
	  //  return view('referees');
		$tittle="Referees";
	    return view('referees',['tittle'=>$tittle]);
    }
	
	 public function skills()
    {
		
	  //  return view('skills');
		$tittle="ICT Skills";
	    return view('skills',['tittle'=>$tittle]);
    }
} 