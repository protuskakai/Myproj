<?php

namespace App\Http\Controllers;

//use App\Models\Product;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class MyprofController extends Controller
{
    public function productList(Request $request)
    {
		
		
	 if(is_null( $request->cat))
	 {
		 // echo $cat;
		  $cat = "all";
	 }else
	 {
		 $cat = $request->cat;
		//  
	 }
	 $all="all";
	// echo strcmp(trim($cat),trim($all));
	// $cnt = (strcmp($cat, trim(strval("all"))
//	echo "cat ".$cat."   alls  ".$all;
	 if($cat == $all)
	//(	Str::equals($cat, $all))
		 
	 {	 
   //     echo $request->cat;
       $products = Product::all();
	 }else
	 {
		// echo $request->cat;
		// $products = Product::find($cat);
		
		//$products = Product::where('cat',$cat);
		//$products = Product::table('products')->where('cat', $cat);
		$products = Product::where('category',$cat)->get(); 
	 }	 
	/*
	 foreach($products as $product)
	 {
		 echo $product->name;
	 }
    */ 
	   $cnt= $products->count();
	  
      return view('products', compact('products','cat','cnt'));
    }
	
	
	 public function update(Request $request)
    {
		$data = array("a" => "Apple", "b" => "Ball", "c" => "Cat");

		header("Content-Type: application/json");
		//return json_encode($data);
	//	return "sddddfdf";
	    return response()->json(['status' => "success"]);
    }
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
		
	    //return view('hobbies');
		$tittle="Hobbies";
		return view('hobbies',['tittle'=>$tittle]);
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