<?php

Route::resource('posts', 'PostsController', array('except' => 'show'));
