<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News; // for use of model class News

class NewsController extends Controller
{
    //
    public function add()
    {
        return view('admin.news.create');
    }
    // 以下を追記
    
    public function create(Request $request)
    {
        // dd($request);
        // Validation
        $this->validate($request, News::$rules);
        
        $news = new News;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        } else {
            $news->image_path = null;
        }
        
        // delete unnecessary items
        unset($form['_token']);
        unset($form['image']);
        
        // store all data in news table
        $news->fill($form);
        $news->save();
        
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}
