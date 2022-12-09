<?php

namespace App\Exceptions;

use App\Helpers\Helper;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

    public function render($request, Throwable $e)
    {
        if ($this->isHttpException($e)) {

            $statusCode = $e->getStatusCode();
            $errorPageData = Helper::errorPage();
            $componets = Helper::componets();

            switch ($statusCode) {

                case '404':
                    return \Response::view('errors.404', compact('errorPageData', 'componets'), 404);

            }
        }
        return parent::render($request, $e);
    }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

}
