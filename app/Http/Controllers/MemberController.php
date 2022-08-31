<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller{

 function createData(Request $req){
  $name = $req->name;
  $address = $req->address;
  $result = DB::table('members')->insert(['name'=>$name,'address'=>$address]);
  if ($result==true) {
    return 'data inserted';
  } else {
    return 'error found!';
  }


 }

 function readData(Request $req){
  $req = DB::table('members')->get();
  return $req;
 }

 function updateData(Request $req){
  $id = $req->input('id');
  $name = $req->input('name');
  $address = $req->input('address');
  $result = DB::table('members')->where('id',$id)->update(['name'=>$name, 'address'=>$address]);

  if ($result==true) {
    return 'data updated';
  } else {
   return 'Error Found';
  }

 }

 function deleteData(Request $req){
  $id = $req->id;
  $result = DB::table('members')->where('id',$id)->delete();
  if ($result==true) {
    return 'one data deleted';
  } else {
   return 'error found';
  }


 }

}