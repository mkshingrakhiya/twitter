@props(['color' => 'blue', 'shade' => '600', 'rounded' => '', 'type' => 'button'])

@php
  $rounded = 'rounded' . ($rounded ? "-{$rounded}" : '');
  $hoverShade = 100 + (int) $shade;

  $attributes = $attributes->merge([
    'class' => "bg-{$color}-{$shade} hover:bg-{$color}-{$hoverShade} {$rounded} shadow text-white text-sm py-2 px-6"
  ]);
@endphp

<button {{ $attributes }} type="{{ $type }}">
  {{ $slot }}
</button>