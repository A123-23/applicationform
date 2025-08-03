@extends('layouts.app')

@section('content')
    <form action="{{ route('application.personalInfo.post') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h2 class="text-2xl font-bold mb-6 text-white">Personal Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-8">
            <div class="md:col-span-2">
                <label for="last_name" class="block text-lg font-semibold mb-2 text-white">TYPE YOUR NAME IN THE FOLLOWING SEQUENCE</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last name" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('last_name') }}">
                @error('last_name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-last_name" class="text-red-500 text-sm hidden">This field is required.</span>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 mt-2" value="{{ old('first_name') }}">
                @error('first_name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-first_name" class="text-red-500 text-sm hidden">This field is required.</span>
                <input type="text" id="middle_name" name="middle_name" placeholder="Middle name" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 mt-2" value="{{ old('middle_name') }}">
                @error('middle_name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-middle_name" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>

            <div class="text-white">
                <label class="block text-lg font-semibold mb-2">Citizenship</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mb-2 sm:mb-0">
                        <input type="radio" name="citizenship" value="Filipino" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('citizenship') == 'Filipino' ? 'checked' : '' }}>
                        <span class="ml-2">Filipino</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="citizenship" value="Non-Filipino" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('citizenship') == 'Non-Filipino' ? 'checked' : '' }}>
                        <span class="ml-2">Non-Filipino</span>
                    </label>
                </div>
                @error('citizenship') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-citizenship" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>

            <div class="text-white">
                <label class="block text-lg font-semibold mb-2">Sex</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mb-2 sm:mb-0">
                        <input type="radio" name="sex" value="Male" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('sex') == 'Male' ? 'checked' : '' }}>
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="sex" value="Female" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('sex') == 'Female' ? 'checked' : '' }}>
                        <span class="ml-2">Female</span>
                    </label>
                </div>
                @error('sex') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-sex" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>

            <div>
                <label for="gender" class="block text-lg font-semibold mb-2 text-white">GENDER: (OPTIONAL)</label>
                <input type="text" id="gender" name="gender" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('gender') }}">
                {{-- Gender is optional, no error span needed --}}
            </div>

            <div>
                <label for="religion" class="block text-lg font-semibold mb-2 text-white">Religion:</label>
                <input type="text" id="religion" name="religion" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('religion') }}">
                @error('religion') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-religion" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <hr class="my-8 border-t border-white border-opacity-30">

        <h2 class="text-2xl font-bold mb-6 mt-8 text-white">Contact and Address</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-8">
            <div class="md:col-span-2">
                <label for="permanent_address_number_street" class="block text-lg font-semibold mb-2 text-white">PERMANENT HOME ADDRESS</label>
                <input type="text" id="permanent_address_number_street" name="permanent_address_number_street" placeholder="Number and Street" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('permanent_address_number_street') }}">
                @error('permanent_address_number_street') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-permanent_address_number_street" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div class="md:col-span-2">
                <input type="text" id="subd_brgy" name="subd_brgy" placeholder="Subd./Village, Brgy." class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('subd_brgy') }}">
                @error('subd_brgy') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-subd_brgy" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:col-span-2">
                <div>
                    <input type="text" id="city_town_province" name="city_town_province" placeholder="City/Town & Province" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('city_town_province') }}">
                    @error('city_town_province') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-city_town_province" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
                <div>
                    <input type="text" id="postcode" name="postcode" placeholder="Postcode" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('postcode') }}">
                    @error('postcode') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-postcode" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
            </div>
            <div>
                <label for="email_address" class="block text-lg font-semibold mb-2 text-white">Email Address</label>
                <input type="email" id="email_address" name="email_address" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('email_address') }}">
                @error('email_address') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-email_address" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div>
                <label for="contact_phone" class="block text-lg font-semibold mb-2 text-white">Contact Phone</label>
                <input type="tel" id="contact_phone" name="contact_phone" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('contact_phone') }}">
                @error('contact_phone') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-contact_phone" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <hr class="my-8 border-t border-white border-opacity-30">

        <h2 class="text-2xl font-bold mb-6 mt-8 text-white">Educational Background & Other Details</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-8">
            <div class="md:col-span-2">
                <label for="shs_graduated_from" class="block text-lg font-semibold mb-2 text-white">Senior High School graduated or graduating from:</label>
                <input type="text" id="shs_graduated_from" name="shs_graduated_from" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('shs_graduated_from') }}">
                @error('shs_graduated_from') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-shs_graduated_from" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:col-span-2">
                <div>
                    <label for="shs_school_address" class="block text-lg font-semibold mb-2 text-white">School Address</label>
                    <input type="text" id="shs_school_address" name="shs_school_address" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('shs_school_address') }}">
                    @error('shs_school_address') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-shs_school_address" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
                <div>
                    <label for="expected_graduation_date" class="block text-lg font-semibold mb-2 text-white">Expected/Date of graduation</label>
                    <input type="date" id="expected_graduation_date" name="expected_graduation_date" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('expected_graduation_date') }}">
                    @error('expected_graduation_date') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-expected_graduation_date" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
            </div>
            <div class="md:col-span-2">
                <label for="jhs_completed_from" class="block text-lg font-semibold mb-2 text-white">Junior High School Completed From:</label>
                <input type="text" id="jhs_completed_from" name="jhs_completed_from" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('jhs_completed_from') }}">
                @error('jhs_completed_from') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-jhs_completed_from" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:col-span-2">
                <div>
                    <label for="jhs_school_address" class="block text-lg font-semibold mb-2 text-white">School Address</label>
                    <input type="text" id="jhs_school_address" name="jhs_school_address" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('jhs_school_address') }}">
                    @error('jhs_school_address') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-jhs_school_address" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
                <div>
                    <label for="learner_reference_no" class="block text-lg font-semibold mb-2 text-white">Learner's Reference No.</label>
                    <input type="text" id="learner_reference_no" name="learner_reference_no" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('learner_reference_no') }}">
                    @error('learner_reference_no') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-learner_reference_no" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
            </div>
            <div class="md:col-span-2">
                <label for="applicant_place_of_birth" class="block text-lg font-semibold mb-2 text-white">Applicant's Place of Birth</label>
                <input type="text" id="applicant_place_of_birth" name="applicant_place_of_birth" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('applicant_place_of_birth') }}">
                @error('applicant_place_of_birth') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-applicant_place_of_birth" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div class="text-white md:col-span-2">
                <label class="block text-lg font-semibold mb-2">Civil Status</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mb-2 sm:mb-0">
                        <input type="radio" name="civil_status" value="Single" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('civil_status') == 'Single' ? 'checked' : '' }}>
                        <span class="ml-2">Single</span>
                    </label>
                    <label class="inline-flex items-center mb-2 sm:mb-0">
                        <input type="radio" name="civil_status" value="Married" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('civil_status') == 'Married' ? 'checked' : '' }}>
                        <span class="ml-2">Married</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="civil_status" value="Others" id="civil_status_others_radio" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('civil_status') == 'Others' ? 'checked' : '' }}>
                        <span class="ml-2">Others</span>
                    </label>
                </div>
                <input type="text" id="civil_status_others" name="civil_status_others" placeholder="Specify" class="bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 mt-2 w-full {{ old('civil_status') == 'Others' ? '' : 'hidden' }}" value="{{ old('civil_status_others') }}">
                @error('civil_status') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-civil_status" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                @error('civil_status_others') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-civil_status_others" class="text-red-500 text-sm mt-1 hidden">Please specify your civil status.</span>
            </div>
        </div>

        <hr class="my-8 border-t border-white border-opacity-30">

        <h2 class="text-2xl font-bold mb-6 mt-8 text-white">Family Background</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-4">
            <div>
                <label for="father_occupation" class="block text-lg font-semibold mb-2 text-white">Occupation of Father/Guardian</label>
                <input type="text" id="father_occupation" name="father_occupation" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('father_occupation') }}">
                @error('father_occupation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-father_occupation" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                <label class="mt-4 block text-white">If a retiree, a pensioner?</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mr-4 mb-2 sm:mb-0">
                        <input type="radio" name="father_retiree" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('father_retiree') == 'Yes' ? 'checked' : '' }}>
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="father_retiree" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('father_retiree') == 'No' ? 'checked' : '' }}>
                        <span class="ml-2">No</span>
                    </label>
                </div>
                @error('father_retiree') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-father_retiree" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div>
                <label for="mother_occupation" class="block text-lg font-semibold mb-2 text-white">Occupation of Mother/Guardian</label>
                <input type="text" id="mother_occupation" name="mother_occupation" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('mother_occupation') }}">
                @error('mother_occupation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-mother_occupation" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                <label class="mt-4 block text-white">If a retiree, a pensioner?</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mr-4 mb-2 sm:mb-0">
                        <input type="radio" name="mother_retiree" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('mother_retiree') == 'Yes' ? 'checked' : '' }}>
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="mother_retiree" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('mother_retiree') == 'No' ? 'checked' : '' }}>
                        <span class="ml-2">No</span>
                    </label>
                </div>
                @error('mother_retiree') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-mother_retiree" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div class="mb-4 text-white md:col-span-2">
            <label class="block text-lg font-semibold mb-2">Do you have PHYSICAL DISABILITY OR CONDITION that would make it difficult for you to take a regular test?</label>
            <div class="flex flex-col sm:flex-row sm:space-x-4">
                <label class="inline-flex items-center mr-4 mb-2 sm:mb-0">
                    <input type="radio" name="physical_disability" value="Yes" id="physical_disability_yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('physical_disability') == 'Yes' ? 'checked' : '' }}>
                    <span class="ml-2">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="physical_disability" value="No" id="physical_disability_no" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('physical_disability') == 'No' ? 'checked' : '' }}>
                    <span class="ml-2">No</span>
                </label>
            </div>
            @error('physical_disability') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            <span id="error-physical_disability" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-4">
            <div>
                <label for="number_of_siblings" class="block text-lg font-semibold mb-2 text-white">Number of Siblings</label>
                <input type="number" id="number_of_siblings" name="number_of_siblings" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('number_of_siblings') }}">
                @error('number_of_siblings') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-number_of_siblings" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div>
                <label for="number_of_household_members" class="block text-lg font-semibold mb-2 text-white">Number of Household Members</label>
                <input type="number" id="number_of_household_members" name="number_of_household_members" class="w-full bg-[#F0F2F5] border border-[#D1D5DB] p-3 rounded-lg text-black transition-all duration-200 ease-in-out focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30" value="{{ old('number_of_household_members') }}">
                @error('number_of_household_members') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-number_of_household_members" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div class="mb-4 text-white md:col-span-2">
            <label class="block text-lg font-semibold mb-2">Monthly Family Income</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="Less than ₱ 12,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == 'Less than ₱ 12,000.00' ? 'checked' : '' }}> <span class="ml-2">Less than ₱ 12,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="₱ 12,000.00 - ₱ 24,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == '₱ 12,000.00 - ₱ 24,000.00' ? 'checked' : '' }}> <span class="ml-2">₱ 12,000.00 - ₱ 24,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="₱ 24,001.00 - ₱ 48,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == '₱ 24,001.00 - ₱ 48,000.00' ? 'checked' : '' }}> <span class="ml-2">₱ 24,001.00 - ₱ 48,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="₱ 48,001.00 - ₱ 84,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == '₱ 48,001.00 - ₱ 84,000.00' ? 'checked' : '' }}> <span class="ml-2">₱ 48,001.00 - ₱ 84,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="₱ 84,001.00 - ₱ 144,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == '₱ 84,001.00 - ₱ 144,000.00' ? 'checked' : '' }}> <span class="ml-2">₱ 84,001.00 - ₱ 144,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="₱ 144,001.00 - ₱ 240,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == '₱ 144,001.00 - ₱ 240,000.00' ? 'checked' : '' }}> <span class="ml-2">₱ 144,001.00 - ₱ 240,000.00</span></label>
                <label class="inline-flex items-center"><input type="radio" name="monthly_income" value="Greater than ₱ 240,000.00" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('monthly_income') == 'Greater than ₱ 240,000.00' ? 'checked' : '' }}> <span class="ml-2">Greater than ₱ 240,000.00</span></label>
            </div>
            @error('monthly_income') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            <span id="error-monthly_income" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
        </div>

        <div class="mb-4 text-white">
            <label class="block text-lg font-semibold mb-2">Is your family a member of:</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 sm:gap-x-8">
                <div>
                    <span class="block text-base font-semibold mb-1">Listahanan (4 Ps)</span>
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <label class="inline-flex items-center mr-4 mb-2 sm:mb-0">
                            <input type="radio" name="family_member_listahanan" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('family_member_listahanan') == 'Yes' ? 'checked' : '' }}>
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="family_member_listahanan" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('family_member_listahanan') == 'No' ? 'checked' : '' }}>
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                    @error('family_member_listahanan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-family_member_listahanan" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>

                <div>
                    <span class="block text-base font-semibold mb-1">Indigenous People</span>
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <label class="inline-flex items-center mr-4 mb-2 sm:mb-0">
                            <input type="radio" name="family_member_indigenous" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('family_member_indigenous') == 'Yes' ? 'checked' : '' }}>
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="family_member_indigenous" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('family_member_indigenous') == 'No' ? 'checked' : '' }}>
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                    @error('family_member_indigenous') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    <span id="error-family_member_indigenous" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-x-8 mb-8 text-white">
            <div>
                <label class="block text-lg font-semibold mb-2">Are you a child of a solo parent?</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mr-4 mb-2 sm:mb-0"><input type="radio" name="child_of_solo_parent" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('child_of_solo_parent') == 'Yes' ? 'checked' : '' }}> <span class="ml-2">Yes</span></label>
                    <label class="inline-flex items-center"><input type="radio" name="child_of_solo_parent" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('child_of_solo_parent') == 'No' ? 'checked' : '' }}> <span class="ml-2">No</span></label>
                </div>
                @error('child_of_solo_parent') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-child_of_solo_parent" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
            <div>
                <label class="block text-lg font-semibold mb-2">Are you residing in a Geographically-isolated and Underveloped Area (GIDA)?</label>
                <div class="flex flex-col sm:flex-row sm:space-x-4">
                    <label class="inline-flex items-center mr-4 mb-2 sm:mb-0"><input type="radio" name="residing_gida" value="Yes" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('residing_gida') == 'Yes' ? 'checked' : '' }}> <span class="ml-2">Yes</span></label>
                    <label class="inline-flex items-center"><input type="radio" name="residing_gida" value="No" class="form-radio h-4 w-4 accent-blue-600 mr-3" {{ old('residing_gida') == 'No' ? 'checked' : '' }}> <span class="ml-2">No</span></label>
                </div>
                @error('residing_gida') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                <span id="error-residing_gida" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div class="flex justify-between mt-8">
            <button type="button" id="personal-info-back-btn" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-md shadow-md transition-colors">BACK</button>
            <button type="button" id="personal-info-next-btn" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md transition-colors">NEXT</button>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Page-specific validation for Personal Info
    function validatePagePersonalInfo() {
        let isValid = true;
        isValid = validateField('last_name') && isValid;
        isValid = validateField('first_name') && isValid;
        isValid = validateField('middle_name') && isValid;
        isValid = validateRadioGroup('citizenship') && isValid;
        isValid = validateRadioGroup('sex') && isValid;
        isValid = validateField('religion') && isValid;
        isValid = validateField('permanent_address_number_street') && isValid;
        isValid = validateField('subd_brgy') && isValid;
        isValid = validateField('city_town_province') && isValid;
        isValid = validateField('postcode') && isValid;
        isValid = validateField('email_address') && isValid;
        isValid = validateField('contact_phone') && isValid;
        isValid = validateField('shs_graduated_from') && isValid;
        isValid = validateField('shs_school_address') && isValid;
        isValid = validateField('expected_graduation_date') && isValid;
        isValid = validateField('jhs_completed_from') && isValid;
        isValid = validateField('jhs_school_address') && isValid;
        isValid = validateField('learner_reference_no') && isValid;
        isValid = validateField('applicant_place_of_birth') && isValid;
        isValid = validateRadioGroup('civil_status') && isValid;

        const civilStatusOthersRadio = document.getElementById('civil_status_others_radio');
        if (civilStatusOthersRadio && civilStatusOthersRadio.checked) {
            isValid = validateField('civil_status_others') && isValid;
        } else {
            showError('civil_status_others', false);
        }
        isValid = validateField('father_occupation') && isValid;
        isValid = validateField('mother_occupation') && isValid;
        isValid = validateRadioGroup('father_retiree') && isValid;
        isValid = validateRadioGroup('mother_retiree') && isValid;
        isValid = validateRadioGroup('physical_disability') && isValid;
        isValid = validateField('number_of_siblings') && isValid;
        isValid = validateField('number_of_household_members') && isValid;
        isValid = validateRadioGroup('monthly_income') && isValid;
        isValid = validateRadioGroup('family_member_listahanan') && isValid;
        isValid = validateRadioGroup('family_member_indigenous') && isValid;
        isValid = validateRadioGroup('child_of_solo_parent') && isValid;
        isValid = validateRadioGroup('residing_gida') && isValid;

        return isValid;
    }
    function validateField(fieldId) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(`error-${fieldId}`);
        if (field.value === "") {
            field.classList.add('border-red-500');
            errorSpan.classList.remove('hidden');
            return false;
        } else {
            field.classList.remove('border-red-500');
            errorSpan.classList.add('hidden');
            return true;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('personal-info-back-btn')?.addEventListener('click', () => {
            window.location.href = "{{ route('application.choices') }}";
        });

        document.getElementById('personal-info-next-btn')?.addEventListener('click', () => {
            if (validatePagePersonalInfo()) {
                const physicalDisabilityStatus = document.querySelector('input[name="physical_disability"]:checked')?.value || 'No';
                localStorage.setItem('physical_disability_status', physicalDisabilityStatus);

                window.location.href = "{{ route('application.documents') }}";
            } else {
                document.getElementById('global-error-message').classList.remove('hidden');
            }
        });

        // Toggle "Others Specify" input for Civil Status
        const civilStatusRadios = document.querySelectorAll('input[name="civil_status"]');
        const civilStatusOthers = document.getElementById('civil_status_others');

        function toggleCivilStatusOthers() {
            const othersRadio = document.getElementById('civil_status_others_radio');
            if (othersRadio && othersRadio.checked) {
                civilStatusOthers.classList.remove('hidden');
            } else {
                civilStatusOthers.classList.add('hidden');
                civilStatusOthers.value = '';
            }
        }

        civilStatusRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                toggleCivilStatusOthers(); // Toggle the input field
                validateRadioGroup(radio.name); // Then validate the group
            });
        });
        toggleCivilStatusOthers(); 
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            if (radio.name !== 'civil_status') {
                radio.addEventListener('change', () => validateRadioGroup(radio.name));
            }
        });
    });
</script>
@endpush
