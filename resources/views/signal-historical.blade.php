@extends('layout.tabs')

@section('body')
    <section id="content">
        <div class="mt-10">
            <h1 class="text-3xl font-bold">Signal Historical</h1>
            <p class="mt-2">Check out your latest notified signals</p>

            <div class="mt-6 rounded-xl border border-zinc-700 bg-zinc-950/50 px-6 py-2">
                <table class="w-full border-collapse border-spacing-0">
                    <thead>
                        <tr>
                            <th class="p-4 pl-0 text-left text-zinc-400">Token</th>
                            <th class="p-4 text-left text-zinc-400">Temporality</th>
                            <th class="p-4 text-left text-zinc-400">Indicator</th>
                            <th class="p-4 text-left text-zinc-400">Direction</th>
                            <th class="p-4 text-left text-zinc-400">Value</th>
                            <th class="p-4 text-left text-zinc-400">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <tr>
                            <td class="border-t border-solid border-zinc-800 p-4 pl-0">
                                <div class="flex items-center">
                                    <img class="mr-2 h-4 w-4" src="https://cryptofonts.com/img/SVG/btc.svg" />
                                    <div>
                                        Bitcoin <small class="ml-1 text-zinc-400">BTC</small>
                                    </div>
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    15.min
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    CFGI
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    <x-direction variant="up" />
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    Fear
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    2024-05-07 12:28:02
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t border-solid border-zinc-800 p-4 pl-0">
                                <div class="flex items-center">
                                    <img class="mr-2 h-4 w-4" src="https://cryptofonts.com/img/SVG/btc.svg" />
                                    <div>
                                        Bitcoin <small class="ml-1 text-zinc-400">BTC</small>
                                    </div>
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    15.min
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    CFGI
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    <x-direction variant="down" />
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    Fear
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    2024-05-07 12:28:02
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t border-solid border-zinc-800 p-4 pl-0">
                                <div class="flex items-center">
                                    <img class="mr-2 h-4 w-4" src="https://cryptofonts.com/img/SVG/btc.svg" />
                                    <div>
                                        Bitcoin <small class="ml-1 text-zinc-400">BTC</small>
                                    </div>
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    15.min
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    CFGI
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    <x-direction variant="auto" />
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    Fear
                                </div>
                            </td>
                            <td class="border-t border-solid border-zinc-800 p-4">
                                <div class="flex items-center">
                                    2024-05-07 12:28:02
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
