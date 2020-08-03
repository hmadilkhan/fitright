<select id="city" name="city" class="selectpicker">
    <option value="" disabled selected>Select City</option>
    @foreach($result as $value)
        <option value="{{$value->id}}" >{{$value->city_name}}</option>
    @endforeach
</select>
