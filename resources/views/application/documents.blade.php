@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold text-white mb-6">Application Form - Document Uploads</h2>

    <form action="{{ route('application.documents.post') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h2 class="text-xl font-bold mb-4 mt-8 text-white">Document Uploads</h2>
        <div class="mb-6">
            <label class="block text-lg font-semibold mb-2 text-white">Two (2) copies of "2x2" recent, unedited or unfiltered studio-taken photograph with applicants signature and name tag</label>
            <div class="text-center border-2 border-dashed border-white border-opacity-60 p-8 rounded-xl cursor-pointer transition-all duration-300 ease-in-out bg-white bg-opacity-5 hover:bg-opacity-15 hover:border-white hover:shadow-lg relative text-gray-100">
                <input type="file" id="photo_upload" name="photo_upload" class="hidden">
                <label for="photo_upload" class="cursor-pointer text-white flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span id="photo_upload_label" class="block mt-2">Upload Additional file</span>
                    <div id="photo_upload_preview" class="mt-2"></div>
                </label>
                <p class="text-sm text-gray-300 mt-2">Attach file. File size of your documents should not exceed 10MB</p>
                @error('photo_upload')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <span id="error-photo_upload" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div id="pwd_upload_section" class="mb-6 {{ session('physical_disability') == 'Yes' ? '' : 'hidden' }}">
            <label class="block text-lg font-semibold mb-2 text-white">Please attach PWD ID or Certification of Disability</label>
            <div class="text-center border-2 border-dashed border-white border-opacity-60 p-8 rounded-xl cursor-pointer transition-all duration-300 ease-in-out bg-white bg-opacity-5 hover:bg-opacity-15 hover:border-white hover:shadow-lg relative text-gray-100">
                <input type="file" id="pwd_id_upload" name="pwd_id_upload" class="hidden">
                <label for="pwd_id_upload" class="cursor-pointer text-white flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span id="pwd_id_upload_label" class="block mt-2">Upload Additional file</span>
                    <div id="pwd_id_upload_preview" class="mt-2"></div>
                </label>
                <p class="text-sm text-gray-300 mt-2">Attach file. File size of your documents should not exceed 10MB</p>
                @error('pwd_id_upload')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <span id="error-pwd_id_upload" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-lg font-semibold mb-2 text-white">APPLICATION CERTIFICATION</label>
            <p class="text-sm text-gray-200 mb-4">
                HEREBY CERTIFY ON MY HONOR THAT I HAVE UNDERSTOOD THE HEREIN INSTRUCTIONS AND ALL THE INFORMATION HEREIN CONTAINED IS TRUE AND CORRECT. FURTHER, I ATTEST THAT I HAVE NOT ENROLLED IN ANY COLLEGE COURSE/SUBJECT BEYOND SENIOR HIGH SCHOOL. OTHERWISE MY APPLICATION FOR ENTRANCE IN BICOL UNIVERSITY WILL BE NULLIFIED. Signature of Applicant and Signature of Parent/Guardian over Printed Name:
            </p>
            <div class="text-center border-2 border-dashed border-white border-opacity-60 p-8 rounded-xl cursor-pointer transition-all duration-300 ease-in-out bg-white bg-opacity-5 hover:bg-opacity-15 hover:border-white hover:shadow-lg relative text-gray-100">
                <input type="file" id="certification_upload" name="certification_upload" class="hidden">
                <label for="certification_upload" class="cursor-pointer text-white flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span id="certification_upload_label" class="block mt-2">Upload Additional file</span>
                    <div id="certification_upload_preview" class="mt-2"></div>
                </label>
                <p class="text-sm text-gray-300 mt-2">Attach file. File size of your documents should not exceed 10MB</p>
                @error('certification_upload')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <span id="error-certification_upload" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
            </div>
        </div>

        <div class="flex justify-between mt-8">
            <button type="button" id="documents-back-btn" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-md shadow-md transition-colors">BACK</button>
            <button type="button" id="documents-submit-btn" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md transition-colors">NEXT</button>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    // Page-specific validation for Documents
    function validatePageDocuments() {
        let isValid = true;
        isValid = validateField('photo_upload') && isValid;
        isValid = validateField('certification_upload') && isValid;

        // Conditional validation for pwd_id_upload based on session data
        const pwdUploadSection = document.getElementById('pwd_upload_section');
        const physicalDisabilityStatus = localStorage.getItem('physical_disability_status')

        if (physicalDisabilityStatus === 'Yes') {
            isValid = validateField('pwd_id_upload') && isValid;
        } else {
            showError('pwd_id_upload', false); 
        }
        return isValid;
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('documents-back-btn')?.addEventListener('click', () => {
            window.location.href = "{{ route('application.personal-info') }}";
        });

        document.getElementById('documents-submit-btn')?.addEventListener('click', (event) => {
            event.preventDefault(); 
            if (validatePageDocuments()) {
                // If validation passes, programmatically submit the form
                event.target.closest('form').submit(); 
            } else {
                document.getElementById('global-error-message').classList.remove('hidden'); 
            }
        });

        // --- PWD ID Optional Section Toggle (based on Laravel session data) ---
        const pwdUploadSection = document.getElementById('pwd_upload_section');
        // In a real Laravel app, this would be: `const physicalDisabilityStatus = "{{ session('physical_disability') }}";`
        const physicalDisabilityStatus = localStorage.getItem('physical_disability_status'); 

        if (physicalDisabilityStatus === 'Yes') {
            pwdUploadSection.classList.remove('hidden');
        } else {
            pwdUploadSection.classList.add('hidden');
        }
    });
</script>
@endpush