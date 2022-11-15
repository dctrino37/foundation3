<?php

use App\Models\User;

$main_post_id = $post->id; ?>

{{-- {{url('users/images/'.$user->profile_image)}} --}}

@if($post->post_id == null)

<div @if (! $post->trashed())id="post-{{ $post->sequence }}"@endif
    class="post card mb-2 {{ $post->trashed() || $thread->trashed() ? 'deleted' : '' }}"
    :class="{ 'border-primary': selectedPosts.includes({{ $post->id }}) }">
    <div class="card-header">
        <div>
        <img loading="lazy" class="lazy relative lazyloaded fleft" src="{{asset('users/images/' . optional(User::where('id',$post->author_id)->first())->profile_image)}}" alt="profile image" width="72" height="72" style="border-radius: 9px;">

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
        <?php $post->setAttribute('post_id',$main_post_id); ?>

        @include ('forum::post.partials.delete_edit_reply', ['post' => $post])

    </div>

    {{-- </div> --}}
</div>


@if($post->post_details_ids !== null)

            <?php 

            $posts = $post->thread->posts()->whereIn('id',explode(',', $post->post_details_ids))->get();

            ?>

            <div class="responses">

            @foreach($posts as $post)

                <?php $post->setAttribute('post_id',$main_post_id) ?>

                {{-- {{dd($post)}} --}}

                @include ('forum::post.partials.quote', ['post' => $post,'main_post_id' => $main_post_id])

            @endforeach

            </div>

        @endif

@endif