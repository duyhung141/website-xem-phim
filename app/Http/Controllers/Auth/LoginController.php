<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'http://127.0.0.1:8000/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Đăng nhập thành công sẽ chuyển hướng về đường dẫn mong muốn
    protected function redirectTo()
    {
        return '/';
    }

    // Phương thức xử lý đăng nhập
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kiểm tra thông tin đăng nhập hợp lệ
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Nếu đăng nhập thành công, chuyển hướng về trang phim
            return redirect()->route('/');
        } else {
            // Nếu đăng nhập thất bại, chuyển hướng về đăng nhập và hiển thị thông báo lỗi
            return redirect()->back()->withInput()->withErrors([
                'email' => 'Thông tin đăng nhập không chính xác',
            ]);
        }
    }

    // Phương thức xử lý đăng xuất
    public function logout(Request $request)
    {
        auth()->logout(); // Đăng xuất người dùng
        $request->session()->invalidate(); // Xóa session
        return redirect(route('user.index')); // Chuyển hướng về trang đăng nhập
    }
}
