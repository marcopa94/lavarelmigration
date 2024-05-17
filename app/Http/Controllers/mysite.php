<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mysite extends Controller
{
   
    public function index()
    {
     //
     //
     //
        return view('index');}


        public function create()
        {
         //
         //
         //
            return view('create');}


            public function delete($id)
            {
             //
             //
             //
             return view('delete', ['id'=>$id]);}


                public function update($id)
                {
                 //
                 //
                 //
                 return view('update', ['id'=>$id]);}


                    public function viewSingle($id)
                    {
                     //
                     //
                     //
                         return view('viewSingle', ['id'=>$id]);}
}
