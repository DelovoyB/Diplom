@extends('layouts.admin')
@section('title', 'Администраторы')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="w-full text-center lg:text-left text-gray-700 text-3xl font-medium">Администраторы</h3>

        <div class="flex flex-col mt-8">
            <div class="pag flex flex-col items-center -my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 mb-2">
                    <div class="grid min-w-full grid-cols-[repeat(16,_minmax(0,_1fr))]">
                        <a href="{{ route("admin.admin_users.sort", ["id", isset($direction) && $direction == "asc" && $column == "id" ? "desc" : "asc"]) }}" class="flex items-center justify-center md:justify-start col-span-3 md:col-span-2 md:px-6 text-center md:text-left py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <span>ID</span>
                            @if(isset($direction) && isset($column) && $column == "id")
                                <svg class="w-3 h-3 @if($direction == "desc") rotate-180 @endif" fill="#6b7280" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21,21H3L12,3Z"></path></g></svg>
                            @endif
                        </a>
                        <a href="{{ route("admin.admin_users.sort", ["name", isset($direction) && $direction == "asc" && $column == "name" ? "desc" : "asc"]) }}" class="flex items-center justify-center md:justify-start col-span-5 md:col-span-5 xl:col-span-5 md:px-6 text-center md:text-left py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <span>Имя и фамилия</span>
                            @if(isset($direction) && isset($column) && $column == "name")
                                <svg class="w-3 h-3 @if($direction == "desc") rotate-180 @endif" fill="#6b7280" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21,21H3L12,3Z"></path></g></svg>
                            @endif
                        </a>
                        <a href="{{ route("admin.admin_users.sort", ["email", isset($direction) && $direction == "asc" && $column == "email" ? "desc" : "asc"]) }}" class="hidden md:flex items-center justify-center md:col-span-6 py-3 text-center border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <span>Email</span>
                            @if(isset($direction) && isset($column) && $column == "email")
                                <svg class="w-3 h-3 @if($direction == "desc") rotate-180 @endif" fill="#6b7280" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21,21H3L12,3Z"></path></g></svg>
                            @endif
                        </a>
                        <div class="col-span-8 md:col-span-3 xl:col-span-3 text-right px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <a href="{{ route("admin.admin_users.create") }}" class="text-blue-700 hover:text-blue-500">Добавить</a>
                        </div>
                        @foreach($admin_users as $admin_user)
                            <div class="odd:bg-white even:bg-slate-50 text-sm leading-5 text-gray-900 col-[1_/_span_16] grid grid-cols-[repeat(16,_minmax(0,_1fr))]">
                                <div class="col-span-3 md:col-span-2 md:px-6 text-center md:text-left py-4 font-medium">{{ $admin_user->id }}</div>
                                <div class="col-span-5 md:col-span-5 xl:col-span-5 md:px-6 text-center md:text-left py-4 font-medium">{{ $admin_user->name }}</div>
                                <div class="hidden md:block md:col-span-6 px-6 py-4 text-center">{{ $admin_user->email }}</div>
                                <div class="col-span-8 md:col-span-3 xl:col-span-3 px-6 py-4 text-right flex flex-row md:flex-col justify-end gap-2">
                                    <a href="{{ route("admin.admin_users.edit", $admin_user->id) }}" class="text-blue-700 hover:text-blue-500">
                                        <div class="hidden md:block">Редактировать</div>
                                        <svg class="inline-block md:hidden p-1 bg-blue-600 w-8 h-8" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"></path><path fill="#ffffff" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"></path></g></svg>
                                    </a>
                                    <form action="{{ route("admin.admin_users.destroy", $admin_user->id) }}" method="Post">
                                        @csrf

                                        @method('Delete')

                                        <button type="submit" class="text-red-600 hover:text-red-400" @if ($admin_users->count() < 2) disabled="disabled" @endif>
                                            <span class="hidden md:block">Удалить</span>
                                            <svg class="inline-block md:hidden p-1 bg-red-600 w-8 h-8" fill="#ffffff" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M831.24 280.772c5.657 0 10.24-4.583 10.24-10.24v-83.528c0-5.657-4.583-10.24-10.24-10.24H194.558a10.238 10.238 0 00-10.24 10.24v83.528c0 5.657 4.583 10.24 10.24 10.24H831.24zm0 40.96H194.558c-28.278 0-51.2-22.922-51.2-51.2v-83.528c0-28.278 22.922-51.2 51.2-51.2H831.24c28.278 0 51.2 22.922 51.2 51.2v83.528c0 28.278-22.922 51.2-51.2 51.2z"></path><path d="M806.809 304.688l-58.245 666.45c-.544 6.246-6.714 11.9-12.99 11.9H290.226c-6.276 0-12.447-5.654-12.99-11.893L218.99 304.688c-.985-11.268-10.917-19.604-22.185-18.619s-19.604 10.917-18.619 22.185l58.245 666.45c2.385 27.401 26.278 49.294 53.795 49.294h445.348c27.517 0 51.41-21.893 53.796-49.301l58.244-666.443c.985-11.268-7.351-21.201-18.619-22.185s-21.201 7.351-22.185 18.619zM422.02 155.082V51.3c0-5.726 4.601-10.342 10.24-10.342h161.28c5.639 0 10.24 4.617 10.24 10.342v103.782c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V51.3c0-28.316-22.908-51.302-51.2-51.302H432.26c-28.292 0-51.2 22.987-51.2 51.302v103.782c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48z"></path><path d="M496.004 410.821v460.964c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V410.821c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48zm-192.435 1.767l39.936 460.964c.976 11.269 10.903 19.612 22.171 18.636s19.612-10.903 18.636-22.171l-39.936-460.964c-.976-11.269-10.903-19.612-22.171-18.636s-19.612 10.903-18.636 22.171zm377.856-3.535l-39.936 460.964c-.976 11.269 7.367 21.195 18.636 22.171s21.195-7.367 22.171-18.636l39.936-460.964c.976-11.269-7.367-21.195-18.636-22.171s-21.195 7.367-22.171 18.636z"></path></g></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{ $admin_users->links() }}
            </div>
        </div>
    </div>
@endsection
