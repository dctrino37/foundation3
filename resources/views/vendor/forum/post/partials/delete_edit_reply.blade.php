@if (! isset($single) || ! $single)
            <div class="text-end">
                @if (! $post->trashed())
                    <a href="{{ Forum::route('post.show', $post) }}" class="card-link text-muted hidden">{{ trans('forum::general.permalink') }}</a>
                    @if ($post->sequence != 1)
                        @can ('deletePosts', $post->thread)
                            @can ('delete', $post)
                                <a href="{{ Forum::route('post.confirm-delete', $post) }}" class="card-link text-danger">{{ trans('forum::general.delete') }}</a>
                            @endcan
                        @endcan
                    @endif
                    @if(Auth::check() && optional(auth()->user())->id != $post->author_id)
                    <a href="#" class="card-link report_user_button" data-open-modal="report-user" author_id="{{$post->author_id}}">
                            {{-- <i data-feather="trash"></i> --}} {{ trans('forum::general.report_spam') }}
                    </a>
                    @endif
                    @can ('edit', $post)
                        <a href="{{ Forum::route('post.edit', $post) }}" class="card-link">{{ trans('forum::general.edit') }}</a>
                    @endcan
                    @can ('reply', $post->thread)

                        <a href="{{ Forum::route('post.create', $post) }}" class="card-link">{{ trans('forum::general.reply') }}</a>
                    @endcan
                @else
                    @can ('restorePosts', $post->thread)
                        @can ('restore', $post)
                            <a href="{{ Forum::route('post.confirm-restore', $post) }}" class="card-link">{{ trans('forum::general.restore') }}</a>
                        @endcan
                    @endcan
                @endif
            </div>
        @endif