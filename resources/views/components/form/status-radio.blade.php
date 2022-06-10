<div>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="terpenuhi" value="Ya" aria-required="true" class="valid" {{ old($name) == 'Terpenuhi' ? "checked" : (isset($selected) && $selected == 'Terpenuhi' ? "checked" : null ) }}>
        <span>Ya</span>
    </label>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="tidak_terpenuhi" value="Tidak" aria-required="true" class="valid" {{ old($name) == 'Tidak Terpenuhi' ? "checked" : (isset($selected) && $selected == 'Tidak Terpenuhi' ? "checked" : null ) }}>
        <span>Tidak</span>
    </label>
</div>