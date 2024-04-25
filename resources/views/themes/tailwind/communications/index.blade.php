@extends('voyager::master')
<link rel="stylesheet" href="{{ asset('themes/tailwind/css/custom-style.css') }}">
<script> 
    var base_url = '{{ url("/") }}'; 
</script>
@section('content')
<div class="flex px-8 mx-auto my-6 max-w-7xl xl:px-5">
    <!-- Left Settings Menu -->
    <div class="w-16 mr-6 md:w-1/5">
        <div
            class="relative flex flex-col items-start justify-center w-full py-6 bg-white border rounded-lg border-gray-150">
            <h3
                class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">
                Settings
            </h3>
            <a href="{{ route('wave.settings', 'profile') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/profile')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/profile')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="hidden truncate md:inline-block">Profile</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/profile')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="{{ route('wave.settings', 'security') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/security')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/security')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                    </path>
                </svg>
                <span class="hidden truncate md:inline-block">Security</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/security')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="{{ route('wave.settings', 'api') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/api')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/api')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
                <span class="hidden truncate md:inline-block">API Keys</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/api')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
        </div>
        <div
            class="relative flex flex-col items-start justify-center w-full py-6 mt-6 bg-white border rounded-lg border-gray-150">
            <h3
                class="hidden px-6 pb-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase md:block">
                Billing
            </h3>
            <a href="{{ route('wave.settings', 'plans') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/plans')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/plans')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span class="hidden truncate md:inline-block">Plans</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/plans')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="{{ route('wave.settings', 'subscription') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/payment-information')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/subscription')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                    </path>
                </svg>
                <span class="hidden truncate md:inline-block">Subscription</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/subscription')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
            <a href="{{ route('wave.settings', 'invoices') }}"
                class="block relative w-full flex items-center px-6 py-3 text-sm font-medium leading-5 @if(Request::is('settings/invoices')){{ 'text-gray-900' }}@else{{ 'text-gray-600' }}@endif transition duration-150 ease-in-out rounded-md group hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50">
                <svg class="flex-shrink-0 w-5 h-5 mr-3 -ml-1 @if(Request::is('settings/invoices')){{ 'text-gray-500' }}@else{{ 'text-gray-400' }}@endif transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                <span class="hidden truncate md:inline-block">Invoices</span>
                <span
                    class="absolute left-0 block w-1 transition-all duration-300 ease-out rounded-full @if(Request::is('settings/invoices')){{ 'bg-wave-500 h-full top-0' }}@else{{ 'top-1/2 bg-gray-300 group-hover:top-0 h-0 group-hover:h-full' }}@endif "></span>
            </a>
        </div>
    </div>
    <!-- End Settings Menu -->
    <div class="flex flex-col w-full bg-white border rounded-lg md:w-4/5 border-gray-150">
        <div class="uk-card-body">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <!-- Tab buttons -->
            <div class="tab-buttons">
                <button onclick="openTab(event, 'all')">All</button>
                <button onclick="openTab(event, 'ebay')">eBay</button>
                <button onclick="openTab(event, 'amazon')">Amazon</button>
                <button onclick="openTab(event, 'google')">Google</button>
            </div>
            <!-- Tab content -->
            <div id="all" class="tab">
                <table>
                    <tbody>
                        <tr>
                            <th>APP ID</th>
                            <th>DEV ID</th>
                            <th>CLIENT SECRET</th>
                            <th>API URI</th>
                            <th>APP AUTH URI</th>
                            <th>STATUS</th>
                            <th>CONNECTION TYPE</th>
                        </tr>
                        @if(count($all_records) >= 1)
                        @foreach($all_records as $records)
                        <tr>
                            <td>{{ $records->app_id }}</td>
                            <td>{{ $records->dev_id }}</td>
                            <td>{{ $records->client_secret }}</td>
                            <td>{{ $records->api_uri }}</td>
                            <td>{{ $records->api_auth_uri }}</td>
                            <td>
                            @if($records->is_active == 'disable')   
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round check-status" data-is-active="{{ $records->is_active }}"  data-id="{{ $records->id }}"></span>
                                </label>  
                            @elseif($records->is_active == 'enable')
                            <label class="switch">
                                <input type="checkbox" checked disabled>
                                <span class="slider round"></span>
                            </label>
                            @endif
                            </td>
                            <td>{{ $records->type }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div id="response-message"></div>
            </div>
            <div id="ebay" class="tab">
                <h2>eBay Api Details</h2>
                <form action="{{ route('update.create.connections') }}" method="post">
                    @csrf
                    <label for="app_id">APP ID:</label>
                    <input type="text" id="app_id" name="app_id" value="{{ $ebay_records->app_id ?? ''}}"><br>
                    @error('app_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="dev_id">DEV ID:</label>
                    <input type="text" id="dev_id" name="dev_id" value="{{ $ebay_records->dev_id ?? ''}}"><br>
                    @error('dev_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="client_secret">CLIENT SECRET:</label>
                    <input type="text" id="client_secret" name="client_secret"
                        value="{{ $ebay_records->client_secret ?? ''}}"><br>
                    @error('client_secret')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_uri">API URI:</label>
                    <input type="text" id="api_uri" name="api_uri" value="{{ $ebay_records->api_uri ?? ''}}"><br>
                    @error('api_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_auth_uri">API AUTH URI:</label>
                    <input type="text" id="api_auth_uri" name="api_auth_uri"
                        value="{{ $ebay_records->api_auth_uri ?? ''}}"><br>
                    @error('api_auth_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="type" name="type" value="ebay">
                    @error('status')
                    <div>{{ $message }}</div>
                    @enderror
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div id="amazon" class="tab">
                <h2>Amazon Api Details</h2>
                <form action="{{ route('update.create.connections') }}" method="post">
                    @csrf
                    <label for="app_id">APP ID:</label>
                    <input type="text" id="app_id" name="app_id" value="{{ $amazon_records->api_auth_uri ?? ''}}"><br>
                    @error('app_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="dev_id">DEV ID:</label>
                    <input type="text" id="dev_id" name="dev_id" value="{{ $amazon_records->dev_id ?? ''}}"><br>
                    @error('dev_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="client_secret">CLIENT SECRET:</label>
                    <input type="text" id="client_secret" name="client_secret"
                        value="{{ $amazon_records->client_secret ?? ''}}"><br>
                    @error('client_secret')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_uri">API URI:</label>
                    <input type="text" id="api_uri" name="api_uri" value="{{ $amazon_records->api_uri ?? ''}}"><br>
                    @error('api_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_auth_uri">API AUTH URI:</label>
                    <input type="text" id="api_auth_uri" name="api_auth_uri"
                        value="{{ $amazon_records->api_auth_uri ?? ''}}"><br>
                    @error('api_auth_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="type" name="type" value="amazon">
                    @error('status')
                    <div>{{ $message }}</div>
                    @enderror
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div id="google" class="tab">
                <h2>Google Api Details</h2>
                <form action="{{ route('update.create.connections') }}" method="post">
                    @csrf
                    <label for="app_id">APP ID:</label>
                    <input type="text" id="app_id" name="app_id" value="{{ $google_records->app_id ?? '' }}"><br>
                    @error('app_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="dev_id">DEV ID:</label>
                    <input type="text" id="dev_id" name="dev_id" value="{{ $google_records->dev_id ?? '' }}"><br>
                    @error('dev_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="client_secret">CLIENT SECRET:</label>
                    <input type="text" id="client_secret" name="client_secret"
                        value="{{ $google_records->client_secret ?? '' }}"><br>
                    @error('client_secret')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_uri">API URI:</label>
                    <input type="text" id="api_uri" name="api_uri" value="{{  $google_records->api_uri ?? ''}}"><br>
                    @error('api_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="api_auth_uri">API AUTH URI:</label>
                    <input type="text" id="api_auth_uri" name="api_auth_uri"
                        value="{{ $google_records->api_auth_uri ?? '' }}"><br>
                    @error('api_auth_uri')
                    <div>{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="type" name="type" value="google">
                    @error('status')
                    <div>{{ $message }}</div>
                    @enderror
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('themes/tailwind/js/custom-ajax.js') }}"></script>
<script src="{{ asset('themes/tailwind/js/custom-js.js') }}"></script>
@endsection