<div class="form-group">
    @if($input->element == "input")
        <input class="form-control"@foreach($input->attr as $key => $value) {{ $key }}="{{ $value }}"@endif>
    @endif
</div>