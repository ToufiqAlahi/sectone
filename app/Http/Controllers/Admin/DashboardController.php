<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HostelMember;
use App\Models\Library\Book;
class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    
    public function hostel(){
        $members = HostelMember::all();
        return view('admin.hostel.hostel', compact('members'));
    }
    public function library(){
        $books = Book::all();
        return view('admin.library.books', compact('books'));
    }

    public function member_show(HostelMember $member){
        return view('admin/hostel/member',compact('member'));
    }

    public function settings(){
        $slider_images = \DB::table('slider_images')->get();
        return view('admin.settings', compact('slider_images'));
    }
    public function slider_image(){
        // return view()
    }
}
