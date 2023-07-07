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
                    <form wire:submit.prevent="submit">
                        @csrf
                        @include('livewire.employee.personal.personal')
                        <hr>
                        @include('livewire.employee.personal.contact')
                        <hr>
                        @include('livewire.employee.personal.address')
                        <hr>
                        @include('livewire.employee.personal.idcard')
                        <hr>
                        <h2>Employment</h2>
                        @include('livewire.employee.personal.employment')
                        @include('livewire.employee.personal.employment')
                        @include('livewire.employee.personal.employment')
                        @include('livewire.employee.personal.employment')
                        @include('livewire.employee.personal.employment')
                        <hr>

                        <h2>Photos</h2>
                        <div class="row g-3">
                        <div class="col-md-6">
                            <!-- photo 1 -->
                            @if ($this->photo1) 
                                <img width='400px' height='300px' src="{{ $this->photo1->temporaryUrl() }}">                        
                            @endif    
                            <div x-data="{ isUploading: false, progress: 0 }"
                                 x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <!-- File Input -->
                            <input type="file" wire:model="photo1">
 
                            <!-- Progress Bar -->
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- photo 1 -->
                            @if ($this->photo2) 
                                <img src="{{ $this->photo2->temporaryUrl() }}">                        
                            @endif    
                            <div x-data="{ isUploading: false, progress: 0 }"
                                 x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <!-- File Input -->
                            <input type="file" wire:model="photo2">
 
                            <!-- Progress Bar -->
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                        </div>
                        </div>

                        <div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <label class="form-check-label" for="policy">
                                        {{ __('apply.policy1') }}
                                        {{ __('apply.policy2') }}<a href="mailto:info@tec-point.de">info@tec-point.de</a>
                                    </label>    
                                    <input class="form-check-input @error('policy') is-invalid @enderror" type="checkbox" wire:model.defer="policy">
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
