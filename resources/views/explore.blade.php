<x-app>
  <div>
    @foreach ($users as $user)
      <a href="{{ $user->path() }}" class="flex">
      <img src="{{ $user->avatar }}"
          alt="{{ $user->avatar }}'s avatar"
          width="60"
          class="rounded">
      </a>
      
      <div>
        <h2>{{ '@' . $user->username }}</h2>
      </div>
  </div>
  {{ $users->links() }}
</x-app>