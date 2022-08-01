@php
    Assets::addScriptsDirectly([
        'vendor/core/core/base/libraries/tinymce/tinymce.min.js',
        'vendor/core/core/base/js/editor.js',
    ]);

    $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-control editor-tinymce';
    $attributes['id'] = Arr::get($attributes, 'id', $name);
    $attributes['rows'] = Arr::get($attributes, 'rows', 4);
@endphp

{!! Form::textarea($name, htmlentities($value), $attributes) !!}
