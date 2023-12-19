<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            
            @if(session()->has('success'))
            <div class="alert alert-info">
                {{ session()->get('success')}}
            </div>
            @endif
            
            <div class="box">
            <h1 class="box-header">@lang('apply.title') </h1>
            <hr>
                <div class="card-body">
                    <form wire:submit="submit">
                        @csrf
                        @include('livewire.personal.personal')
                        <hr>
                        @include('livewire.personal.contact')
                        <hr>
                        @include('livewire.personal.address')
                        <hr>
                        <!-- @include('livewire.personal.idcard') -->
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <label class="form-check-label" for="policy">
                                        {{ __('apply.policy1') }}
                                        {{ __('apply.policy2') }}<a href="mailto:info@tec-point.de">info@tec-point.de</a>
                                    </label>    
                                    <input class="form-check-input @error('policy') is-invalid @enderror" type="checkbox" wire:model="policy">
                                    @error('policy')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    @lang('apply.send')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
