<div class="form-group">
    @if($input->element == "input")
        <input class="form-control"@foreach($input->attr as $key => $value) {{ $key }}="{{ $value }}"@endforeach>
    @elseif($input->element == "select")
        <select class="form-control"@foreach($input->attr as $key => $value) {{ $key }}="{{ $value }}"@endforeach>
            @foreach($input->options as $option)
                <option value="{{ $option->value }}">{{ $option->name }}</option>
            @endforeach
        </select>
    @endif
</div>