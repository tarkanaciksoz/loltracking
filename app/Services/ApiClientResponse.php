<?php

namespace App\Services;

class ApiClientResponse
{
    /** @var bool    $success */
    protected bool   $success;

    /** @var string  $message */
    protected string $message;

    /** @var mixed $data */
    protected mixed $data;

    /** @var int $code */
    protected int $code;

    /**
     * @param $vars
     */
    public function __construct($vars) {
        if (is_string($vars)) {
            $this->setSuccess(false);
            $this->setMessage($vars);
            $this->setData(null);
            $this->setCode(400);
        }elseif (is_array($vars)) {
            if (array_key_exists('success', $vars)) {
                $this->setSuccess($vars['success']);
            }
            if (array_key_exists('message', $vars)) {
                $this->setMessage($vars['message']);
            }
            if (array_key_exists('data', $vars)) {
                $this->setData($vars['data']);
            }
            if (array_key_exists('code', $vars)) {
                $this->setCode($vars['code']);
            }
        }elseif (is_object($vars)) {
            if (property_exists('success', $vars)) {
                $this->setSuccess($vars->success);
            }
            if (property_exists('message', $vars)) {
                $this->setMessage($vars->message);
            }
            if (property_exists('data', $vars)) {
                $this->setData($vars->data);
            }
            if (property_exists('code', $vars)) {
                $this->setCode($vars->code);
            }
        }
    }

    /**
     * @param bool $success
     * @return $this
     */
    public function setSuccess(bool $success): static
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function setData(mixed $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param int $code
     * @return $this
     */
    public function setCode(int $code): static
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
}
