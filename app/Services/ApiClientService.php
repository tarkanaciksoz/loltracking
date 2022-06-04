<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiClientService
{
    /** @var string  $method */
    protected string $method;

    /** @var string  $url */
    protected string $url;

    /** @var array   $data */
    protected array  $data = [];

    /** @var array   $headers */
    protected array  $headers = [];

    /** @var string  $contentType */
    protected string $contentType = "application/json";

    /** @var string  $apiToken */
    private   string $apiToken;

    public function __construct()
    {
        $this->apiToken = "781cf3191418903fa38c889f392ff659";// TODO : model'dan çekilecek, create edilecek
    }

    /**
     * @param $method
     * @return $this
     */
    public function setMethod($method): static
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers): static
    {
        if(!empty($this->headers)) {
            $this->headers = array_merge($this->headers, $headers);
        } else {
            $this->headers = $headers;
        }

        return $this;
    }

    /**
     * @param string $contentType
     * @return $this
     */
    public function setContentType(string $contentType): static
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @param $apiToken
     * @return $this
     */
    private function setApiToken($apiToken): static
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return string
     */
    private function getApiToken(): string
    {
        return $this->apiToken;
    }

    /**
     * @return ApiClientResponse
     */
    public function sendRequest(): ApiClientResponse {
        try {
            $this->validateRequest();
            $method = $this->method;

            /** @var \Illuminate\Http\Client\Response $response */
            $response = Http::withHeaders($this->headers)
                ->withBody(json_encode($this->data), $this->contentType)
                ->$method($this->url);

            return new ApiClientResponse([
                'success' => $response->ok(),
                'message' => 'request sent',
                'data'    => $response->body(),
                'code'    => $response->status()
            ]);
        }catch (\Exception $e) {
            return new ApiClientResponse($e->getMessage());
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    private function validateRequest(): void {
        if (empty($this->method) || !in_array($this->method, ApiConstants::ALLOWED_REQUEST_METHODS)) {
            throw new \Exception("invalid method");
        } elseif (empty($this->url)) {
            throw new \Exception("invalid url");
        } elseif(empty($this->headers) || !array_key_exists('token', $this->headers)) {
            $this->setHeaders([
                'token' => $this->apiToken
            ]);
        }elseif (empty($this->contentType)) {
            throw new \Exception("invalid content-type");
        } elseif (empty($this->apiToken)) {
            throw new \Exception("invalid api token");
        }
    }
}
