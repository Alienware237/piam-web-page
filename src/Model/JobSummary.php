<?php

declare(strict_types=1);

namespace okpt\my\web\page\Model;

class JobSummary
{
    /**
     * @var String|null
     *
     */
    private $id;

    private string $code;

    private string $title;

    private $message;

    public function __construct()
    {
    }

    /**
     * @param $id
     * @param $code
     * @param $title
     * @param $message
     *
     * @return JobSummary
     */
    public static function create($id, $code, $title, $message)
    {
        $job = new self();
        $job->setId($id);
        $job->setCode($code);
        $job->setTitle($title);
        $job->setMessage($message);

        return $job;
    }

    public function __toString()
    {
        $id = 'NO ID';
        if ($this->getId()) {
            $id = $this->getId();
        }
        return "{$id}: {$this->getTitle()} ({$this->getCode()}) - {$this->getMessage()}";
    }

    public function getCode(): string
    {
        return $this->code;
    }
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return  $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
