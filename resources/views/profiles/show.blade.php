<x-app>
	
    <header class="mb-6 relative">
        <img src="/images/website.jpg" alt="">
        
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold">{{ $user->name }}</h2>
                <p>joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            
            @if(auth()->user()->is($user))
            <div>
                @can('edit', $user)
            <a href="{{ $user->path('edit')}}" clas="bg-blue-500">edit profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>

            </div>
            @endif
        </div>
        
        <img src="{{ $user->avatar }}" alt="" 
        class="rounded-full mr-2 absolute"
        style="width: 150px; left:calc(50% - 75px); top: 47%"
        >
        
        <p>this is the description of the user </p>
    </header>
    
    
    
    @include('_timeline', [
    
        'tweets' => $user->tweets
    ])
</x-app>