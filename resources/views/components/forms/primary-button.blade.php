<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
        <button {{ $attributes->merge([
            'class' => 'btn btn-primary',
            'type' => 'submit'
            ]) }}>{{$slot}}</button>
    </div>
</div>