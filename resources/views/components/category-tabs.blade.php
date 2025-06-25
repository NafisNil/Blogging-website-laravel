
<!-- Be present above all else. - Naval Ravikant -->
                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="{{ url('/') }}" class="{{  !request('category') ? 'inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active' : 'inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' }}" aria-current="page">All </a>
                        </li>
                        @foreach ($categories as $item)
                        <li class="me-2">
                            <a href="{{ route('post.category', $item) }}"  class="{{ Route::currentRouteNamed('post.category') && request('category')->id == $item->id ? 'inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active' : 'inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' }}">{{ $item->name }}</a>
                        </li>
                        @endforeach

                    </ul>
