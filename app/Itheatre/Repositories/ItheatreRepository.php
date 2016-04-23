<?php

namespace App\Itheatre\Repositories;

use App\Models\Corner;
use App\Models\Donor;
use App\Models\Article;
use App\Models\News;
use App\Models\Collaborator;
use App\Models\Season;
use App\Models\Production;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ItheatreRepository {


    public function getArticlesById($article_id) {
        try {
            return Article::where('article_id', $article_id)->get();
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public function getNews()
    {
        return News::where('date_expires', '>', date('Y-m-d'))
            ->where('active', 1)
            ->latest()->get();
    }

    public function getCollaborators()
    {
        return Collaborator::where('active', 1)->orderBy('collaborator')->get();
    }

    public function getStaffBios()
    {
        return Article::where('article_id', 10)->get();
    }

    public function getSeasons()
    {
        $seasons = Season::all();

        $productions = [];
        foreach ($seasons as $season) {
            $productions[$season->season]['season'] = $season->season;
            $productions[$season->season]['image'] = $season->image;
            $productions[$season->season]['productions'] = $this->getProductions($season->season);
        }

        return $productions;
    }

    public function getProductions($season)
    {
        return Production::join('seasons', 'seasons.id', '=', 'productions.season_id')
           ->leftJoin('history', 'history.season_id', '=', 'productions.season_id')
           ->where('season', $season)
           ->get();
    }

    public function getCarousel()
    {
        return Production::leftJoin('seasons', 'seasons.id',  '=', 'productions.season_id')
            ->where('productions.season_id', 13)
            ->where('show_closes', '>', date('Y-m-d'))
            ->orderBy('productions.show_closes', 'ASC')
            ->get();
    }

    public function getDonors($level) {
        return Donor::where('level', $level)->get();
    }

    public function getNextShow()
    {
        return Production::where('season_id', 13)->where('show_closes', '>', date('Y-m-d'))->first();
    }

    public function getDirectorsCorner()
    {
        return Corner::orderBy('created_at', 'DESC')->firstOrFail();
    }


}