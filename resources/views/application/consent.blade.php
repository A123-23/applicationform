@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-extrabold text-white mb-4">Application Form - Consent and Data Privacy</h2> 
    <form action="{{ route('application.consent.post') }}" method="POST">
        @csrf

        <div class="mb-6"> 
            <div class="rounded-xl p-2 mb-4 text-gray-100 leading-relaxed"> 

                <p class="text-xl font-semibold mb-4 text-white">Purpose of Data Collection</p> 
                <p class="text-base mb-6"> 
                    Bicol University collects personal information through this application form for the purpose of managing your application for the College Entrance Test. Your data will be used to verify your identity, assess your eligibility, process your application, and manage your examination details. It will also be used for official communication regarding your application status and test results.
                </p>

                <p class="text-xl font-semibold mb-4 text-white">The information we may collect includes:</p>
                <ul class="list-disc list-inside text-base mb-6 space-y-2 pl-4">
                    <li>Full name</li>
                    <li>Sex</li>
                    <li>Gender</li>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>Address</li>
                    <li>Educational background (e.g., Senior High School, previous college enrollment)</li>
                    <li>Choices of program/course</li>
                    <li>Disability status (if declared)</li>
                    <li>Required documents (e.g., photo, certification)</li>
                    <li>Any additional information relevant to your application</li>
                </ul>

                <p class="text-xl font-semibold mb-4 text-white">Legal Basis for Processing</p>
                <p class="text-base mb-6">
                    We process your personal data based on your explicit consent as an applicant and for the legitimate purposes of managing the Bicol University College Entrance Test application process, fulfilling our academic and administrative obligations, and complying with relevant educational laws and regulations in the Philippines.
                </p>

                <p class="text-xl font-semibold mb-4 text-white">Data Retention</p>
                <p class="text-base mb-6">
                    Your personal information will be retained only for as long as necessary to fulfill the purposes outlined above, to comply with Bicol University's record-keeping policies, or as required by Philippine laws and regulations. After this period, your data will be securely archived or deleted.
                </p>

                <p class="text-xl font-semibold mb-4 text-white">Data Sharing</p>
                <p class="text-base mb-6">
                    Your information will be shared only with authorized Bicol University personnel involved in the application, admissions, and examination processes. We do not sell or rent your personal information to third parties.
                </p>

                <p class="text-xl font-semibold mb-4 text-white">Data Security</p>
                <p class="text-base mb-6">
                    Bicol University implements appropriate technical and organizational measures to protect your personal data against unauthorized access, alteration, disclosure, loss, or destruction. We strive to ensure the confidentiality and integrity of your personal information.
                </p>

                <p class="text-xl font-semibold mb-4 text-white">Your Rights</p>
                <p class="text-base mb-4"> 
                    Under the Data Privacy Act of 2012 (Republic Act No. 10173), you have the right to:
                </p>
                <ul class="list-disc list-inside text-base mb-6 space-y-2 pl-4">
                    <li>Be informed of the collection and processing of your personal data.</li>
                    <li>Access your personal data.</li>
                    <li>Request correction of inaccurate data.</li>
                    <li>Request deletion or suppression of your personal data.</li>
                    <li>Object to the processing of your personal data.</li>
                    <li>Lodge a complaint with the National Privacy Commission.</li>
                    <li>Withdraw your consent at any time, where applicable.</li>
                </ul>
                <p class="text-base"> 
                    To exercise any of these rights or for any data privacy concerns, please contact the Bicol University Data Protection Officer at:
                    <strong class="text-white">
                        [Insert Bicol University's Official Contact Information for Data Privacy - e.g., email address, phone number, or specific office name]
                    </strong>.
                </p>
            </div>
            
            <h3 class="text-2xl font-bold mb-5 mt-6 text-white">Applicant Consent</h3> 
            <div class="bg-white bg-opacity-15 rounded-xl p-8 mb-6 shadow-lg">
                <p class="text-gray-100 text-base mb-6 leading-relaxed">
                    By checking the box below, you confirm that you have read, understood, and agree to the Data Privacy Notice above. You also give your explicit consent to Bicol University to collect, process, and retain your personal data for the purpose of your College Entrance Test application, in accordance with the Data Privacy Act of 2012 and other applicable laws.
                </p>
                <div class="flex items-center">
                    <input type="checkbox" id="consent_checkbox" name="consent_checkbox" class="h-8 w-8 text-blue-600 rounded focus:ring-blue-500 border-gray-300"> 
                    <label for="consent_checkbox" class="ml-3 text-xl font-medium text-white cursor-pointer"> 
                        I have read and understood the Data Privacy Notice and I consent to the collection and processing of my personal data.
                    </label>
                </div>
                <span id="error-consent_checkbox" class="text-red-400 text-base mt-2 hidden">You must agree to the terms to proceed.</span>
            </div>
        </div>

        <div class="flex justify-between mt-8">
            <button type="button" id="consent-back-btn" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-lg shadow-md transition-colors">BACK</button> 
            <button type="button" id="consent-submit-btn" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-colors">SUBMIT</button>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    function validatePageConsent() {
        let isValid = true;
        const consentCheckbox = document.getElementById('consent_checkbox');
        
        if (!consentCheckbox.checked) {
            showError('consent_checkbox', true);
            isValid = false;
        } else {
            showError('consent_checkbox', false);
        }
        return isValid;
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('consent-back-btn')?.addEventListener('click', () => {
            window.location.href = "{{ route('application.documents') }}";
        });

        document.getElementById('consent-submit-btn')?.addEventListener('click', (event) => {
            event.preventDefault(); 
            if (validatePageConsent()) {
                event.target.closest('form').submit();
            } else {
            }
        });

        // Add change listener for immediate validation feedback on the checkbox
        document.getElementById('consent_checkbox')?.addEventListener('change', () => validatePageConsent());
    });
</script>
@endpush