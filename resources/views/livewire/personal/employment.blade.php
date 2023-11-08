<div class="row g-3">
    <div class="col-md-2">
        <label class="form-label">@lang('apply.from')</label>
        <input type="date" class="form-control @error('email') is-invalid @enderror" wire:model.defer="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
                        
    <div class="col-md-2">
        <label class="form-label">@lang('apply.to')</label>
        <input type="date" class="form-control @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-2">
        <label class="form-label">@lang('apply.telephone')</label>
        <input class="form-control @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">@lang('apply.telephone')</label>
        <input class="form-control @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
</div>
