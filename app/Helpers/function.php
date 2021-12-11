<?php

if (!function_exists('checkActiveUrl')) {
    function checkActiveUrl($url) {
        return request()->is($url) ? 'active' : '';
    }
}
