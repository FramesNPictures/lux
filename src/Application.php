<?php

namespace Fnp\Lux;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{
    public function defaultsPath($path = '')
    {
        return $this->basePath() . '/vendor/laravel/lumen-framework' . ($path ? '/' . $path : $path);
    }

    public function storagePath($path = '')
    {
        return $this->basePath() . '/var' . ($path ? '/' . $path : $path);
    }

    public function databasePath($path = '')
    {
        return $this->basePath() . '/etc/database' . ($path ? '/' . $path : $path);
    }

    public function resourcePath($path = '')
    {
        return $this->basePath() . '/etc/resources' . ($path ? '/' . $path : $path);
    }

    public function getConfigurationPath($name = NULL)
    {
        if (!$name) {
            return $this->basePath() . '/etc';
        }

        $path = $this->basePath() . '/etc' . ($name ? '/' . $name . '.php' : $name);

        if (file_exists($path)) {
            return $path;
        }

        $path = $this->defaultsPath('config/'.$name.'.php');

        if (file_exists($path)) {
            return $path;
        }

        return NULL;
    }

    protected function getLanguagePath()
    {
        $path = $this->basePath() . '/etc/lang';

        if (file_exists($path)) {
            return $path;
        }

        $path = $this->defaultsPath('resources/lang');

        if (file_exists($path)) {
            return $path;
        }

        return NULL;
    }


}