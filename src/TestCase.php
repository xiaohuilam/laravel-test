<?php

namespace XiaohuiLam\Laravel\Test;

use Tests\TestCase as BaseTestCase;
use TestCase as LaravelTestCase;

if (!class_exists(TestCase::class)) {
    abstract class TestCase extends LaravelTestCase
    {
    }
} else {
    abstract class TestCase extends BaseTestCase
    {
    }
}
