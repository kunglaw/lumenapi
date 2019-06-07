<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("/key","ExampleController@generateKey");
$router->get("/user/{id}","ExampleController@getUser");
$router->get("/user/response","ExampleController@response");

$router->get("/foo",function(){
    return json_encode(array(
        "foo"=>"bar"
    ));
});

$router->post("/insert",function(){
    return "data has been inserted";
});

$router->put("/update",function(){
    return "data has been update";
});

$router->delete("/delete",function(){
    return "data has been delete";
});

$router->patch("/patch",function(){
    return "data has been patch";
});

$router->options("/options",function(){
    return "data has been options";
});

$router->get("/detail/{id}",function($id){
    return "data milik id => $id";
});

$router->get("/post/{postId}/comment/{commentId}",function($postId, $commentId ){
    return "post => $postId , comment => $commentId";
});

$router->get("optional[/{id}]",function($id = null){
    return "parameter optional => $id";
});

// $router->get("/profile",function(){
//     return redirect()->route("route.profile");
// });

// $router->get("/profile/{app}",["as" => "route.profile"],function() use ($app ){
//     return "user dashbord";
// });

$router->get("/fail",function(){
    return "you fail";
});

$router->group(["prefix" => "admin"],function() use($router){
    $router->get("/home",["middleware" => "age", function(){
        return "Old enough";
    }],function(){
        return "home admin";
    });

    $router->get("/dashboard",function(){
        return "dashboard admin";
    });
});


