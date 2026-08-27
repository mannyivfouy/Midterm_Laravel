<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function() {
  return view("admin.auth.login");
});

Route::prefix("admin")->group(function () {
  Route::get("/dashboard", function () {
    return view("admin.dashboard");
  });

  Route::get("/products", function () {
    return view("admin.products.index");
  });

  Route::get("/products/create", function () {
    return view("admin.products.create");
  });

  Route::get("/categories", function () {
    return view("admin.categories.index");
  });

  Route::get("/categories/create", function () {
    return view("admin.categories.create");
  });

  Route::get("/users", function () {
    return view("admin.users.index");
  });

  Route::get("/users/create", function () {
    return view("admin.users.create");
  });

});
