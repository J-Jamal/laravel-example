<div class="mb-2">
    <input type="text" name="list" class="form-control @error('list') is-invalid @enderror" id=""
        placeholder="The name of the task" value="{{ old('list', $task->list) }}">
    @error('list')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>
