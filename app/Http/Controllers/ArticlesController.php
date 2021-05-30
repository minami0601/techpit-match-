<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Article;
use App\Category;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::orderBy('id','desc')->paginate(9);
        $categories = Category::orderBy('id','asc')->pluck('name', 'id');
        
        $data = [
            'articles' => $articles,
            'categories' => $categories
        ];
        return view('articles.index', $data);
    }

    public function create()
    {
        $category = new Category;
        $categories = $category->getCategoryList()->prepend('選択', '');
        $user = \Auth::user();
        
        $data=[
            'user' => $user,
            'categories' => $categories,
        ];
        
        return view('articles.create', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'category_id' => 'required',
            'title' => 'required|max:11',
            'url' => 'required|max:11',
            'summary' => 'max:36',
        ]);

        $request->user()->articles()->create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'url' => $request->url,
            'summary' => $request->summary,
        ]);

        return back('/');
    }
}
