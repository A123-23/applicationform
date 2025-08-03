@extends('layouts.app')

@section('content')
    <div class="text-center py-10">
        <h2 class="text-3xl font-bold text-white mb-4">Application Submitted Successfully!</h2>
        <p class="text-lg text-gray-200 mb-6">Thank you for submitting your application to Bicol University.</p>
        <a href="{{ route('application.choices') }}" id="home-btn" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-lg transition-colors">Go to Homepage</a>
    </div>
@endsection