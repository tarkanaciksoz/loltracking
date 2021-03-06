<?php

namespace App\Params;

use App\Params\MiniSeriesDTO;

class LeagueEntryDTO
{
    /** @var  string $leagueId */
    protected string $leagueId;

    /** @var  string $summonerId */
    protected string $summonerId;

    /** @var  string summonerName */
    protected string $summonerName;

    /** @var  string $queueType */
    protected string $queueType;

    /** @var  string $tier */
    protected string $tier;

    /** @var  string $rank */
    protected string $rank;

    /** @var  int $leaguePoints */
    protected int $leaguePoints;

    /** @var  int $wins */
    protected int $wins;

    /** @var  int $losses */
    protected int $losses;

    /** @var  bool $hotStreak */
    protected bool $hotStreak;

    /** @var  bool $veteran */
    protected bool $veteran;

    /** @var  bool $freshBlood */
    protected bool $freshBlood;

    /** @var  bool $inactive */
    protected bool $inactive;

    /** @var  MiniSeriesDTO $miniSeries */
    protected MiniSeriesDTO $miniSeries;

    public function __construct($leagueEntry = null) {
        if (is_array($leagueEntry)) {
            if (array_key_exists('leagueId', $leagueEntry)) {
                $this->setLeagueId($leagueEntry['leagueId']);
            }

            if (array_key_exists('summonerId', $leagueEntry)) {
                $this->setSummonerId($leagueEntry['summonerId']);
            }

            if (array_key_exists('summonerName', $leagueEntry)) {
                $this->setSummonerName($leagueEntry['summonerName']);
            }

            if (array_key_exists('queueType', $leagueEntry)) {
                $this->setQueueType($leagueEntry['queueType']);
            }

            if (array_key_exists('tier', $leagueEntry)) {
                $this->setTier($leagueEntry['tier']);
            }

            if (array_key_exists('rank', $leagueEntry)) {
                $this->setRank($leagueEntry['rank']);
            }

            if (array_key_exists('leaguePoints', $leagueEntry)) {
                $this->setLeaguePoints($leagueEntry['leaguePoints']);
            }

            if (array_key_exists('wins', $leagueEntry)) {
                $this->setWins($leagueEntry['wins']);
            }

            if (array_key_exists('losses', $leagueEntry)) {
                $this->setLosses($leagueEntry['losses']);
            }

            if (array_key_exists('hotStreak', $leagueEntry)) {
                $this->setHotStreak($leagueEntry['hotStreak']);
            }

            if (array_key_exists('veteran', $leagueEntry)) {
                $this->setVeteran($leagueEntry['veteran']);
            }

            if (array_key_exists('freshBlood', $leagueEntry)) {
                $this->setFreshBlood($leagueEntry['freshBlood']);
            }

            if (array_key_exists('inactive', $leagueEntry)) {
                $this->setInactive($leagueEntry['inactive']);
            }

            if (array_key_exists('miniSeries', $leagueEntry)) {
                $this->setMiniSeries($leagueEntry['miniSeries']);
            }
        }elseif (is_object($leagueEntry)) {
            if (property_exists($leagueEntry, 'leagueId')) {
                $this->setLeagueId($leagueEntry->leagueId);
            }

            if (property_exists($leagueEntry, 'summonerId')) {
                $this->setSummonerId($leagueEntry->summonerId);
            }

            if (property_exists($leagueEntry, 'summonerName')) {
                $this->setSummonerName($leagueEntry->summonerName);
            }

            if (property_exists($leagueEntry, 'queueType')) {
                $this->setQueueType($leagueEntry->queueType);
            }

            if (property_exists($leagueEntry, 'tier')) {
                $this->setTier($leagueEntry->tier);
            }

            if (property_exists($leagueEntry, 'rank')) {
                $this->setRank($leagueEntry->rank);
            }

            if (property_exists($leagueEntry, 'leaguePoints')) {
                $this->setLeaguePoints($leagueEntry->leaguePoints);
            }

            if (property_exists($leagueEntry, 'wins')) {
                $this->setWins($leagueEntry->wins);
            }

            if (property_exists($leagueEntry, 'losses')) {
                $this->setLosses($leagueEntry->losses);
            }

            if (property_exists($leagueEntry, 'hotStreak')) {
                $this->setHotStreak($leagueEntry->hotStreak);
            }

            if (property_exists($leagueEntry, 'veteran')) {
                $this->setVeteran($leagueEntry->veteran);
            }

            if (property_exists($leagueEntry, 'freshBlood')) {
                $this->setFreshBlood($leagueEntry->freshBlood);
            }

            if (property_exists($leagueEntry, 'inactive')) {
                $this->setInactive($leagueEntry->inactive);
            }

            if (property_exists($leagueEntry, 'miniSeries')) {
                $this->setMiniSeries($leagueEntry->miniSeries);
            }
        }
    }


    /**
     * @param $leagueId
     * @return $this
     */
    public function setLeagueId($leagueId): static {
        $this->leagueId = $leagueId;
        return $this;
    }

    /**
     * @param $summonerId
     * @return $this
     */
    public function setSummonerId($summonerId): static {
        $this->summonerId = $summonerId;
        return $this;
    }

    /**
     * @param $summonerName
     * @return $this
     */
    public function setSummonerName($summonerName): static {
        $this->summonerName = $summonerName;
        return $this;
    }

    /**
     * @param $queueType
     * @return $this
     */
    public function setQueueType($queueType): static {
        $this->queueType = $queueType;
        return $this;
    }

    /**
     * @param $tier
     * @return $this
     */
    public function setTier($tier): static {
        $this->tier = ucfirst(strtolower($tier));
        return $this;
    }

    /**
     * @param $rank
     * @return $this
     */
    public function setRank($rank): static {
        $this->rank = $rank;
        return $this;
    }

    /**
     * @param $leaguePoints
     * @return $this
     */
    public function setLeaguePoints($leaguePoints): static {
        $this->leaguePoints = $leaguePoints;

        return $this;
    }

    /**
     * @param $wins
     * @return $this
     */
    public function setWins($wins): static {
        $this->wins = $wins;

        return $this;
    }

    /**
     * @param $losses
     * @return $this
     */
    public function setLosses($losses): static {
        $this->losses = $losses;

        return $this;
    }

    /**
     * @param $hotStreak
     * @return $this
     */
    public function setHotStreak($hotStreak): static {
        $this->hotStreak = $hotStreak;

        return $this;
    }

    /**
     * @param $veteran
     * @return $this
     */
    public function setVeteran($veteran): static {
        $this->veteran = $veteran;

        return $this;
    }

    /**
     * @param $freshBlood
     * @return $this
     */
    public function setFreshBlood($freshBlood): static {
        $this->freshBlood = $freshBlood;

        return $this;
    }

    /**
     * @param $inactive
     * @return $this
     */
    public function setInactive($inactive): static {
        $this->inactive = $inactive;

        return $this;
    }

    /**
     * @param $miniSeries
     * @return $this
     */
    public function setMiniSeries($miniSeries): static {
        $this->miniSeries = new MiniSeriesDTO($miniSeries);

        return $this;
    }

    /**
     * @return string
     */
    public function getLeagueId(): string {
        return $this->leagueId;
    }

    /**
     * @return string
     */
    public function getSummonerId(): string {
        return $this->summonerId;
    }

    /**
     * @return string
     */
    public function getSummonerName(): string {
        return $this->summonerName;
    }

    /**
     * @return string
     */
    public function getQueueType(): string {
        return $this->queueType;
    }

    /**
     * @return string
     */
    public function getTier(): string {
        return $this->tier;
    }

    /**
     * @return string
     */
    public function getRank(): string {
        return $this->rank;
    }

    /**
     * @return int
     */
    public function getLeaguePoints(): int {
        return $this->leaguePoints;
    }

    /**
     * @return int
     */
    public function getWins(): int {
        return $this->wins;
    }

    /**
     * @return int
     */
    public function getLosses(): int {
        return $this->losses;
    }

    /**
     * @return bool
     */
    public function getHotStreak(): bool {
        return $this->hotStreak;
    }

    /**
     * @return bool
     */
    public function getVetera(): bool {
        return $this->veteran;
    }

    /**
     * @return bool
     */
    public function getFreshBlood(): bool {
        return $this->freshBlood;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool {
        return $this->inactive;
    }

    /**
     * @return \App\Params\MiniSeriesDTO
     */
    public function getMiniSeries(): \App\Params\MiniSeriesDTO {
        return $this->miniSeries;
    }
}
