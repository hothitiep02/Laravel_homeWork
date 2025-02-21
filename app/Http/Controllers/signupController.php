<?php

namespace App\Http\Controllers;

use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Session;

class signupController extends Controller
{
    /**
     * Hiển thị form đăng ký.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Xử lý dữ liệu người dùng từ form đăng ký.
     *
     * @param signupRequest $request
     * @return \Illuminate\Http\Response
     */
    public function displayInfor(signupRequest $request)
    {
        $userSession = session('useSession', []);
        // Lấy dữ liệu từ request và tạo mảng người dùng
        $user = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'),
        ];

        $userSession[]=$user;
        session(['userSession' => $userSession]);
        // Trả về view với dữ liệu người dùng
        return view('signup')->with('userSession', $userSession);
    }
    public function clear() {
        Session::forget('userSession');
        return redirect('/');
    }
}

