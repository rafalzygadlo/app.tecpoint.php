<h4>@lang('apply.contact')</h4>
<div class="row g-3">
    
    <div class="col-md-6">
        <label class="form-label">@lang('apply.email')</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
                        
    <div class="col-md-6">
        <label class="form-label">@lang('apply.telephone')</label>
        <input type="tel" class="form-control @error('telephone') is-invalid @enderror" wire:model="telephone">
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
</div>
