<?php

namespace App\Params;

class SummonerDTO
{
    /** @var string $accountId */
    protected string $accountId;

    /** @var int $profileIconId */
    protected int $profileIconId;

    /** @var int $revisionDate */
    protected int $revisionDate;

    /** @var string $name */
    protected string $name;

    /** @var string $id */
    protected string $id;

    /** @var string $puuId */
    protected string $puuId;

    /** @var int $summonerLevel */
    protected int $summonerLevel;

    public function __construct($summonerInfo = null) {
        if (is_array($summonerInfo)) {
            if (array_key_exists('accountId', $summonerInfo)) {
                $this->setAccountId($summonerInfo['accountId']);
            }

            if (array_key_exists('profileIconId', $summonerInfo)) {
                $this->setProfileIconId($summonerInfo['profileIconId']);
            }

            if (array_key_exists('revisionDate', $summonerInfo)) {
                $this->setRevisionDate($summonerInfo['revisionDate']);
            }

            if (array_key_exists('name', $summonerInfo)) {
                $this->setName($summonerInfo['name']);
            }

            if (array_key_exists('id', $summonerInfo)) {
                $this->setId($summonerInfo['id']);
            }

            if (array_key_exists('puuid', $summonerInfo)) {
                $this->setPuuId($summonerInfo['puuid']);
            }

            if (array_key_exists('summonerLevel', $summonerInfo)) {
                $this->setSummonerLevel($summonerInfo['summonerLevel']);
            }
        }elseif (is_object($summonerInfo)) {
            if (property_exists('accountId', $summonerInfo)) {
                $this->setAccountId($summonerInfo->accountId);
            }

            if (property_exists('profileIconId', $summonerInfo)) {
                $this->setProfileIconId($summonerInfo->profileIconId);
            }

            if (property_exists('revisionDate', $summonerInfo)) {
                $this->setRevisionDate($summonerInfo->revisionDate);
            }

            if (property_exists('name', $summonerInfo)) {
                $this->setName($summonerInfo->name);
            }

            if (property_exists('id', $summonerInfo)) {
                $this->setId($summonerInfo->id);
            }

            if (property_exists('puuid', $summonerInfo)) {
                $this->setPuuId($summonerInfo->puuid);
            }

            if (property_exists('summonerLevel', $summonerInfo)) {
                $this->setSummonerLevel($summonerInfo->summonerLevel);
            }
        }
    }

    /**
     * @param $accountId
     * @return $this
     */
    public function setAccountId($accountId): static {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @param $profileIconId
     * @return $this
     */
    public function setProfileIconId($profileIconId): static {
        $this->profileIconId = $profileIconId;
        return $this;
    }

    /**
     * @param $revisionDate
     * @return $this
     */
    public function setRevisionDate($revisionDate): static {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name): static {
        $this->name = $name;
        return $this;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id): static {
        $this->id = $id;
        return $this;
    }

    /**
     * @param $puuId
     * @return $this
     */
    public function setPuuId($puuId): static {
        $this->puuId = $puuId;
        return $this;
    }

    /**
     * @param $summonerLevel
     * @return $this
     */
    public function setSummonerLevel($summonerLevel): static {
        $this->summonerLevel = $summonerLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId(): string {
        return $this->accountId;
    }

    /**
     * @return int
     */
    public function getProfileIconId(): int {
        return $this->profileIconId;
    }

    /**
     * @return int
     */
    public function getRevisionDate(): int {
        return $this->revisionDate;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPuuId(): string {
        return $this->puuId;
    }

    /**
     * @return int
     */
    public function getSummonerLevel(): int {
        return $this->summonerLevel;
    }
}
