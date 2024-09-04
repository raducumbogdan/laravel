<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Plenty\Logger\PlentyLogger;

class TestLoggerController extends Controller
{
    public function __construct(
        private readonly PlentyLogger $logger,
    ) {
    }

    public function __invoke(): JsonResponse
    {
        $this->logger->debug(
            'This is a great test',
            ['we' => 'have', 'nice' => 'attributes'],
            'there-is-also-a-trace-key'
        );

        return new JsonResponse(['successfully' => 'logged']);
    }
}
