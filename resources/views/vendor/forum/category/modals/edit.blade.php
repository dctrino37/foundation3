@component('forum::modal-form')
    @slot('key', 'edit-category')
    @slot('title', trans('forum::general.edit'))
    @slot('route', Forum::route('category.update', $category))
    @slot('method', 'PATCH')

    <div class="mb-3">
        <label for="title">{{ trans('forum::general.title') }}</label>
        <input type="text" name="title" value="{{ old('title') ?? $category->title }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description">{{ trans('forum::general.description') }}</label>
        <input type="text" name="description" value="{{ old('description') ?? $category->description }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="meta_title">{{ trans('middle_east_office.meta_title') }}</label>
        <input type="text" name="meta_title" value="{{ old('meta_title') ?? $category->meta_title }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="meta_keywords">{{ trans('middle_east_office.meta_keywords') }}</label>
        <input type="text" name="meta_keywords" value="{{ old('meta_keywords') ?? $category->meta_keywords }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="meta_description">{{ trans('middle_east_office.meta_description') }}</label>
        <textarea name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') ?? $category->meta_description }}" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group{{ $errors->has('category_image') ? ' is-invalid' : '' }} col-md-12">
                    <label for="category_image">Category image</label><br>
                    <div class="input-group">
                      <input type="file" class="form-control" name="category_image" id="category_image">
                      {{-- <label class="custom-file-label" for="category_image">Choose file</label> --}}
                    </div>
                    @if ($errors->has('category_image'))
                    <span class="" style="color: red">
                      *{{ $errors->first('category_image') }}
                    </span>
                    @endif
    </div>
                  
                  {{-- <div class="form-group col-md-12" >
                    <label for="category_image">Profile Image (Current):</label><br>
                    <img src="{{url('users/images/'.$user->profile_image)}}" alt="" height="150" width="auto">
                  </div> --}}

    
    <div class="mb-3">
        <div class="form-check">
            <input type="hidden" name="accepts_threads" value="0" />
            <input class="form-check-input" type="checkbox" name="accepts_threads" id="accepts-threads" value="1" {{ $category->accepts_threads ? 'checked' : '' }}>
            <label class="form-check-label" for="accepts-threads">{{ trans('forum::categories.enable_threads') }}</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="hidden" name="is_private" value="0" />
            <input class="form-check-input" type="checkbox" name="is_private" id="is-private" value="1" {{ $category->is_private ? 'checked' : '' }} {{ $privateAncestor != null ? 'disabled' : '' }}>
            <label class="form-check-label" for="is-private">{{ trans('forum::categories.make_private') }}</label>
        </div>
    </div>
    @if ($privateAncestor != null)
        <div class="alert alert-primary" role="alert">
            {!! trans('forum::categories.access_controlled_by_private_ancestor', ['category' => "<a href=\"{$privateAncestor->route}\">{$privateAncestor->title}</a>"]) !!}
        </div>
    @endif

    @include ('forum::category.partials.inputs.color')

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">{{ trans('forum::general.save') }}</button>
    @endslot
@endcomponent