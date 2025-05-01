<x-layout>
    <x-slot:heading> Edit Job</x-slot:heading>
<form method="POST" action="/jobs/{{$jobs->id}}">
    @csrf
    @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <!--<div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">workcation.com/</div>-->
              <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{ $jobs->title}}" placeholder="Shift Leader" required>
                @error('title')
                    {{$message}}
                @enderror
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{ $jobs->salary}}" placeholder="$50000 per year" required>
                @error('salary')
                    {{$message}}
                @enderror
        </div>
        </div>

        <!-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
        @endif -->
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <div class="flex items-center">
      <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
    </div>
    <div class="flex items-center justify-end gap-x-6">
      <!-- <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button> -->
      <a href="/jobs">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>  
  </div>
</form>
<form method="POST" id="delete-form" action="/jobs/{{$jobs->id}}">
  @csrf
  @method('DELETE')
</form>
</x-layout>