<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function index() {
    	$data = array();
    	$data['posts'] = Post::latest()->get();
    	return view("posts.index", $data);
    }

    public function show(Post $post)
    {
        //
        return view("posts.show", array("post" => $post));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate input
    	$this->validate(request(), [
    		'title' => 'required|min:10',
    		'body' => 'required']
    		);

     

        //safe
        /*
        Post::create([
        	'title' => request('title'), 
        	'body' => request('body')
        ]);
		*/
        //only safe if fillable/guarded set
 		Post::create(request()->all());

        return redirect("/posts");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

}
