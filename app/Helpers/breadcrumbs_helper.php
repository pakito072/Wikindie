<?php

if (!function_exists('generate_breadcrumbs')) {
    function generate_breadcrumbs($segments) {
        $breadcrumbs = '<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">';
        $breadcrumbs .= '<li class="breadcrumb-item text-muted"><a href="' . base_url('/') . '" class="text-muted text-hover-primary">Dashboard</a></li>';
        $breadcrumbs .= '<li class="breadcrumb-item"><span class="bullet bg-gray-200 w-5px h-2px"></span></li>';

        foreach ($segments as $segment) {
            if (next($segments)) {
                $breadcrumbs .= '<li class="breadcrumb-item text-muted">' . ucfirst($segment) . '</li>';
                $breadcrumbs .= '<li class="breadcrumb-item"><span class="bullet bg-gray-200 w-5px h-2px"></span></li>';
            } else {
                $breadcrumbs .= '<li class="breadcrumb-item text-dark">' . ucfirst($segment) . '</li>';
            }
        }

        $breadcrumbs .= '</ul>';
        return $breadcrumbs;
    }
}
