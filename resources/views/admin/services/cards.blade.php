@extends('layouts.app')
@section('content')
    <div class="h-[72.7vh] flex items-center justify-center bg-neutral-700">
        <form action="/admin_services_cards_edit/{{ $cards->id }}" method="post">
            @method('patch')
            @csrf
            <table>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="icon" class="form-label">ICON</label>
                    </td>
                    <td>
                        <input type="text" name="icon" id="icon" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $cards->icon }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="image" class="form-label">IMAGE</label>
                    </td>
                    <td>
                        <input type="text" name="image" id="image" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $cards->image }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="headers" class="form-label">HEADER</label>
                    </td>
                    <td>
                        <input type="text" name="headers" id="headers" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $cards->headers }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="descr" class="form-label">DESCRIPTION</label>
                    </td>
                    <td>
                        <input type="text" name="descr" id="descr" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $cards->descr }}">
                    </td>
                </tr>
                <tr class="mb-3 flex justify-between gap-10">
                    <td>
                        <label for="prices" class="form-label">PRICES</label>
                    </td>
                    <td>
                        <input type="text" name="prices" id="prices" class="w-[500px] form-control bg-neutral-700"
                            value="{{ $cards->prices }}">
                    </td>
                </tr>
            </table>

            <input type="submit" value="SUBMIT"
                class="inline-block rounded text-base bg-green-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-green-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
        </form>
    </div>
@endsection
