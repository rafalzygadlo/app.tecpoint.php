<h2>Contact data</h2>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">@lang('apply.email')</label>
        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" wire:model.defer="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
                        
    <div class="col-md-6">
        <label class="form-label">@lang('apply.telephone')</label>
        <input type="tel" class="form-control form-control-lg @error('telephone') is-invalid @enderror" wire:model.defer="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
