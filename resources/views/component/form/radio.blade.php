<label class="custom-control custom-radio mx-1">
	<input type="radio" class="custom-control-input" 
		name="{{ $name }}" value="{{ $value }}" v-model="{{ $name }}"
		{{ isset($checked) ? 'checked' : '' }}>
	<span class="custom-control-label">{{ __($label) }}</span>
</label>