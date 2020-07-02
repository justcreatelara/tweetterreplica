<h3 class="font-bold text-xl mb-4">following</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
    <li>
        <div class="flex items-center text-small m-2">
           
            <a href="{{ route('profile', $user) }}"	>
            <img src="{{ $user->avatar }}"
            alt=""
            class="rounded-full">
            </a>
            <a href="{{ route('profile', $user) }}"	>
            {{ $user->name }} </a>
        </div>
    </li>
    @empty
        <p> no friends yet </p>
    @endforelse
</ul>