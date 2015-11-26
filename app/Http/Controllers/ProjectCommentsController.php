<?php
 
namespace Laraprego\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Auth;
use Laraprego\Comment;
use Laraprego\Http\Requests;
use Laraprego\Http\Controllers\Controller;
 
class ProjectCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function postNewComment(Request $request, $id, Comment $comment)
    {
       $this->validate($request, [
            'comments'     => 'required|min:5',
        ]);
 
       $comment->comments       = $request->input('comments');
       $comment->project_id     = $id;
       $comment->user_id        = Auth::user()->id;
       $comment->save();
 
       return redirect()->back()->with('info', 'Comment posted successfully');
    }
}