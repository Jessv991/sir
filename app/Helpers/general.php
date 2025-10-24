<?php

if (!function_exists('getIcon')) {
    function getIcon($estado)
    {
        return asset($estado == 1 ? 'assets/icon/check.png' : 'assets/icon/cancel.png');
    }
}

