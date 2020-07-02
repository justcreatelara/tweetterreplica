
@if(auth()->user()->isNot($user))
<form method="POST" action="{{ route('follow', $user->username) }}">
    @csrf
    <button	
        type="submit"
        class="bg-blue-500"> {{auth()->user()->following($user) ? 'unfollow me' : 'follow me'}}</button>
    </form>
    @endif