<!DOCTYPE html>
<html lang="en" class="min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form Bicol University College Entrance Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen text-white px-4 bg-gradient-to-b from-[#1496E3] to-[#FFA752] bg-cover bg-center bg-no-repeat">
    <div class="w-full max-w-4xl pt-5 pb-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-black bg-opacity-20 rounded-xl p-4 mb-6 border-b border-white border-opacity-30 flex flex-col sm:flex-row items-center justify-center gap-4 text-center">
            <img src="{{ asset('images/bu-logo.png') }}" alt="Bicol University Logo" class="h-20 w-20">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold drop-shadow-lg">APPLICATION FORM BICOL UNIVERSITY COLLEGE ENTRANCE TEST</h1>
        </div>

        <div class="bg-white bg-opacity-20 rounded-3xl p-8 shadow-2xl backdrop-blur-md border border-white border-opacity-20">
            @yield('content')

        </div>
    </div>

    <script>
        const courses = {            
            "CSSP": [
                { id: "A-01", name: "Bachelor of Arts in Peace Studies" },
                { id: "A-02", name: "Bachelor of Arts in Philosophy" },
                { id: "A-03", name: "Bachelor of Arts in Political Science" },
                { id: "A-04", name: "Bachelor of Arts in Sociology" },
                { id: "A-05", name: "Bachelor of Science in Psychology" },
                { id: "A-06", name: "Bachelor of Science in Social Work" }
            ],
            "CBEM": [
                { id: "A-11", name: "Bachelor of Science in Accountancy" },
                { id: "A-12", name: "Bachelor of Science in Business Administration" },
                { id: "A-13", name: "Bachelor of Science in Economics" },
                { id: "A-14", name: "BSBA Major in Financial Management" },
                { id: "A-15", name: "BSBA Major in Human Resource Management" },
                { id: "A-16", name: "BSBA Major in Management" },
                { id: "A-17", name: "BSBA Major in Marketing Management" },
                { id: "A-18", name: "BSBA Major in Microfinance" },
                { id: "A-19", name: "BSBA Major in Operations Management" }
            ],
            "CE": [
                { id: "A-21", name: "Bachelor of Early Childhood Education" },
                { id: "A-22", name: "Bachelor of Elementary Education" },
                { id: "A-23", name: "Bachelor of Secondary Education" },
                { id: "A-24", name: "Bachelor of Culture and Arts Education" }
            ],
            "CAL": [
                { id: "A-31", name: "Bachelor of Arts in Broadcasting" },
                { id: "A-32", name: "Bachelor of Arts in Communication" },
                { id: "A-33", name: "Bachelor of Arts in English Language" },
                { id: "A-34", name: "Bachelor of Arts in Journalism" },
                { id: "A-35", name: "Bachelor of Arts of Performing Arts (BPeA) Theater" },
                { id: "A-36", name: "Bachelor of Arts in Literature" }
            ],
            "CN": [
                { id: "A-41", name: "Bachelor of Science in Nursing" }
            ],
            "CS": [
                { id: "A-51", name: "Bachelor of Science in Biology" },
                { id: "A-52", name: "Bachelor of Science in Chemistry" },
                { id: "A-53", name: "Bachelor of Science in Computer Science" },
                { id: "A-54", name: "Bachelor of Science in Information Technology" },
                { id: "A-55", name: "Bachelor of Science in Meteorology" }
            ],
            "IPESR": [
                { id: "A-61", name: "Bachelor of Physical Education" },
                { id: "A-62", name: "Bachelor of Science in Exercise & Sports Sciences major in Fitness and Sports Coaching" },
                { id: "A-63", name: "Bachelor of Science in Exercise & Sports Sciences major in Fitness and Sports Management" }
            ],
            "CENG": [
                { id: "A-71", name: "Bachelor of Science in Chemical Engineering" },
                { id: "A-72", name: "Bachelor of Science in Civil Engineering" },
                { id: "A-73", name: "Bachelor of Science in Electrical Engineering" },
                { id: "A-74", name: "Bachelor of Science in Geodetic Engineering" },
                { id: "A-75", name: "Bachelor of Science in Mechanical Engineering" },
                { id: "A-76", name: "Bachelor of Science in Mining Engineering" }
            ],
            "IDeA": [
                { id: "A-81", name: "Bachelor of Science in Architecture" }
            ],
            "CIT": [
                { id: "A-91", name: "Bachelor of Science in Automotive Technology" },
                { id: "A-92", name: "Bachelor of Science in Civil Technology" },
                { id: "A-93", name: "Bachelor of Science in Electrical Technology" },
                { id: "A-94", name: "Bachelor of Science in Electronics Technology" },
                { id: "A-95", name: "Bachelor of Science in Mechanical Technology" },
                { id: "A-96", name: "Bachelor of Science in Food Technology" },
                { id: "A-97", name: "Bachelor of Industrial Design" },
                { id: "A-98", name: "Bachelor of Technical - Vocational Teacher Education Major in Drafting Technology" },
                { id: "A-99", name: "Bachelor of Technical - Vocational Teacher Education Major in Electrical Technology" },
                { id: "A-100", name: "Bachelor of Technical - Vocational Teacher Educ. Major in Food and Service Management" },
                { id: "A-101", name: "Bachelor of Technical - Vocational Teacher Educ. Major in Garments Fashion and Design" }
            ],
            "CAF": [
                { id: "A-111", name: "Bachelor of Science in Agribusiness" },
                { id: "A-112", name: "Bachelor of Science in Agricultural & Biosystems Engineering" },
                { id: "A-113", name: "Bachelor of Science in Agriculture" },
                { id: "A-114", name: "Bachelor of Science in Forestry" },
                { id: "A-115", name: "Bachelor of Science in Development Communication" },
                { id: "A-116", name: "Bachelor of Technical - Vocational Teacher Education Major in Animal Production" },
                { id: "A-117", name: "Bachelor of Technical - Vocational Teacher Educ. Major in Agricultural Crop Production" },
                { id: "A-118", name: "Bachelor of Science in Food Technology" },
                { id: "A-119", name: "Doctor of Veterinary Medicine" }
            ],
            "TC": [
                { id: "A-121", name: "Bachelor of Secondary Education Major in Science" },
                { id: "A-122", name: "Bachelor of Secondary Education Major in Math" },
                { id: "A-123", name: "Bachelor of Science in Entrepreneurship" },
                { id: "A-124", name: "Bachelor of Science in Fisheries" },
                { id: "A-125", name: "Bachelor of Science in Food Technology" },
                { id: "A-126", name: "Bachelor of Science in Nursing" },
                { id: "A-127", name: "Bachelor of Science in Social Work" }
            ],
            "GC": [
                { id: "A-131", name: "Bachelor of Elementary Education" },
                { id: "A-132", name: "Bachelor of Secondary Education major in Filipino" },
                { id: "A-133", name: "Bachelor of Secondary Education major in Social Studies" },
                { id: "A-134", name: "Bachelor of Science in Entrepreneurship - General Track" },
                { id: "A-135", name: "Bachelor of Science in Entrepreneurship - Agribusiness Track" },
                { id: "A-136", name: "BSBA Major in Microfinance" }
            ],
            "PC": [
                { id: "A-141", name: "Bachelor of Elementary Education" },
                { id: "A-142", name: "Bachelor of Secondary Education Major in English" },
                { id: "A-143", name: "Bachelor of Secondary Education Major in Math" },
                { id: "A-144", name: "Bachelor of Science in Automotive Technology" },
                { id: "A-145", name: "Bachelor of Science in Computer Engineering" },
                { id: "A-146", name: "Bachelor of Science in Computer Science" },
                { id: "A-147", name: "Bachelor of Science in Electrical Technology" },
                { id: "A-148", name: "Bachelor of Science in Electronics Engineering" },
                { id: "A-149", name: "Bachelor of Science in Electronics Technology" },
                { id: "A-150", name: "Bachelor of Science in Entrepreneurship" },
                { id: "A-151", name: "Bachelor of Science in Information System" },
                { id: "A-152", name: "Bachelor of Science in Information Technology" },
                { id: "A-153", name: "Bachelor of Science in Information Technology (Animation)" },
                { id: "A-154", name: "Bachelor of Science in Mechanical Technology" },
                { id: "A-155", name: "Bachelor of Science in Nursing" },
                { id: "A-156", name: "B Technology and Livelihood Education (BTLed-ICT)" },
                { id: "A-157", name: "B Technology and Livelihood Education (BTLEd-Home Economics)" }
            ],
            "JMRIGD": [
                { id: "A-07", name: "Bachelor of Public Administration" }
            ],
            "CDM": [
                { id: "A-161", name: "Doctor of Dental Medicine" }
            ]
        }; 
        // Helper to show/hide error messages for individual fields
        function showError(elementId, show) {
            const laravelErrorElement = document.querySelector(`[name="${elementId}"] + div + p.text-red-300, [name="${elementId}"] + p.text-red-300`);
            const clientErrorElement = document.getElementById(`error-${elementId}`);

            if (laravelErrorElement) {
                if (show) {
                    laravelErrorElement.classList.remove('hidden');
                } else {
                    laravelErrorElement.classList.add('hidden');
                }
            }
            if (clientErrorElement) {
                if (show) {
                    clientErrorElement.classList.remove('hidden');
                } else {
                    clientErrorElement.classList.add('hidden');
                }
            }
        }

        // Helper to validate a single input/select/file field
        function validateField(elementId) {
            const input = document.getElementById(elementId);
            if (input && (input.tagName === 'SELECT' || (input.type !== 'file' && input.value.trim() === ''))) {
                if (input.value.trim() === '') {
                    showError(elementId, true);
                    return false;
                }
            }
            if (input && input.type === 'file' && input.files.length === 0) {
                showError(elementId, true);
                return false;
            }

            showError(elementId, false);
            return true;
        }

        // Helper to validate a radio button group
        function validateRadioGroup(name) {
            const radios = document.querySelectorAll(`input[name="${name}"]`);
            let isChecked = false;
            radios.forEach(radio => {
                if (radio.checked) {
                    isChecked = true;
                }
            });
            const errorElement = document.getElementById(`error-${name}`);
            if (errorElement) {
                if (!isChecked) {
                    errorElement.classList.remove('hidden');
                } else {
                    errorElement.classList.add('hidden');
                }
            }
            return isChecked;
        }

        // Function to populate course dropdowns based on campus selection
        function populateCoursesDropdown(campusSelectId, courseSelectId, initialCourseValue = null) {
            const campusSelect = document.getElementById(campusSelectId);
            const courseSelect = document.getElementById(courseSelectId);

            const updateCourses = () => {
                const selectedCampus = campusSelect.value;
                courseSelect.innerHTML = '<option value="">Select a Course</option>'; // Clear options

                if (selectedCampus && courses[selectedCampus]) {
                    courses[selectedCampus].forEach(course => {
                        const option = document.createElement('option');
                        option.value = course.id;
                        option.textContent = `${course.id} | ${course.name}`;
                        courseSelect.appendChild(option);
                    });
                } else {
                    // Only add "No available courses" if a campus is selected but has no courses
                    if (selectedCampus) {
                        const option = document.createElement('option');
                        option.textContent = "No available courses.";
                        courseSelect.appendChild(option);
                    }
                }

                // If an initialCourseValue is provided, try to set it
                if (initialCourseValue) {
                    courseSelect.value = initialCourseValue;
                    initialCourseValue = null; 
                }

                // Re-validate the course field after population, if the campus itself has a value
                if (campusSelect.value) {
                    validateField(courseSelectId);
                } else {
                    validateField(courseSelectId);
                }
                validateField(campusSelectId); 
            };

            // Initial population on page load
            campusSelect.addEventListener('change', updateCourses);
            campusSelect.addEventListener('blur', updateCourses);
            campusSelect.addEventListener('touchend', updateCourses);

            // Initial population on load if a campus is already selected (e.g., from old values)
            if (campusSelect.value) {
                updateCourses();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', function () {
                    const fileName = this.files[0] ? this.files[0].name : 'Upload file';
                    const labelSpan = this.nextElementSibling.querySelector('span');
                    const previewContainer = this.closest('div').querySelector('div[id$="_preview"]');

                    if (labelSpan) {
                        labelSpan.textContent = fileName;
                    }

                    if (previewContainer) {
                        previewContainer.innerHTML = ''; 
                        const file = this.files[0];
                        if (file) {
                            // Add client-side size check here (example for 2MB)
                            const maxSizeKB = 2048; 
                            if (file.size > maxSizeKB * 1024) { 
                                alert(`File size exceeds the limit of ${maxSizeKB / 1024}MB. Please choose a smaller file.`);
                                this.value = '';
                                if (labelSpan) labelSpan.textContent = 'Upload file';
                                if (previewContainer) previewContainer.innerHTML = '';
                                showError(this.id, true);
                                return; 
                            }

                            const fileType = file.type;
                            if (fileType.startsWith('image/')) {
                                const img = document.createElement('img');
                                img.src = URL.createObjectURL(file);
                                img.classList.add('mt-2', 'mx-auto', 'border', 'border-gray-300', 'rounded', 'shadow-md');
                                img.style.maxWidth = '100px';
                                img.style.maxHeight = '100px';
                                previewContainer.appendChild(img);
                            } else if (fileType === 'application/pdf') {
                                const pdfIcon = document.createElement('p');
                                pdfIcon.classList.add('text-white', 'text-sm', 'mt-2');
                                pdfIcon.textContent = 'PDF file selected: ' + file.name;
                                previewContainer.appendChild(pdfIcon);
                            }
                        }
                    }
                    validateField(this.id);
                });
            });

            // Add blur event listeners for immediate validation feedback on text/date/number inputs
            document.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="number"], select').forEach(input => {
                if (input.id !== 'gender') { // Exclude gender as it's a radio group, handled separately
                    input.addEventListener('blur', () => validateField(input.id));
                }
            });

            // Add change event listeners for immediate validation feedback on radio groups
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.addEventListener('change', () => validateRadioGroup(radio.name));
            });
        });
    </script>
    @stack('scripts')
</body>
</html>