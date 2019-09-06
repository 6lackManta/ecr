<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Image;
use Storage;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware('auth');

    }
    public function index()
    {

        $posts = Post:: orderBy('id','desc')->paginate(2);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $this->validate($request,array('title'=>'required|max:255 ',
            'body'=>'required',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'image'=> 'sometimes|image'
        ));

        //store
        $post=new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
       
         $image = $request->file('image');
         $filename = time().'.'.$image->getClientOriginalExtension();
         $location = public_path('images/'.$filename);  
         Image::make($image)->save($location);  
         $post->image = $filename;

        
        $post->save();

        Session::flash('success','The Post has been added successfully!!');
return redirect()->route('posts.show',$post->id);
        return "asd";
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $post = Post::find($id);

            return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
$pslug = Post::find($id);

          

        $this->validate($request,array('title'=>'required|max:255 ',
            'body'=>'required',
            'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
            'image'=> 'image'
        ));
           
        
       

        //store
        $post=Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');

     
             $image = $request->file('image');
         $filename = time().'.'.$image->getClientOriginalExtension();
         $location = public_path('images/'.$filename);  
         Image::make($image)->save($location);  
            $oldfilename=$post->image;
         //Update
         $post->image = $filename;
//          Delete
         Storage::delete($oldfilename);
     
        

        $post->save();

        Session::flash('success','The Post has been updated successfully!!');

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
    
       $post=post::find($id);
       Storage::delete($post->image);
       $post->delete();
       Session::flash('success','The Post is deleted successfully');
       return redirect()->route('posts.index');
    }
}
