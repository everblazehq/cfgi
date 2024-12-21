@extends('layout.tabs')

@section('body')
    <section id="content" x-data="{ showModalAddress: false }">
        <div class="mt-4 rounded-xl border border-zinc-700 bg-zinc-950/50 p-8">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold">Billing Address</h1>
                <x-button variant="outline" x-on:click="showModalAddress = true">Edit address</x-button>
            </div>

            <div class="flex items-start gap-16">
                <ul class="mt-8">
                    <li>
                        <p><strong>Name:</strong> John
                        <p>
                    </li>
                    <li>
                        <p><strong>Surname:</strong> Doe
                        <p>
                    </li>
                    <li>
                        <p><strong>Address:</strong> Streetname 1551
                        <p>
                    </li>
                    <li>
                        <p><strong>Zipcode:</strong> 31231
                        <p>
                    </li>
                    <li>
                        <p><strong>State:</strong> Ohio
                        <p>
                    </li>
                    <li>
                        <p><strong>Country:</strong> USA
                        <p>
                    </li>
                </ul>
                <ul class="mt-8">
                    <li>
                        <p><strong>Company:</strong> Johnpany Inc.
                        <p>
                    </li>
                    <li>
                        <p><strong>VAT number:</strong> 12345678
                    </li>
                </ul>
            </div>
        </div>

        <x-modal title="Add a New Address" subtitle="Add address for billing address" x-show="showModalAddress === true">
            <form>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label for="first-name">First Name</label>
                        <x-input class="mt-2" id="first-name" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="last-name">Last Name</label>
                        <x-input class="mt-2" id="last-name" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="company">Company</label>
                        <x-input class="mt-2" id="company" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="vat">VAT number / company id</label>
                        <x-input class="mt-2" id="vat" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="Country">Country</label>
                        <x-select class="mt-2">
                            <option value="" disabled selected>Select a country</option>
                            <option value="nl">Netherlands</option>
                        </x-select>
                    </div>
                    <div class="flex flex-col">
                        <label for="city">City</label>
                        <x-input class="mt-2" id="city" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="address-line-1">Address Line 1</label>
                        <x-input class="mt-2" id="address-line-1" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="address-line-2">Address Line 2</label>
                        <x-input class="mt-2" id="address-line-2" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="state-province">State / Province</label>
                        <x-input class="mt-2" id="state-province" type="text" placeholder="Test" />
                    </div>
                    <div class="flex flex-col">
                        <label for="zip-code">Zip Code</label>
                        <x-input class="mt-2" id="zip-code" type="text" placeholder="Test" />
                    </div>
                </div>
            </form>
        </x-modal>
    </section>
@endsection
