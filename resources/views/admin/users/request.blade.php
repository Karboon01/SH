@extends('layouts.app')
@section('content')
    <div class="h-[72.7vh] flex items-center justify-center bg-neutral-700">
        <form action="/admin_users_requests_edit/{{ $requests->id }}" method="post">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="data" class="form-label">DATA</label>
                    </td>
                    <td>
                        <input type="datetime-local" name="data" id="data" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $requests->data }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="text" class="form-label">TEXT</label>
                    </td>
                    <td>
                        <input type="text" name="text" id="text" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $requests->text }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="price" class="form-label">PRICE</label>
                    </td>
                    <td>
                        <input type="text" name="price" id="price" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $requests->price }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT"
                class="inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
