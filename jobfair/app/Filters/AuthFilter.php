<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Http\RequestInterface;
use CodeIgniter\Http\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Use service('request')->getUri() to access the URI
        $uri = service('request')->getUri();

        // Get the first segment of the URI
        $segment1 = $uri->getSegment(1);

        // Example logic to handle specific segments
        if ($segment1 === 'login') {
            // Do something for login segment, or redirect
            return null;
        }

        // Allow the request to continue, or apply further logic
        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Optional: You can add logic here after the request is processed
    }
}
