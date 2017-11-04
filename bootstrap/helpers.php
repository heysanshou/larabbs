<?php

function heywego()
{
  echo "hey,gogogo!!!";
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
