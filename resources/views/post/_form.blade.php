<div class="form-group">
    <label for="slag">Заголовок eng.:</label>
    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
</div>
<div class="form-group">
    <label for="title">Заголовок:</label>
    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="excerpt" name="excerpt">Стаття коротко:</label>
    <textarea class="form-control" rows="4" type="textarea" name="excerpt" value="{{old('excerpt')}}"></textarea>
</div>
<div class="form-group">
    <label for="content">Стаття:</label>
    <textarea class="form-control" rows="5" type="textarea" name="content" value="{{old('content')}}"></textarea>
</div>
<div class="checkbox">
    <label><input type="checkbox" name="published">Опублікована:</label>
</div>