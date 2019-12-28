<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bingelist;
use App\User;
use App\Comment;
use App\Like;
use App\Reply;
use App\ReplyLike;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showList() {
    	$users = User::all();

        if (Auth::check()) {
            $me = Auth::user();
            $influencers = $me->following()->get();
            // dd($influencers);

            $following = array();

            foreach ($influencers as $influencer) {
                $following[] = $influencer->username;
            }

            // dd($following);

        } else {
            $following = [];
        }

        return view('flicks.bingelists', compact('users', 'following'));
    }

    public function discover($id) {
    	$user = User::find($id);
    	// dd($user);
        $followers = $user->followers()->distinct()->get();
        $influencers = $user->following()->distinct()->get();

    	return view('auth.profile', compact('user', 'followers', 'influencers'));
    }

    public function followUser(Request $request, $id) {

        $me = Auth::user()->id;
        $influencer = User::find($request->id);

        if ($request->btn_text == 'Follow') {
            $influencer->followers()->attach($me);
            echo 'Unfollow';
        } else
        if ($request->btn_text == 'Unfollow') {
            $influencer->followers()->detach($me);
            echo 'Follow';
        }
    }

    public function getFollowers($id) {
        $user = User::find($id);
        // echo $user->username;

        $followers = $user->followers()->distinct()->get();

        return view('auth.followers', compact('followers'));
    }

    public function getFollowing($id) {
        $user = User::find($id);
        // echo $user->username;s
        $influencers = $user->following()->distinct()->get();

        return view('auth.following', compact('influencers', 'user'));
    }

    public function unfollowUser(Request $request, $id) {
        $me = Auth::user()->id;

        $influencer = User::find($request->influencer_id);

        $influencer->followers()->detach($me);

        return redirect()->back();
    }

    public function like(Request $request) {
        // echo $id;
        // dd($request);

        if ($request->btn_text == 'LIKE') {

            $user = Auth::user();
            $user->likes()->attach($request->comment_id);
            $likes = Like::where('comment_id', '=', $request->comment_id)->get();

            return response()->json(['likes' => $likes]);

        } else {

            $user = Auth::user();
            $user->likes()->detach($request->comment_id);
            $likes = Like::where('comment_id', '=', $request->comment_id)
                ->get();

            return response()->json(['likes' => $likes]);
        }
    }

    public function reply(Request $request) {
        $me = Auth::user()->id;
        // dd($request);
        $reply = new Reply();
        $reply->reply = $request->reply;
        $reply->comment_id = $request->comment_id;
        $reply->user_id = $me;
        $reply->save();

        return view('auth.reply', compact('reply'));
    }

    public function replyLike(Request $request) {

        if ($request->btn_text == 'LIKE') {

            $user = Auth::user();
            $user->replylikes()->attach($request->reply_id);
            $likes = ReplyLike::where('reply_id', '=', $request->reply_id)->get();

            return response()->json(['likes' => $likes]);

        } else {

            $user = Auth::user();
            $user->replylikes()->detach($request->reply_id);
            $likes = ReplyLike::where('reply_id', '=', $request->reply_id)
                ->get();

            return response()->json(['likes' => $likes]);
        }
    }

    public function editReply(Request $request) {

        $reply = Reply::find($request->reply_id);

        $reply->reply = $request->reply;
        $reply->save();

        return view('auth.reply', compact('reply'));
    }

    public function deleteReply(Request $request) {

        $reply = Reply::find($request->reply_id);
        $reply->delete();

        return redirect()->back();
    }

    public function newComment(Request $request) {

        $me = Auth::user()->id;

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->flick_id = $request->flick_id;
        $comment->user_id = $me;
        $comment->save();

        return view('auth.new-comment', compact('comment'));

    }

    public function editComment(Request $request) {

        $comment = Comment::find($request->comment_id);

        $comment->comment = $request->comment;
        $comment->save();

        return view('auth.new-comment', compact('comment'));
    }

    public function commentDelete(Request $request) {

        $comment = Comment::find($request->comment_id);

        $comment->delete();

        return redirect()->back();
    }

}
