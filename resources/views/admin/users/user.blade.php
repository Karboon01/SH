@extends('layouts.app')
@section('content')
    <div class="h-[72.7vh] flex items-center justify-center bg-neutral-700">
        <form action="/admin_users_edit/{{ $user->id }}" method="post">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="name" class="form-label">NAME</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $user->name }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="email" class="form-label">E-MAIL</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $user->email }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="is_admin" class="form-label">ADMIN</label>
                    </td>
                    <td>
                        <input type="text" name="is_admin" id="is_admin" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $user->is_admin }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT"
                class="inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
