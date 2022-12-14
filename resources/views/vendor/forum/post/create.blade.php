@extends ('forum::master', ['breadcrumbs_append' => [trans('forum::general.new_reply')]])

@section ('content')
    <div id="create-post">
        <h2>{{ trans('forum::general.new_reply') }} ({{ $thread->title }})</h2>

        {{-- {{dd(!$post->trashed())}} --}}

        @if(!$post == null && !$post->trashed())
            <p>{{ trans('forum::general.replying_to', ['item' => $post->authorName]) }}:</p>

            @include ('forum::post.partials.quote')
        @endif

        <form method="POST" action="{{ Forum::route('post.store', $thread) }}">
            {!! csrf_field() !!}
            @if ($post !== null)
                <input type="hidden" name="post" value="{{ $post->id }}">
                <input type="hidden" name="post_id" value="{{ $post->post_id }}">
            @endif

            <div class="mb-3">
                <textarea name="content" class="form-control">{{-- {{ old('content') ? old('content') : '@' . $post->authorName . ' ' }} --}}</textarea>
            </div>

            <div class="text-end">
                <a href="{{ URL::previous() }}" class="btn btn-link">{{ trans('forum::general.cancel') }}</a>
                <button type="submit" class="btn btn-primary px-5">{{ trans('forum::general.reply') }}</button>
            </div>
        </form>
    </div>
@stop
