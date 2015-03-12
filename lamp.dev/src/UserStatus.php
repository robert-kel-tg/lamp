<?php
namespace Src;

class UserStatus
{
    const ACTIVATED = 0x10;
    const INACTIVE = 0x11;

    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public static function activated()
    {
        return new self(self::ACTIVATED);
    }

    public static function inactive()
    {
        return new self(self::INACTIVE);
    }

    public function equalsTo(self $status)
    {
        return $this->status === $status->getStatus();
    }

    public function getStatus()
    {
        return $this->status;
    }
}
