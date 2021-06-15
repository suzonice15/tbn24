 @foreach($users as $user)
                                <li class="user" id="{{ $user->id }}">
                                    {{--will show unread count notification--}}
                                    @if($user->unread)
                                        <span class="pending">{{ $user->unread }}</span>
                                    @endif

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVYUbi-Jf5QxIW-koSAO97ZmKrOXadXeJ3xQ&usqp=CAU" alt="" class="media-object">
                                        </div>

                                        <div class="media-body">
                                            <p class="name">{{ $user->name }}</p>
                                            <p class="email">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
 