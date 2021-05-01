<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


    // public function render($request, Throwable $e)
    // {
    //     if ($e instanceof ValidationException) {
    //         return $this->convertValidationExceptionToResponse($e, $request);

    //         // return response()->json(['message' => $e->errors(), 'status' => $e->status]);
    //     }
    //     // dd($e);
    //     return response()->error($e);
    // }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    // public function render($request, Throwable $e)
    // {
    //     if (method_exists($e, 'render') && $response = $e->render($request)) {
    //         return Router::toResponse($request, $response);
    //     } elseif ($e instanceof Responsable) {
    //         return $e->toResponse($request);
    //     }

    //     $e = $this->prepareException($this->mapException($e));

    //     foreach ($this->renderCallbacks as $renderCallback) {
    //         if (is_a($e, $this->firstClosureParameterType($renderCallback))) {
    //             $response = $renderCallback($e, $request);

    //             if (!is_null($response)) {
    //                 return $response;
    //             }
    //         }
    //     }

    //     if ($e instanceof HttpResponseException) {
    //         return $e->getResponse();
    //     } elseif ($e instanceof AuthenticationException) {
    //         return $this->unauthenticated($request, $e);
    //     } elseif ($e instanceof ValidationException) {
    //         return $this->convertValidationExceptionToResponse($e, $request);
    //     }

    //     return $request->expectsJson()
    //         ? $this->prepareJsonResponse($request, $e)
    //         : $this->prepareResponse($request, $e);
    // }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
