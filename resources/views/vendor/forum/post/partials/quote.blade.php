{{-- <div class="card mb-2" style="border-color: #eee;">
    <div class="card-body">
        <div class="mb-2">
            <span class="float-end">
                <a href="{{ Forum::route('thread.show', $post) }}" class="text-muted">#{{ $post->sequence }}</a>
            </span>
            {{ $post->authorName }} <span class="text-muted">{{ $post->posted }}</span>
        </div>
        {!! \Illuminate\Support\Str::limit(Forum::render($post->content)) !!}
        {!! Forum::render($post->content) !!}
    </div>

    @include ('forum::post.partials.delete_edit_reply', ['post' => $post])
</div>

 --}}

 <?php 

use App\Models\User;

$profile_image = User::where('id',$post->author_id)->first()->profile_image;

?>


<div class="card mb-2" style="border-color: #eee;">
    <div class="card-header">
        <div>
        <img loading="lazy" class="lazy relative lazyloaded fleft" src="{{asset('users/images/' . $profile_image)}}" alt="profile image" width="72" height="72" style="border-radius: 9px;">

        <div class="fleft">
        <div>{{ $post->authorName }}</div>

        <div class="text-muted">
            @include ('forum::partials.timestamp', ['carbon' => $post->created_at])
            @if ($post->hasBeenUpdated())
                ({{ trans('forum::general.last_updated') }} @include ('forum::partials.timestamp', ['carbon' => $post->updated_at]))
            @endif
        </div>
        </div>
        </div>
    </div>

    <div class="card-body">

        {!! Forum::render($post->content) !!}   

        @include ('forum::post.partials.delete_edit_reply', ['post' => $post])

    </div>




</div>