<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Status By: &emsp; <small>({{ $user->name }} -
                {{ $status->created_at->diffforHumans() }})</small></h3>
    </div>



    <div class="card-body">
        <div class="form-floating">
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ $user->getAvatar() }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-10">
                    <h3>{{ $status->status_text }}</h3>
                    @if ($status->type == 1)
                        <img src="{{ asset('status_images/' . $status->image_url) }}" alt="" class="img-responsive"
                            style="width: 100%;">
                    @endif
                </div>
                <ol class="col-12 mt-2 mb-2">

                    <strong>{{ $comment_count }} </strong> Comments
                    &emsp;
                    <strong> {{ $like_count }} </strong>Likes
                </ol>
                <div class="form-group row">
                    <div class="col-sm-9">
                        <button class="btn btn-xs btn-warning" type="button" data-toggle="collapse"
                            data-target="#view-comments-{{ $status->id }}" aria-expanded="false"
                            aria-controls="view-comments-{{ $status->id }}"> <i style="padding-right: 5px;"
                                class="fas fa-comments"></i>Views
                            & Comment</button>
                    </div>
                    <div class="col-sm-4">
                        {{-- @if (\App\Eloquent\statusLikes::where(['status_id' => $status->id, 'user_id' => Auth::user()->id])->first())
                                
                            @else --}}
                        <form id="quickForm" method="POST" action="{{ route('postlikes') }}">

                            {!! Form::open() !!}
                            {!! Form::hidden('like_status', $status->id) !!}
                            <button type="submit" class="btn btn-info btn-xs "><i style="padding-right: 5px;"
                                    class="fas fa-thumbs-up"></i>Like
                                
                            </button>
                            {!! Form::close() !!}
                        </form>
                        {{-- @endif --}}
                        

                    </div>
                </div>
            </div>

                </div>
            </div>

            <div class="panel-footer clearfix">
                <form id="quickForm" method="POST" action="{{ route('postcomment') }}">

                    {!! Form::open() !!}
                    {!! Form::hidden('post_comment', $status->id) !!}
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" name="comment-text" id="comment-text" class="form-control"
                                placeholder="Post a comment">
                            <span>
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                                        class="fas fa-paper-plane"></i>Send</button>

                            </span>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <div class="collapse" id="view-comments-{{ $status->id }}">
                        <div class="card card-body">
                            @if ($comments != null)
                                @foreach ($comments as $comment)
                                    <hr>
                                    <blockquote style="font-size: 14px !important;">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ \App\Eloquent\User::find($comment->user_id)->getavatar() }}"
                                                    class="img-responsive" alt="">
                                            </div>
                                            <div class="col-md-11">
                                                <ul class="list-inline list-unstyled">
                                                    <li>
                                                        <a
                                                            href="">{{ \App\Eloquent\User::find($comment->user_id)->name }}</a>
                                                        - Posted {{ $comment->created_at->diffforHumans() }}

                                                    </li>


                                                </ul>
                                                <p> {{ $comment->comment_text }}</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <hr>
                                @endforeach
                            @else
                                <p>This Status Contains No Comments</p>
                            @endif
                        </div>
                    </div>
                </form>






            </div>
        </div>
