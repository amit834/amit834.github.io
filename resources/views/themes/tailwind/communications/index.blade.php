@extends('voyager::master')
<link rel="stylesheet" href="{{ asset('themes/tailwind/css/custom-style.css') }}">
<script> 
   var base_url = '{{ url("/") }}'; 
</script>
@section('content')
<div class="px-8 mx-auto my-6 max-w-7xl xl:px-5">
   <!-- End Settings Menu -->
   <div class="flex-col communications-saction">
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
                        <label class="switch">
                            <input type="checkbox" <?php if($records->is_active == 'enable'){ echo 'checked'; } ?>>
                            <span class="slider round check-status" data-id="{{ $records->id }}"></span>
                        </label>  
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
               <input type="text" id="app_id" name="app_id" value="{{ $ebay_records->app_id ?? ''}}" required><br>
               <label for="dev_id">DEV ID:</label>
               <input type="text" id="dev_id" name="dev_id" value="{{ $ebay_records->dev_id ?? ''}}" required><br>
               <label for="client_secret">CLIENT SECRET:</label>
               <input type="text" id="client_secret" name="client_secret" value="{{ $ebay_records->client_secret ?? ''}}" required><br>
               <label for="api_uri">API URI:</label>
               <input type="text" id="api_uri" name="api_uri" value="{{ $ebay_records->api_uri ?? ''}}" required><br>
               <label for="api_auth_uri">API AUTH URI:</label>
               <input type="text" id="api_auth_uri" name="api_auth_uri" value="{{ $ebay_records->api_auth_uri ?? ''}}" required><br>
               <input type="hidden" id="type" name="type" value="ebay" required>
               <button type="submit">Submit</button>
            </form>
         </div>
         <div id="amazon" class="tab">
            <h2>Amazon Api Details</h2>
            <form action="{{ route('update.create.connections') }}" method="post">
               @csrf
               <label for="app_id">APP ID:</label>
               <input type="text" id="app_id" name="app_id" value="{{ $amazon_records->api_auth_uri ?? ''}}" required><br>
               <label for="dev_id">DEV ID:</label>
               <input type="text" id="dev_id" name="dev_id" value="{{ $amazon_records->dev_id ?? '' }}" required><br>
               <label for="client_secret">CLIENT SECRET:</label>
               <input type="text" id="client_secret" name="client_secret" value="{{ $amazon_records->client_secret ?? ''}}" required><br>
               <label for="api_uri">API URI:</label>
               <input type="text" id="api_uri" name="api_uri" value="{{ $amazon_records->api_uri ?? ''}}" required><br>
               <label for="api_auth_uri">API AUTH URI:</label>
               <input type="text" id="api_auth_uri" name="api_auth_uri" value="{{ $amazon_records->api_auth_uri ?? '' }}" required><br>
               <input type="hidden" id="type" name="type" value="amazon" required>
               <button type="submit">Submit</button>
            </form>
         </div>
         <div id="google" class="tab">
            <h2>Google Api Details</h2>
            <form action="{{ route('update.create.connections') }}" method="post">
               @csrf
               <label for="app_id">APP ID:</label>
               <input type="text" id="app_id" name="app_id" value="{{ $google_records->app_id ?? '' }}" required><br>
               <label for="dev_id">DEV ID:</label>
               <input type="text" id="dev_id" name="dev_id" value="{{ $google_records->dev_id ?? '' }}" required><br>
               <label for="client_secret">CLIENT SECRET:</label>
               <input type="text" id="client_secret" name="client_secret"
                  value="{{ $google_records->client_secret ?? '' }}"><br>
               <label for="api_uri">API URI:</label>
               <input type="text" id="api_uri" name="api_uri" value="{{  $google_records->api_uri ?? ''}}" required><br>
               <label for="api_auth_uri">API AUTH URI:</label>
               <input type="text" id="api_auth_uri" name="api_auth_uri" value="{{ $google_records->api_auth_uri ?? '' }}" required><br>
               <input type="hidden" id="type" name="type" value="google" required>
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