<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){
       return view('front.home.home-content');
   }

   public function category(){
       return view('front.category.category-content');
   }

   public function dashboard(){
       return view('admin.home.home');
   }

   public function addCategory(){
       return view('admin.add-category.add-category');
   }

   public function manageCategory(){
       return view('admin.manage-category.manage-category');
   }
}
