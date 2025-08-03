@extends('layouts.app')

@section('content')
    <form action="{{ route('application.choices.post') }}" method="POST">
        @csrf
        <div class="mb-8">
            <label for="first_choice_campus" class="block text-lg font-semibold mb-2 text-white">1ST CHOICE</label>
            <div class="relative mt-2 w-full">
                {{-- Apply appearance-none to hide the native arrow --}}
                <select id="first_choice_campus" name="first_choice_campus" class="w-full bg-white border border-gray-300 p-3 rounded-lg text-gray-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 hover:border-gray-400 appearance-none pr-10 text-base sm:text-lg">
                    <option value="" class="text-gray-500">Select a Campus</option>
                    <option value="CSSP" {{ old('first_choice_campus') == 'CSSP' ? 'selected' : '' }}>CSSP - College of Social Sciences and Philosophy</option>
                    <option value="CBEM" {{ old('first_choice_campus') == 'CBEM' ? 'selected' : '' }}>CBEM - College of Business, Economics and Management</option>
                    <option value="CE" {{ old('first_choice_campus') == 'CE' ? 'selected' : '' }}>CE - College of Education</option>
                    <option value="CAL" {{ old('first_choice_campus') == 'CAL' ? 'selected' : '' }}>CAL - College of Arts and Letters</option>
                    <option value="CN" {{ old('first_choice_campus') == 'CN' ? 'selected' : '' }}>CN - College of Nursing</option>
                    <option value="CS" {{ old('first_choice_campus') == 'CS' ? 'selected' : '' }}>CS - College of Science</option>
                    <option value="IPESR" {{ old('first_choice_campus') == 'IPESR' ? 'selected' : '' }}>IPESR - Institute of Physical Education, Sports and Recreation</option>
                    <option value="CENG" {{ old('first_choice_campus') == 'CENG' ? 'selected' : '' }}>CENG - College of Engineering</option>
                    <option value="IDeA" {{ old('first_choice_campus') == 'IDeA' ? 'selected' : '' }}>IDeA - Institute of Design and Architecture</option>
                    <option value="CIT" {{ old('first_choice_campus') == 'CIT' ? 'selected' : '' }}>CIT - College of Industrial Technology</option>
                    <option value="CAF" {{ old('first_choice_campus') == 'CAF' ? 'selected' : '' }}>CAF - BU Guinobatan</option>
                    <option value="TC" {{ old('first_choice_campus') == 'TC' ? 'selected' : '' }}>TC - BU Tabaco</option>
                    <option value="GC" {{ old('first_choice_campus') == 'GC' ? 'selected' : '' }}>GC - BU Gubat</option>
                    <option value="PC" {{ old('first_choice_campus') == 'PC' ? 'selected' : '' }}>PC - BU Polangui</option>
                    <option value="JMRIGD" {{ old('first_choice_campus') == 'JMRIGD' ? 'selected' : '' }}>JMRIGD - Jesse M. Robredo Institute of Governance and Development</option>
                    <option value="CDM" {{ old('first_choice_campus') == 'CDM' ? 'selected' : '' }}>CDM - College of Dental Medicine</option>
                </select>
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none w-6 h-6 text-gray-500">
                    <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            @error('first_choice_campus')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <span id="error-first_choice_campus" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>

            <label for="first_choice_course" class="block text-lg font-semibold mt-2 text-white">COURSE</label>
            <div class="relative mt-2 w-full">
                <select id="first_choice_course" name="first_choice_course" class="w-full bg-white border border-gray-300 p-3 rounded-lg text-gray-800 shadow-sm
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        hover:border-gray-400
                        appearance-none pr-10
                        text-base sm:text-lg">
                    <option value="" class="text-gray-500">Select a Course</option>
                </select>
                {{-- Ensure NO transition or transform classes on this div --}}
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none w-6 h-6 text-gray-500">
                    <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            @error('first_choice_course')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <span id="error-first_choice_course" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
        </div>

        <div class="mb-8">
            <label for="second_choice_campus" class="block text-lg font-semibold mt-2 text-white">2ND CHOICE</label>
            <div class="relative mt-2 w-full max-w-full">
                <select id="second_choice_campus" name="second_choice_campus" class="w-full bg-white border border-gray-300 p-3 rounded-lg text-gray-800 shadow-sm
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        hover:border-gray-400
                        appearance-none pr-10
                        text-base sm:text-lg">
                    <option value="" class="text-gray-500">Select a Campus</option>
                    <option value="CSSP" {{ old('second_choice_campus') == 'CSSP' ? 'selected' : '' }}>CSSP - College of Social Sciences and Philosophy</option>
                    <option value="CBEM" {{ old('second_choice_campus') == 'CBEM' ? 'selected' : '' }}>CBEM - College of Business, Economics and Management</option>
                    <option value="CE" {{ old('second_choice_campus') == 'CE' ? 'selected' : '' }}>CE - College of Education</option>
                    <option value="CAL" {{ old('second_choice_campus') == 'CAL' ? 'selected' : '' }}>CAL - College of Arts and Letters</option>
                    <option value="CN" {{ old('second_choice_campus') == 'CN' ? 'selected' : '' }}>CN - College of Nursing</option>
                    <option value="CS" {{ old('second_choice_campus') == 'CS' ? 'selected' : '' }}>CS - College of Science</option>
                    <option value="IPESR" {{ old('second_choice_campus') == 'IPESR' ? 'selected' : '' }}>IPESR - Institute of Physical Education, Sports and Recreation</option>
                    <option value="CENG" {{ old('second_choice_campus') == 'CENG' ? 'selected' : '' }}>CENG - College of Engineering</option>
                    <option value="IDeA" {{ old('second_choice_campus') == 'IDeA' ? 'selected' : '' }}>IDeA - Institute of Design and Architecture</option>
                    <option value="CIT" {{ old('second_choice_campus') == 'CIT' ? 'selected' : '' }}>CIT - College of Industrial Technology</option>
                    <option value="CAF" {{ old('second_choice_campus') == 'CAF' ? 'selected' : '' }}>CAF - BU Guinobatan</option>
                    <option value="TC" {{ old('second_choice_campus') == 'TC' ? 'selected' : '' }}>TC - BU Tabaco</option>
                    <option value="GC" {{ old('second_choice_campus') == 'GC' ? 'selected' : '' }}>GC - BU Gubat</option>
                    <option value="PC" {{ old('second_choice_campus') == 'PC' ? 'selected' : '' }}>PC - BU Polangui</option>
                    <option value="JMRIGD" {{ old('second_choice_campus') == 'JMRIGD' ? 'selected' : '' }}>JMRIGD - Jesse M. Robredo Institute of Governance and Development</option>
                    <option value="CDM" {{ old('second_choice_campus') == 'CDM' ? 'selected' : '' }}>CDM - College of Dental Medicine</option>
                </select>
                {{-- Ensure NO transition or transform classes on this div --}}
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none w-6 h-6 text-gray-500">
                    <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            @error('second_choice_campus')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <span id="error-second_choice_campus" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>

            <label for="second_choice_course" class="block text-lg font-semibold mt-2 text-white">COURSE</label>
            <div class="relative mt-2 w-full">
                <select id="second_choice_course" name="second_choice_course" class="w-full bg-white border border-gray-300 p-3 rounded-lg text-gray-800 shadow-sm
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        hover:border-gray-400
                        appearance-none pr-10
                        text-base sm:text-lg">
                    <option value="" class="text-gray-500">Select a Course</option>
                </select>
                {{-- Ensure NO transition or transform classes on this div --}}
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none w-6 h-6 text-gray-500">
                    <svg class="h-full w-full" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            @error('second_choice_course')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <span id="error-second_choice_course" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
        </div>

        <div class="flex justify-end mt-8">
            <button type="button" id="choices-next-btn" class="px-6 py-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md shadow-md transition-colors">NEXT</button>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Page-specific validation for Choices
    function validateField(fieldId) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(`error-${fieldId}`);
        if (field.value === "") {
            field.classList.add('border-red-500', 'border-2');
            errorSpan.classList.remove('hidden');
            return false;
        } else {
            field.classList.remove('border-red-500', 'border-2');
            errorSpan.classList.add('hidden');
            return true;
        }
    }

    function validatePageChoices() {
        let isValid = true;
        isValid = validateField('first_choice_campus') && isValid;
        isValid = validateField('first_choice_course') && isValid;
        isValid = validateField('second_choice_campus') && isValid;
        isValid = validateField('second_choice_course') && isValid;
        return isValid;
    }

    document.addEventListener('DOMContentLoaded', () => {

        populateCoursesDropdown('first_choice_campus', 'first_choice_course', "{{ old('first_choice_course') }}");
        populateCoursesDropdown('second_choice_campus', 'second_choice_course', "{{ old('second_choice_course') }}");

        document.getElementById('choices-next-btn')?.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default form submission initially
            if (validatePageChoices()) {
                document.querySelector('form').submit();
            } else {
                const globalErrorMessage = document.getElementById('global-error-message');
                if (globalErrorMessage) {
                    globalErrorMessage.classList.remove('hidden');
                }
                const firstError = document.querySelector('.text-red-500:not(.hidden)');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });

        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', (event) => {
                validateField(event.target.id);
            });
            select.addEventListener('blur', (event) => {
                validateField(event.target.id);
            });
        });
    });
</script>
@endpush