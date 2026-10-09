{{--
    Kartu angka ringkasan.
    Contoh: <x-ui.stat-card label="Borrowed Items" value="3" caption="currently" />
--}}
@props(['label', 'value', 'caption' => null])

<div class="card">
    <div class="stat-label">{{ $label }}</div>
    <div class="stat-value">{{ $value }}</div>
    @if ($caption)
        <div class="stat-caption">{{ $caption }}</div>
    @endif
</div>
