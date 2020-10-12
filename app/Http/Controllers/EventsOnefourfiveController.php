<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventsOnefourfiveController extends Controller
{
    public function show()
    {
        return view('events.onefourfive.index');
    }

    public function store(Request $request)
    {
  
        // $this->validate($request, [
        //     'name' => 'required|max:50',
        //     'email' => 'required|email',
        //     'tel' => 'required|max:20|min:7',
        //     'category' => 'required',
        //     'content' => 'required'

        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'required|max:20|min:7|regex:/^1[345789][0-9]{9}$/',
            'category' => 'required',
            'content' => 'required'
        ],$this->messages());

        if($validator->fails()){
            return redirect('SiChuan145/#begin')->withErrors($validator)->withInput();
        }

        DB::table('events_onefourfive')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'category' => $request->category,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
    
        

        return redirect('SiChuan145/#begin')->with('success', '提交成功，感谢您的参与~');
    }

    public function messages()
    {
        return [
            'tel.min' => '请确认电话长度是否正确',
            'tel.max' => '请确认电话长度是否正确',
            'tel.regex' => '请确认电话格式是否正确'
        ];
    }
}
