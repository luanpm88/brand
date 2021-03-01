<select name="district_id" class="form-select d-block w-100" id="district" required="">
    <option value="">Chọn...</option>
    @foreach($districts as $district)
      <option value="{{ $district->id }}">{{ $district->name }}</option>
    @endforeach
</select>