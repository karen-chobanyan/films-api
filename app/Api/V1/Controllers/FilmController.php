<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use App\Film;
use Dingo\Api\Routing\Helpers;

class FilmController extends Controller
{
    //
    use Helpers;
    
    public function index()
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();
        return Film::all()
            ->toArray();
    }
    
    public function store(Request $request)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $film = new Film;
        $film->name = $request->get('name');
        $film->slug = str_slug($film->name, '-');
        $film->description = $request->get('description');
        $film->release_date = $request->get('release_date');
        $film->rating = $request->get('rating');
        $film->ticket_price = $request->get('ticket_price');
        $film->country = $request->get('country');
        $film->geners = $request->get('geners');
        $film->photo = $request->get('photo');
        
        if($film::save())
            return $this->response->created();
        else
            return $this->response->error('could_not_create_film', 500);
    }
    
    
    public function show($id)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $film = Film::where('id', $id);

        if(!$film)
            throw new NotFoundHttpException; 

        return $film;
    }
    
    public function show_slug($slug)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $film = Film::where('slug', $slug)->get()->toArray();

        if(!$film)
            throw new NotFoundHttpException; 

        return $film;
    }

    public function update(Request $request, $id)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $film = Film::where('id', $id);
        if(!$film)
            throw new NotFoundHttpException;

        $film->fill($request->all());

        if($film->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_film', 500);
    }

    public function destroy($id)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $film = Film::where('id', $id);

        if(!$film)
            throw new NotFoundHttpException;

        if($film->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_film', 500);
    }
    
}
