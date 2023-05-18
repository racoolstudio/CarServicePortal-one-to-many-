@if ($errors->any())
    <div style="color :red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row mb-4">
    <label class="col-lg-3 col-form-label">Car Name</label>

    <div class="col-lg-9"><?php
    echo html_entity_decode(inputText('text', 'car_name', 'Car Name', old('car_name', $car->car_name ?? '')));
    ?>
    </div>

</div>

<div class="row mb-4">
    <label class="col-lg-3 col-form-label">Car Model</label>

    <div class="col-lg-9">
        <?php
        echo html_entity_decode(inputText('text', 'car_model', 'Car Model', old('car_model', $car->car_mode ?? '')));
        ?>
    </div>

</div>

<div class="row mb-4">
    <label class="col-lg-3 col-form-label">Owner</label>
    <div class="col-lg-9">
        <select name="owner_id" class="select">
            <option value="" {{ old('owner_id') === null ? 'selected' : '' }}>None</option>
            @foreach ($owners as $owner)
                <option value="{{ $owner->id }}"
                    {{ old('owner_id', $car->owner_id ?? '') == $owner->id ? 'selected' : '' }}>{{ $owner->first_name }}
                    {{ $owner->first_name }}</option>
            @endforeach
        </select>
    </div>
</div>
