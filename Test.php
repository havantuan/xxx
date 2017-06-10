<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Campaign;
class Test extends Controller
{
     public function getIndex() {
   $dulieu = array(
     array(
    'year' => '2000',
    'value' => 20
    ),
    array(
    'year' => '2002',
    'value' => 40
    ),
    array(
    'year' => '2004',
    'value' => 60
    ),
    array(
    'year' => '2006',
    'value' => 80
    ),
    array(
    'year' => '2008',
    'value' => 100
    ),
	);
   $dulieu2 = array(array('label'=>'Viettel','value'=>'60'),array('label'=>'Vinaphone','value'=>'30'),array('label'=>'Mobiphone','value'=>'10'));
  		
       	return view('admin.admin',compact('dulieu','dulieu2'));
    
    }
    public function getJob () {
         $job = Job::all();
         dd($job);
         
    }
    
}
