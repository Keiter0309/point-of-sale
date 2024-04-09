@vite('resources/css/app.css')
<div class="grid md:grid-cols-2">
  <div class="md:col-span-1">
    <div class="bg-gray-700 flex flex-col justify-center items-center h-[100vh]">
    <h1 class="text-[10rem] uppercase text-white">KAS</h1>
    <p class="text-lg md:text-xl uppercase text-white">end to end pos solution</p>
    </div>
  </div>
  <div class="md:col-span-1">
    <div class="flex flex-col justify-center items-center h-[100vh]">
    <h1 class="text-xl md:text-3xl uppercase font-bold">KAS POS</h1>
    <form method="POST" action="">
      @csrf
      <input type="password" name="password" id="password"
         class="transition-all duration-150 p-5 w-full md:w-1/2 border border-gray-200 bg-gray-300 rounded-lg text-xl"
         required/>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-5 text-xl">
        @foreach(range(7, 0, -1) as $number)
          <button type="button"
            class="px-6 md:px-12 py-4 md:py-8 rounded-lg bg-blue-500 hover:bg-indigo-500 transition-all duration-150 ease-linear text-white shadow-lg shadow-slate-400"
            onclick="document.getElementById('password').value += '{{ $number }}'"
          >
            {{ $number }}
          </button>
        @endforeach
        <button type="button"
          class="px-6 md:px-12 py-4 md:py-8 rounded-lg bg-yellow-400 hover:bg-yellow-300 transition-all duration-150 ease-linear text-white"
          onclick="document.getElementById('password').value = document.getElementById('password').value.slice(0, -1)"
        >
          <i class="fas fa-arrow-left"></i>
        </button>
        <button type="button"
          class="px-6 md:px-12 py-4 md:py-8 rounded-lg bg-red-500 hover:bg-red-400 transition-all duration-150 ease-linear text-white"
          onclick="if(document.getElementById('password').value.length === 6) { this.form.submit(); } else { alert('Please enter a 6-digit password'); }"
        >
          X
        </button>
      </div>
    </form>
    </div>
  </div>
</div>