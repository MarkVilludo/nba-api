<?php

namespace JasonRoman\NbaApi\Request\Stats;

use JasonRoman\NbaApi\Types\LeagueId;

class CommonAllPlayers extends AbstractStatsApiRequest
{
    /**
     * @var string
     */
    public $leagueId = LeagueId::NBA;

    /**
     * @var string
     */
    public $season;

    /**
     * @var bool
     */
    public $isOnlyCurrentSeason;
}