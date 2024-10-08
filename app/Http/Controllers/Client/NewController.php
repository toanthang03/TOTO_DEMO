<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Image_News;
use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;

class NewController extends Controller
{
    public function index(Request $request)
    {
        //Lấy toàn bộ dữ liệu
        $query = News::query();
        $news = $query->get();
        return view('Client.News.index', compact('news'));
    }
    //Phương thức xem chi tiết tin tức theo id
    public function detail($id)
    {
        $news = News::find($id);
        $imgNew = Image_News::where('new_id', $id)->get();

        return view('Client.News.detail', compact('news', 'imgNew'));
    }

    //Phương thức thêm tin mới 
    public function addNew(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin.New.addNew');
        } else if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required|max:255',
                'image' => 'required|max:255',
                'date' => 'required|date',
                'content' => 'required',
            ]);
            // Định dạng lại ngày sử dụng Carbon
            try {
                $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
            } catch (\Exception $e) {
                return back()->withErrors(['date' => 'Error Date.'])->withInput();
            }
            //Dữ liệu cho bảng News
            $new = new News();
            $new->title = $request->title;
            $new->image = $request->image;
            $new->date = $formattedDate;
            $new->content = $request->content;
            $new->save();
            return redirect()->route('news.index');
        }
    }
}
