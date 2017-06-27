<?php

namespace JasonRoman\NbaApi\Request\Data\Scores;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Params\Data\GameDateParam;
use JasonRoman\NbaApi\Request\Data\AbstractDataApiRequest;

/**
 * Get all of the games/scores for a specific date used by the CMS.
 */
class CmsScoreboardRequest extends AbstractDataApiRequest
{
    const ENDPOINT = '/json/cms/noseason/scoreboard/{gameDate}/games.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Date()
     * @Assert\Range(min = GameDateParam::MIN_DATE)
     *
     * @var \DateTime
     */
    public $gameDate;
}