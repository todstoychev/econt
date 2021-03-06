<?php

namespace Todstoychev\Econt\Model;

class Quarter extends AbstractModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameEnglish;

    /**
     * @var string
     */
    protected $cityPostCode;

    /**
     * @var int
     */
    protected $cityId;

    /**
     * @var \DateTime
     */
    protected $updatedTime;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Quarter
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Quarter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameEnglish()
    {
        return $this->nameEnglish;
    }

    /**
     * @param string $nameEnglish
     *
     * @return Quarter
     */
    public function setNameEnglish($nameEnglish)
    {
        $this->nameEnglish = $nameEnglish;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityPostCode()
    {
        return $this->cityPostCode;
    }

    /**
     * @param string $cityPostCode
     *
     * @return Quarter
     */
    public function setCityPostCode($cityPostCode)
    {
        $this->cityPostCode = $cityPostCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     *
     * @return Quarter
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param \DateTime $updatedTime
     *
     * @return Quarter
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;

        return $this;
    }
}
