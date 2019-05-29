<?php declare(strict_types=1); declare(strict_types=1);

namespace Starweb\Api\Model\Notification;

class Notification
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var int
     */
    private $adminUserId;

    /**
     * @var string
     */
    private $adminSuperuserUsername;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return null|int
     */
    public function getAdminUserId(): ?int
    {
        return $this->adminUserId;
    }

    /**
     * @param null|int $adminUserId
     */
    public function setAdminUserId(?int $adminUserId): void
    {
        $this->adminUserId = $adminUserId;
    }

    /**
     * @return null|string
     */
    public function getAdminSuperuserUsername(): ?string
    {
        return $this->adminSuperuserUsername;
    }

    /**
     * @param null|string $adminSuperuserUsername
     */
    public function setAdminSuperuserUsername(?string $adminSuperuserUsername): void
    {
        $this->adminSuperuserUsername = $adminSuperuserUsername;
    }
}
