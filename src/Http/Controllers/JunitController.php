<?php

namespace Wengdada\JunitLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JunitController extends Controller
{
    public function index()
    {
        return view('junit::create');
    }

    public function store(Request $request)
    {
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action = $request->input('action');
        $param = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace . '\\' . $className;
        //要替换的值，需要的结果
        $class = str_replace('/', '\\', $class);
        $object = new $class();
        $param = ($param == "") ? [] : explode('|', $param);
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}