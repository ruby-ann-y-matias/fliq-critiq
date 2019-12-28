<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Genre;
use App\Flick;
use DB;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function showFeed() {
        if (Auth::check() ) {

            $me = Auth::user();
            // dd($me);
            $influencers = $me->following()->get();
            // dd($influencers);

            $feed = array();

            foreach ($influencers as $influencer) {
                $flicks = $influencer->flicks()->distinct()->get();
                // dd($flicks);
                foreach ($flicks as $flick) {

                    if (!isset($feed[$flick->id])) {
                        $feed[$flick->id] = array();
                    }

                    $feed[$flick->id][] = $influencer->id;
                }
            }

            ksort($feed);
            // dd($feed);

            $new_feed = array();
            $flick_collection = array();

            foreach ($feed as $flick => $users) {
                // echo $flick;
                // var_export($users);
                $flick_item = Flick::find($flick);

                $flick_collection [] = $flick_item;

                $unique_users = array_unique($users);
                // var_export($unique_users);

                if (!isset($new_feed[$flick])) {
                    $new_feed[$flick] = array();
                }

                foreach ($unique_users as $unique_user) {
                    $unique_user = User::find($unique_user);

                    $new_feed[$flick][] = $unique_user;
                }
            }

            // dd($flick_collection);
            // dd($new_feed);

            return view('auth.feed', compact('new_feed', 'flick_collection'));

        } else {
            return view('home');
        }
    }

    public function viewCurrent() {
        $user = Auth::user();

        $followers = $user->followers()->distinct()->get();
        $influencers = $user->following()->distinct()->get();

        return view('auth.profile', compact('user', 'followers', 'influencers'));
    }

    public function editSelf(Request $request, $id) {
        // dd($request);
        // echo $id;

        $user = User::find($id);

        if (Input::hasFile('user_image')) {

            $user_img = Input::file('user_image');
            $extension = strtolower($user_img->getClientOriginalExtension());

            $filename = strtolower($request->username);
            $filename = preg_replace('/\s+/', '-', $filename);
            $user_filename = 'img/' . $filename . '.' . $extension;
            // echo $user_filename;
            // $path = $request->user_image->storeAs('public/', $user_filename);
            $user_img->move(public_path(). '/storage/img', $user_filename);

        } else {
            $user_filename = $user->image;
        }

        $user = User::find($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->job = $request->job;
        $user->company = $request->company;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->image = $user_filename;
        $user->save();

        Session::flash('alert', 'Profile updated!');

        return redirect()->back();
    }

    public function retrieve($id) {
        $user = User::find($id);

        return view('auth.confirm-delete', compact('user'));
    }

    public function delete($id) {
        $user = User::find($id);
        // echo $user->username;
        $user->delete();

        Session::flash('alert', 'User account was deleted');

        return redirect()->back();
    }

    public function addToBinge(Request $request, $id) {

        if (Auth::check() ) {
            $user = Auth::user();
            // echo $user->username;
            // dd($request);
            $user->flicks()->attach($request->flick_id);

            Session::flash('alert', 'Bingelist updated!');

            return redirect()->back();
        } else {
            return view('home');
        }
    }

    public function removeFromBinge(Request $request, $id) {
        // dd($request);
        Auth::user()->flicks()->detach($request->flick_id);

        return redirect()->back();
    }

    public function showMatch() {

        if (Auth::check()) {

        $me = Auth::user()->id;
        // $me = $user->id;
        // echo $me;

        // RETRIEVES ALL CURRENT USER'S FAVORITE FLICKS
        $ownBinges = Auth::user()->flicks()->get();
        // dd($ownBinges);

        // GET MATCHES OF USERS WITH THE SAME FAVORITES
        $all_flicks_users = array();

        foreach ($ownBinges as $ownBinge) {
            $flick_id = $ownBinge->id;

            // echo $flick_id;
            // echo $ownBinge->title . '<hr>';

            // METHOD 2 - USE ELOQUENT RELATIONSHIP
            $users = $ownBinge->users()->distinct()->get();
            // $sorted = $users->sortBy('id');
            $without_me_users = $users->except(['id' => $me]);
            // dd($sorted);
            // dd($without_me_users);

            foreach ($without_me_users as $without_me_user) {
                $user_id = $without_me_user->id;

                array_push($all_flicks_users, [$user_id => $flick_id]);
            }
        }

        // dd($all_flicks_users);

        // GROUPS RESULT BY USER
        $matches = array();

        foreach ($all_flicks_users as $all_flicks_user) {
            $person = key($all_flicks_user);
            $flix = current($all_flicks_user);

            // echo $person . ' ' . $flix . '<br>';
            if (!isset($matches[$person])) {
                $matches[$person] = array();
            }

            $matches[$person][] = $flix;
        }

        // dd($matches);

        // COUNT FREQUENCY THAT EACH USER HAS COME UP
        $users_rank = array();

        foreach ($matches as $user => $match) {

                $i = count($match);

                array_push($users_rank, ['user' => $user, 'rank' => $i]);
        }

        // dd($users_rank);

        // SORT USERS ACCORDING TO FREQUENCY
        $rank = array();

        foreach ($users_rank as $user_rank) {
            $rank[] = $user_rank['rank'];
        }
        // dd($rank);

        array_multisort($rank, SORT_DESC, $users_rank);

        // dd($users_rank);

        $sorted_users = array_column($users_rank, 'user');

        // dd($sorted_users);

        // MAKE A COLLECTION OF USER DETAILS
        $collected_users = array();

        foreach ($sorted_users as $user) {
            $x = User::find($user);

            $collected_users[] = $x;
        }

        // dd($collect_users);

        return view('flicks.discover', compact('collected_users', 'ownBinges'));

        } else {
            return view('home');
        }
    }
}
