<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use PDOException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        if ($e instanceof NotFoundHttpException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => "not_found",
                        'message' => $e->getMessage(),
                    ],
                ],
                404
            );
        }

        if ($e instanceof MethodNotAllowedHttpException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => "method_not_allowed",
                        'message' => "{$request->method()} Method not allowed for {$request->path()}",
                    ],
                ],
                405
            );
        }

        if ($e instanceof UnauthorizedHttpException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => "unauthorized",
                        'message' => $e->getMessage(),
                    ],
                ],
                401
            );
        }

        if ($e instanceof \GuzzleHttp\Exception\RequestException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => 'guzzlehttp_exception',
                        'message' => $e->getMessage(),
                    ],
                ],
                400
            );
        }

        if ($e instanceof BadRequestHttpException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => "bad_request",
                        'message' => $e->getMessage(),
                    ],
                ],
                400
            );
        }

        if ($e instanceof ValidationException) {
            return response()->json(
                [
                    'error'  => [
                        'type'    => "validation",
                        'message' => $e->getMessage(),
                    ],
                    'errors' => $e->validator->errors(),
                ],
                400
            );
        }

        if ($e instanceof PDOException) {
            return response()->json(
                [
                    'error' => [
                        'type'    => "db_exception",
                        'message' => $e->getMessage(),
                    ],
                ],
                400
            );
        }

        if ($e instanceof Exception) {
            return response()->json(
                [
                    'error' => [

                        'type'    => "unhandled_exception",
                        'message' => $e->getMessage(),
                    ],
                ],
                400
            );
        }

        return parent::render($request, $exception);
    }
}
