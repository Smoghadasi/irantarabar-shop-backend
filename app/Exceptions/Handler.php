<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Error;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        //
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 404);
        }

        if ($e instanceof NotFoundHttpException) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 404);
        }

        if ($e instanceof MethodNotAllowedHttpException) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 500);
        }

        if ($e instanceof Exception) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 500);
        }

        if ($e instanceof Error) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 500);
        }

        if ($e instanceof QueryException) {
            DB::rollBack();
            return $this->errorResponse($e->getMessage(), 500);
        }

        if (config('app.debug')) {
            DB::rollBack();
            return parent::render($request, $e);
        }

        DB::rollBack();
        return $this->errorResponse($e->getMessage(), 500);
    }
}
