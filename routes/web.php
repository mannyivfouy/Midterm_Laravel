<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () {
    Route::get("/dashboard", function () {
        return view("admin.dashboard");
    });

    Route::get("/products", function () {
        return view("admin.products.index");
    });

    Route::get("/categories", function () {
      return view("admin.categories.index");
    });
});
