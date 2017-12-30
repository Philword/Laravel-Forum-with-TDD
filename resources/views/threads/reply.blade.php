<div class="panel panel-default">
                <div class="panel-heading">
                    <div class="level">
                        <p class="flex">
                           <a href="{{ route('profile', $reply->owner) }}"> {{ $reply->owner->name}} </a> said
                           <em> {{ $reply->created_at->diffForHumans() }}</em>
                        </p>
                        <div>
                            <form method="POST" action="/replies/{{ $reply->id}}/favorites">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default" {{ $reply->isFavorited() ? 'disabled' : '' }} >
                                    {{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count ) }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    {{ $reply->body }}
                </div>
            </div>
