<div>
    <div class="m d-flex align-items-center">
        <span class="position-absolute ps-3 search-icon">
            <i class="fe fe-search"></i>
        </span>
        <label for="search" class="visually-hidden"></label>
        <input type="search" wire:model.live="search"  class="form-control ps-6" placeholder="Rechercher....">
    </div>

    <ul>
        {{-- @foreach ($product as $p)
        <li>{{$p->title}}</li>
        @endforeach --}}
    </ul>
</div>
