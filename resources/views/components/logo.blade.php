@props(['class' => 'h-14 w-auto', 'variant' => 'default'])

@php
    $imageSrc = match($variant) {
        'badge' => asset('images/omah-baut-badge.png'),
        'original' => asset('images/logo.jpg'),
        default => asset('images/omah-baut-logo.png'),
    };
@endphp

<img src="{{ $imageSrc }}" 
     alt="Logo OMAH BAUT SEMARANG" 
     class="{{ $class }} object-contain drop-shadow-sm select-none"
     loading="eager"
     onerror="this.onerror=null; this.src='{{ asset('images/logo.jpg') }}';" />
