<?php

namespace JasonRoman\NbaApi\Request\Data\Cms\Schedule;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\TeamSlugParam;
use JasonRoman\NbaApi\Request\Data\Cms\AbstractDataCmsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get a team's summer league schedule.
 */
class SummerLeagueScheduleRequest extends AbstractDataCmsRequest
{
    const ENDPOINT = '/json/sl/cms/{year}/team/{teamSlug}/schedule.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2015)
     *
     * @var int
     */
    public $year;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(TeamSlugParam::OPTIONS)
     *
     * @var string
     */
    public $teamSlug;
}