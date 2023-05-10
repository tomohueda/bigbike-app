<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\View\Factory;
use App\Services\ProductService;

class SetVars
{
    public function __construct(Factory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $categories = ProductService::getProductCategories();
        $classes = ProductService::getRentalClasses();
        $this->viewFactory->share('categories', $categories);
        $this->viewFactory->share('classes', $classes);
        $this->viewFactory->share('path', $request->path());
        return $next($request);
    }
}
