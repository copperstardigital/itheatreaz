<?php

use App\Models\Production;

function getCurrentSeason() {
    $date = date('Y-m-d');
    if ($date > date('Y') . '-06-01') {
        $currentSeason = date('Y') . '-' . date('Y', strtotime('+1 year'));
    } else {
        $currentSeason = date('Y', strtotime('-1 year')) . '-' . date('Y');
    }

    return $currentSeason;
}

function getCurrentSeasonId() {
    $seasonId = Production::selectRaw('MAX(season_id) AS max')->first();
    return $seasonId->max;
}