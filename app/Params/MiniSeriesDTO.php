<?php

namespace App\Params;

class MiniSeriesDTO
{
    /** @var  int $losses */
    protected int $losses;

    /** @var  string $progress */
    protected string $progress;

    /** @var  int $target */
    protected int $target;

    /** @var  int $wins */
    protected int $wins;

    /**
     * @param $miniSeries
     */
    public function __construct($miniSeries = null) {
        if (is_array($miniSeries)) {
            if (array_key_exists('losses', $miniSeries)) {
                $this->setLosses($miniSeries['losses']);
            }

            if (array_key_exists('progress', $miniSeries)) {
                $this->setProgress($miniSeries['progress']);
            }

            if (array_key_exists('target', $miniSeries)) {
                $this->setTarget($miniSeries['target']);
            }

            if (array_key_exists('wins', $miniSeries)) {
                $this->setWins($miniSeries['wins']);
            }
        }elseif (is_object($miniSeries)) {
            if (property_exists($miniSeries, 'losses')) {
                $this->setLosses($miniSeries->losses);
            }

            if (property_exists($miniSeries, 'progress')) {
                $this->setProgress($miniSeries->progress);
            }

            if (property_exists($miniSeries, 'target')) {
                $this->setTarget($miniSeries->target);
            }

            if (property_exists($miniSeries, 'wins')) {
                $this->setWins($miniSeries->wins);
            }
        }
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
     * @param $progress
     * @return $this
     */
    public function setProgress($progress): static {
        $this->progress = $progress;
        return $this;
    }

    /**
     * @param $target
     * @return $this
     */
    public function setTarget($target): static {
        $this->target = $target;
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
     * @return string
     */
    public function getProgress(): string {
        return $this->progress;
    }

    /**
     * @return int
     */
    public function getTarget(): int
    {
        return $this->target;
    }

    /**
     * @return int
     */
    public function getWins(): int {
        return $this->wins;
    }
}
