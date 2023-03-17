<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                {{ __("管理者メニュー") }}
            </div>
            <a href="{{ route('admin.manage') }}" >
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <button type="button" class="p-6">商品管理ページ</button>
                </div>
            </a>
        </div>
    </div>
</x-admin-layout>
