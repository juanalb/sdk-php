<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Tests\Feature\MembershipsSetting\Mock;

use PlugAndPay\Sdk\Entity\Response;

class StoreMembershipsSettingMockClient extends ShowMembershipsSettingMockClient
{
    protected array $requestBody;
    protected string $path;

    public function path(): string
    {
        return $this->path;
    }

    public function post(string $path, array $body): Response
    {
        $this->path        = $path;
        $this->requestBody = $body;

        return new Response(Response::HTTP_CREATED, $this->responseBody);
    }

    public function requestBody(): array
    {
        return $this->requestBody;
    }
}
