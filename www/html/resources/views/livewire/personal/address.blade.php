<h4>Address</h4>
<div class="row g-3">
    <div class="col-md-10">
        <label class="form-label">@lang('apply.street')</label>
        <input class="form-control @error('email') is-invalid @enderror" wire:model.defer="street">
        @error('street')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
         
    <div class="col-md-2">
        <label class="form-label">@lang('apply.number')</label>
        <input class="form-control @error('email') is-invalid @enderror" wire:model.defer="number">
        @error('number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
    
<div class="row g-3">    
    <div class="col-md-2">
        <label class="col-form-label">@lang('apply.code')</label>
        <input class="form-control @error('telephone') is-invalid @enderror" wire:model.defer="code">
        @error('code')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-10">
        <label class="col-form-label">@lang('apply.city')</label>
        <input class="form-control @error('telephone') is-invalid @enderror" wire:model.defer="city">
        @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
