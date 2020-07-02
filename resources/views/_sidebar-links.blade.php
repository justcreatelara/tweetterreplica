<ul>
    <li><a class="font-bold text-lg mb-4 block"
         href="{{ route('home') }}">home</a></li>
    <li><a class="font-bold text-lg mb-4 block"
         href="#">explore</a></li>
    <li><a class="font-bold text-lg mb-4 block"
         href="#">notifications</a></li>
    <li><a class="font-bold text-lg mb-4 block"
         href="#">messages</a></li>
    <li><a class="font-bold text-lg mb-4 block"
         href="#">bookmarks</a></li>
     <li><a class="font-bold text-lg mb-4 block"
        href="#">lists</a></li>
    <li><a class="font-bold text-lg mb-4 block"
         href="{{ route('profile', auth()->user()) }}">profile</a></li>
     <li><form action="/logout" method="POST">
          @csrf
          
          <button>logout</button>
          
          </form></li>
</ul>