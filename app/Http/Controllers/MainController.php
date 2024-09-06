<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $students = [
            ["id" => 1, "name" => "Arihant1 Jain", "score" => 10],
            ["id" => 2, "name" => "Arihant2 Jain", "score" => 20],
            ["id" => 3, "name" => "Arihant3 Jain", "score" => 30],
            ["id" => 4, "name" => "Arihant4 Jain", "score" => 40],
            ["id" => 5, "name" => "Arihant5 Jain", "score" => 50],
            ["id" => 6, "name" => "Arihant6 Jain", "score" => 60],
            ["id" => 7, "name" => "Arihant7 Jain", "score" => 70],
            ["id" => 8, "name" => "Arihant8 Jain", "score" => 80],
        ];

        return view('welcome', compact('students'));
    }

    public function check(Request $request)
    {
        $data = $request->number;

        if ((int)$data % 2 == 0) {
            $res = [
                "status" => "Number is even"
            ];
            return view("check", compact("res"));

            //return view("check") -> with("status", "Number is even");
        }
        $res = [
            "status" => "Number is odd"
        ];
        return view("check", compact("res"));
    }
}
