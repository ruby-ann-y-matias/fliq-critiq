<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Flick;
use App\Genre;
use App\Like;
use Auth;
use Session;

class FlickController extends Controller
{
    function showAll() {
    	$flicks = Flick::paginate(20);
        $genres = Genre::all();
    	// dd(Auth::user()->roles()->first()->role);
    	return view('flicks.flicks', compact('flicks', 'genres'));
    }

    function showOne($id) {
        $flick = Flick::find($id);
        $genres = $flick->genres()->get();
        // dd($genres);
        // dd($flick);
        $comments = $flick->comments()->get();
        // dd($comments);

        return view('flicks.spotlight', compact('flick', 'genres', 'comments'));
    }

    function create(Request $request) {
        
        // if ($request->hasFile('sm_image')) {

        //     $sm_image = $request->sm_image;
        //     $extension = strtolower($sm_image->getClientOriginalExtension());

        //     $filename = strtolower($request->title);
        //     $filename = preg_replace('/\s+/', '-', $filename);
        //     $sm_filename = 'img/sm-' . $filename . '.' . $extension;
        //     // echo $sm_filename;

        //     $path = $request->sm_image->storeAs('public/', $sm_filename);
        // } else {
        //     $sm_filename = null;
        // }

        // if ($request->hasFile('md_image')) {

        //     $md_image = $request->md_image;
        //     $extension = strtolower($md_image->getClientOriginalExtension());

        //     $filename = strtolower($request->title);
        //     $filename = preg_replace('/\s+/', '-', $filename);
        //     $md_filename = 'img/md-' . $filename . '.' . $extension;

        //     $path = $request->md_image->storeAs('public/', $md_filename);
        // } else {
        //     $md_filename = null;
        // }

        if (Input::hasFile('sm_image')) {

            $sm_image = Input::file('sm_image');
            $extension = strtolower($sm_image->getClientOriginalExtension());

            $filename = strtolower($request->title);
            $filename = preg_replace('/\s+/', '-', $filename);
            $sm_filename = 'img/sm-' . $filename . '.' . $extension;
            // echo $sm_filename;

            // $path = $request->sm_image->storeAs('public/', $sm_filename);
            $sm_image->move(public_path(). '/storage/img', $sm_filename);
        } else {
            $sm_filename = null;
        }

        if ($request->hasFile('md_image')) {

            $md_image = Input::file('md_image');
            $extension = strtolower($md_image->getClientOriginalExtension());

            $filename = strtolower($request->title);
            $filename = preg_replace('/\s+/', '-', $filename);
            $md_filename = 'img/md-' . $filename . '.' . $extension;

            // $path = $request->md_image->storeAs('public/', $md_filename);
            $md_image->move(public_path(). '/storage/img', $md_filename);
        } else {
            $md_filename = null;
        }

        $flick = new Flick();
        $flick->title = $request->title;
        $flick->description = $request->description;
        $flick->year = $request->year;
        $flick->age_limit = $request->age_limit;
        $flick->duration = $request->duration;
        $flick->sm_image = $sm_filename;
        $flick->md_image = $md_filename;
        $flick->save();

        Session::flash('alert', 'New flick added!');

        return redirect()->back();
    }

    function edit($id) {
        $flick = Flick::find($id);
        $genres = Genre::all();
        $tags = $flick->genres()->get();

        return view('flicks.edit-flick', compact('flick', 'genres', 'tags'));
    }

    function update(Request $request, $id) {
        // dd($request);
        $flick = Flick::find($id);

        if (Input::hasFile('sm_image')) {

            $sm_image = Input::file('sm_image');
            $extension = strtolower($sm_image->getClientOriginalExtension());

            $filename = strtolower($request->title);
            $filename = preg_replace('/\s+/', '-', $filename);
            $sm_filename = 'img/sm-' . $filename . '.' . $extension;
            echo $sm_filename;

            // $path = $request->sm_image->storeAs('public/', $sm_filename);
            $sm_image->move(public_path(). '/storage/img', $sm_filename);
        } else {
            $sm_filename = $flick->sm_image;
        }

        if ($request->hasFile('md_image')) {

            $md_image = Input::file('md_image');
            $extension = strtolower($md_image->getClientOriginalExtension());

            $filename = strtolower($request->title);
            $filename = preg_replace('/\s+/', '-', $filename);
            $md_filename = 'img/md-' . $filename . '.' . $extension;

            // $path = $request->md_image->storeAs('public/', $md_filename);
            $md_image->move(public_path(). '/storage/img', $md_filename);
        } else {
            $md_filename = $flick->md_image;
        }

        $flick->title = $request->title;
        $flick->description = $request->description;
        $flick->year = $request->year;
        $flick->age_limit = $request->age_limit;
        $flick->duration = $request->duration;
        $flick->sm_image = $sm_filename;
        $flick->md_image = $md_filename;
        $flick->save();

        Session::flash('alert', 'Flick was updated!');

        return redirect()->back();        
    }

    function delete($id) {
        $flick = Flick::find($id);
        // dd($flick);
        $flick->delete();

        $flicks = Flick::paginate(20);
        $genres = Genre::all();

        Session::flash('alert', 'Flick was deleted!');

        return view('flicks.flicks', compact('flicks', 'genres'));
    }

    function retrieve($id) {
    	// echo 'Hello';
    	$single = Flick::find($id);
        $selected = $single->genres()->get();
        $genres = Genre::all();
    	
    	return view('flicks.single', compact('single', 'genres', 'selected'));
    }

    function addGenres(Request $request, $flick_id) {
        // echo $flick_id;
        // dd($request->genre);

        $flick = Flick::find($flick_id);
        $flick->genres()->attach($request->genre);

        Session::flash('alert', 'Flick was classified!');

        return redirect()->back();
    }

    function filter($genre_id) {
        $genre = Genre::find($genre_id);
        // echo $genre;
        $filters = $genre->flicks()->get();

        $allGen = Genre::all();
        $flicks = Flick::all();
        
        return view('flicks.filtered', compact('filters', 'genre', 'allGen', 'flicks'));
    }

}
