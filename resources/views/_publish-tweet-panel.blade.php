<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
        name="body" 
        class="w-full"
        placeholder="what's on your mind"
        ></textarea>

        <hr>
        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" 
              alt="your avatar"
              class="rounded-full mr-2"
                width="30px" height="30px">
             <button type="submit"
             class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">tweet</button>
        </footer>     
    </form>

    @error('body')
				<p class="text-red-500 text-sm mt-2">{{ $message }}</p>
			@enderror
</div>