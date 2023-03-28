<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsCRUDController extends Controller
{
    //create index
    public function index() {
        $data=NewsModel::latest()->paginate(5);
        return view('index',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    //create resource
    public function create() {
        return view('create');
    }

    //create store
    public function store(Request $request) {
        $request->validate([
            'topicName' => 'required',
            'articleContent' => 'required',
            'publishDate',
            'mediaHighlight' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'mediaContent' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name_highlight = time() . '.' . request()->mediaHighlight->getClientOriginalExtension();
        request()->mediaHighlight->move(public_path('images'), $file_name_highlight);

        $file_name_content = time() . '.' . request()->mediaContent->getClientOriginalExtension();
        request()->mediaContent->move(public_path('images'), $file_name_content);

        $news = new NewsModel;

        //$news->contentType = $request->contentType;
        $news->topicName = $request->topicName;
        $news->articleContent = $request->articleContent;
        //$news->newsStatus = $request->newsStatus;
        $news->publishDate = $request->publishDate;
        $news->mediaHighlight = $file_name_highlight;
        $news->mediaContent =$file_name_content;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Added successfully.');
    }

    public function show(NewsModel $news)
    {
        return view('show', compact('news'));
    }

    public function edit(NewsModel $news)
    {
        return view('edit', compact('news'));
    }

    public function update(Request $request, NewsModel $news)
    {

        $request->validate([
            'topicName' => 'required',
            'articleContent' => 'required',
            'publishDate',
            'mediaHighlight' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'mediaContent' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $mediaHighlight = $request->hidden_mediaHighlight;

        if($request->mediaHighlight != '')
        {
            $mediaHighlight = time() . '.' . request()->mediaHighlight->getClientOriginalExtension();

            request()->mediaHighlight->move(public_path('images'), $mediaHighlight);
        }

        $news = NewsModel::find($request->hidden_id);
        //$news->contentType = $request->contentType;
        $news->topicName = $request->get('topicName');
        $news->articleContent = $request->get('articleContent');
        //$news->newsStatus = $request->newsStatus;
        $news->publishDate = $request->get('publishDate');
        $news->mediaHighlight = $file_name_highlight;
        $news->mediaContent =$file_name_content;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Data has been updated successfully');
    }

    public function destroy(NewsModel $news)
    {
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Data deleted successfully');
    }
}
