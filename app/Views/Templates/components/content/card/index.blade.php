@props([
    'image' => '',
    'cardTitle' => '',
    'cardAction' => '',
    'contentRole' => 'default'
])

@php
    switch($contentRole) {
        case "primary":
            $contentClass = "bg-primary text-primary-content";
            break;
        case "secondary":
             $contentClass = "bg-primary text-primary-content";
            break;
        case "ghost":
        case "tertiary":
             $contentClass = "bg-ghost text-ghost-content";
            break;
        case "accent":
             $contentClass = "bg-accent text-accent-content";
            break;
       default:
           $contentClass = "";
    }
@endphp

<div {{ $attributes->merge(['css' => 'card bg-base-100 '.$contentClass]) }}>
    @if($image)
        <figure>
            {{ $image }}
        </figure>
    @endif
    <div class="card-body">
        @if($cardTitle)
            <h2 class="card-title">{{ $cardTitle }}</h2>
        @endif

        {{ $slot }}

        @if($cardAction)
            <div class="card-actions justify-end">
                {{ $cardAction }}
            </div>
        @endif
    </div>
</div>
