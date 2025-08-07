<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h1>
                        <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Back to List
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">User Information</h3>
                            <dl class="mt-2 text-sm text-gray-600 space-y-2">
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Username</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">{{ $user->username }}</dd>
                                </div>
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Full Name</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">{{ $user->first_name }} {{ $user->last_name }}</dd>
                                </div>
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Display Name</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">{{ $user->name }}</dd>
                                </div>
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Email Address</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">{{ $user->email }}</dd>
                                </div>
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Role</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->role === 'admin' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </dd>
                                </div>
                                <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium">Member Since</dt>
                                    <dd class="mt-1 sm:mt-0 sm:col-span-2">{{ $user->created_at->format('M d, Y') }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Edit User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
