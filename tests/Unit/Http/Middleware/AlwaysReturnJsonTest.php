<?php

namespace Http\Middleware;

use Tests\TestCase;

class AlwaysReturnJsonTest extends TestCase
{
    public function test_it_will_apply_content_type_application_json_properly(): void
    {
        $this->getJson(route('api.ping'), ['Content-Type' => 'text/html'])
            ->assertHeader('Content-Type', 'application/json');
    }
}
