<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class isAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('user_type')!="Administrator") {
            return redirect()
                ->to(base_url());
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}