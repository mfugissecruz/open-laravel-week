@props(['disabled' => null, 'selectedValue' => null])

<select id="address_id" name="address_id" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach (App\Models\Address::all() as $option)
        <option {{ isset($selectedValue) && $option->id == $selectedValue->id ? 'selected' : '' }} value="{{ $option->id }}" >{{ $option->city.' - '.$option->state }}</option>
    @endforeach
</select>
