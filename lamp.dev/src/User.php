<?php
namespace Src;

class User implements UserComparableInterface
{
    private $name;

    private $age;

    private $money;

    private $dateTime;

    private $today;

    private $userStatus;

    private $createdAt;

    private $activatedAt;

    function __construct($name, Money $money, \DateTime $dateTime)
    {
        $this->name = $name;
        $this->money = $money;
        $this->today = new \DateTime('today');
        $this->dateTime = $dateTime;
        $this->age = $this->getAge();
        $this->inactivate();
        $this->createdAt(new \DateTimeImmutable());
    }

    public function setStatus(UserStatus $userStatus)
    {
        $this->userStatus = $userStatus;
    }

    public function activate()
    {
        $this->setStatus(
            UserStatus::activated()
        );
        $this->activatedAt(new \DateTimeImmutable());
    }

    public function inactivate()
    {
        $this->setStatus(
            UserStatus::inactive()
        );
        $this->activatedAt = null;
    }

    public function isActivated()
    {
        return $this->userStatus->equalsTo(new UserStatus(UserStatus::activated()));
    }

    private function createdAt(\DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    private function activatedAt(\DateTimeImmutable $activatedAt)
    {
        $this->activatedAt = $activatedAt;
    }

    public function getStatus()
    {
        return $this->userStatus->getType();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        $diff = $this->today->diff($this->dateTime);

        return (int)$diff->format('%y');
    }

    public function getMoneyAmount()
    {
        return $this->money->getValue();
    }

    public function getBirthDate()
    {
        return $this->dateTime->format('Y-m-d');
    }
}
