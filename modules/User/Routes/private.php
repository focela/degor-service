<?php
/*
 * Copyright (c) 2024 Focela Technologies. All rights reserved.
 * Use of this source code is governed by a MIT style
 * license that can be found in the LICENSE file.
 */

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Private\AuthController;

Route::post('login', [AuthController::class, 'postLogin'])->name('private.login.post')->withoutMiddleware('auth');
Route::get('user', [AuthController::class, 'getUser'])->name('private.user.info');
