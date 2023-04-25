<?php

namespace Tests;

use Illuminate\Support\Str;

trait TestHelpers
{

    public function getValidData(array $custom = [])
    {
        return array_merge($this->defaultData(), $custom);
    }

    protected function defaultData()
    {
        return $this->defaultData;
    }
}
