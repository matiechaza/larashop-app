@isset($pageConfigs)
{!! \App\Helpers\Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = \App\Helpers\Helper::applClasses(); @endphp

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="rtl" class="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}">
<head>
    <meta charset=" utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', config('app.name'))</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    {{-- Include core + vendor Styles --}}
    @include('panels.styles')
</head>

@isset($configData["mainLayoutType"])
    @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalDetachedLayoutMaster' :
    'layouts.verticalDetachedLayoutMaster' ))
@endisset
