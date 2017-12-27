<?php

namespace App\Http\Controllers;
use App\ShareData;
use Illuminate\Http\Request;

class ShareController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function getFaq(){
    return view('faq');
}
	public function getDashboard(){
		return view('index');
	}
	public function getPortfolio(){
		return view('portfolio');
	}
    public function getAutomobileShares(){
	$shares=ShareData::where('categoryId',1)->get();
	return compact('shares');
	//return view("AutomobileAssembler")->with('shares',$shares);
	}
 public function getElectricalGoodsShares(){
	$shares=ShareData::where('categoryId',2)->get();
	return view("Electricalgoods")->with('shares',$shares);
}
 public function getCementShares(){
	$shares=ShareData::where('categoryId',4)->get();
	return view("cement")->with('shares',$shares);
}
 public function getChemicalShares(){
	$shares=ShareData::where('categoryId',4)->get();
	return view("chemical")->with('shares',$shares);
}


}
