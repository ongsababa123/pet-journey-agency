<?php
/**
 * SEO helper
 * Usage:
 *  set_meta(['description' => '...', 'image' => base_url('...')]);
 *  echo seo('description');
 */

if (!function_exists('set_meta')) {
    function set_meta(array $data = [])
    {
        if (!isset($GLOBALS['_seo_meta']) || !is_array($GLOBALS['_seo_meta'])) {
            $GLOBALS['_seo_meta'] = [];
        }
        foreach ($data as $k => $v) {
            $GLOBALS['_seo_meta'][$k] = $v;
        }
    }
}

if (!function_exists('seo')) {
    function seo($key = null, $default = null)
    {
        $meta = isset($GLOBALS['_seo_meta']) && is_array($GLOBALS['_seo_meta']) ? $GLOBALS['_seo_meta'] : [];
        if ($key === null) return $meta;
        return array_key_exists($key, $meta) ? $meta[$key] : $default;
    }
}

if (!function_exists('set_meta_single')) {
    function set_meta_single(string $key, $value)
    {
        set_meta([$key => $value]);
    }
}
