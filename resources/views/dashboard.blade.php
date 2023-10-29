<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @if(auth()->user()->name == 'Manager')

                 @foreach($applications as $aplication)
                        <div class='py-5'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-dark">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-dark-700 "></div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button class="rounded-2xl border bg-dark-100 px-3 py-1  text-xs font-bold">{{ $aplication->id }}</button>
                                        <div class="text-xs  ">Created at:  {{ $aplication->created_at}}</div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-6">
                                    <div class="mb-3 text-xl font-bold">{{ $aplication->subject }}</div>
                                    <div class="text-sm ">{{ $aplication->message }}</div>
                                </div>

                                <div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    @elseif(auth()->user()->name == 'Client')
                        "You are Client"
                        <!-- component -->
                        <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-dark'>
                            <div class='w-full max-w-lg px-10 py-8 mx-auto bg-dark rounded-lg shadow-xl'>
                                <div class='max-w-md mx-auto space-y-6'>

                                    <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <h2 class="text-2xl font-bold ">Submit your application</h2>
                                        <p class="my-4 opacity-70">Adipisicing elit. Quibusdam magnam sed ipsam deleniti debitis laboriosam praesentium dolorum doloremque beata.</p>
                                        <hr class="my-6">
                                        <label class="uppercase text-sm font-bold opacity-70">Name</label>
                                        <input type="text" name="subject"  required class="bg-black p-3 mt-2 mb-4 w-full  rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <label class="uppercase  text-sm font-bold opacity-70">Message</label>
                                        <input type="text" required name="message" class="p-3  mt-2 mb-4 w-full bg-black rounded">
                                        <label class="uppercase text-sm font-bold opacity-70">Language</label>
                                        <input type="file" name="file_url" class="p-3  mt-2 mb-4 w-full bg-black rounded">
                                        <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
