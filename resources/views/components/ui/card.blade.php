{{--
    Card dengan judul dan subjudul (opsional).
    Contoh:
        <x-ui.card title="Money Flow" subtitle="Income vs spending">
            ...isi card...
        </x-ui.card>
--}}
@props(['title' => null, 'subtitle' => null])

<div {{ $attributes->merge(['class' => 'card']) }}>
    @if ($title)
        <h2 class="card-title">{{ $title }}</h2>
    @endif

    @if ($subtitle)
        <p class="card-subtitle">{{ $subtitle }}</p>
    @endif

    {{ $slot }}
</div>
