@props(['column'])

<div class="row">
    @for ($i = 1; $i <= $column; $i++)
        <div class="col-sm-12 col-lg-{{ 12 / $column }} col-xl-{{ 12 / $column }}">
            {{ ${"column$i"} }}
        </div>
    @endfor
</div>
