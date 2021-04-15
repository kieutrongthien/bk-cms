<?php
use Carbon\Carbon;
use Modules\Appearance\Entities\Appearance;
use Modules\Settings\Entities\Settings;
use Modules\Pages\Entities\Pages;
use Modules\Themes\Entities\Themes;

if(!function_exists('appearance')) {
    function appearance($key, $default = null)
    {
        $appearance = Appearance::where('key', $key)->first();
        
        if(!$appearance) {
            return $default;
        }

        return $appearance->value;
    }
}

if(!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $appearance = Settings::where('key', $key)->first();
        
        if(!$appearance) {
            return $default;
        }

        return $appearance->value;
    }
}

if(!function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d H:i:s')
    {
        return Carbon::parse($date)->format($format);
    }
}

if(!function_exists('toJson')) {
    function toJson($code = 200, $message, $data = null)
    {
        if($data) {
            $resp = [
                'code' => $code,
                'message' => $message,
                'data' => $data
            ];
        } else {
            $resp = [
                'code' => $code,
                'message' => $message
            ];            
        }

        return response()->json($resp, $code);
    }
}

if(!function_exists('getPages')) {
    function getPages() {
        return Pages::latest()->get();
    }
}

if(!function_exists('themes')) {
    function themes() {
        return Themes::latest()->get();
    }
}