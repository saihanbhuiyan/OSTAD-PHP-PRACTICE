<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\secrateMiddlewareM16Cls1;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // *******************sokol controller k created secretMiddleware er modde ante pari amra********************
        // ***** AMRA J SECRET MIDDLEWARE TI CREAT KORECHE ATJODI SOKOL MIDDLEWARE ER UPOR APPLY KORTE CHAI 
        // -->TAHOLE BOOTSRAP ER VITORE APP.PHP TE WITHMIDDLEWARE METHODE(MIDDLEWARE $MIDDLE WARE A ) METHOD ER VITOR
        // --->LIKHBO $middleware->append([secretMiddlewareM16Cls1::class]); tahole akhn porjonto joto middle ware creat
        // -->koreche ai project a sokol middle wae a ai secretMilldewarem16Cls1 condition ti chalu hoyejabe
        //----> ?password=1111 na dewa porjonto unlock hobena
        // ***********upore use secrateMiddllewareM16Cls1 bole dite hobe app.php te************************* 

        // $middleware->append([
        //     secrateMiddlewareM16Cls1::class //sokol file middle ware totha conditon er vitore chole gele tai comment kore rekheche 
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
