<x-app-layout>

<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Profile Header -->
        <div class="bg-indigo-700 p-6 flex items-center">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mr-6">
                <span class="text-3xl font-bold text-indigo-700">JD</span>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-white">John Doe</h1>
                <p class="text-indigo-200">Software Engineer</p>
            </div>
        </div>

        <!-- Employee Information Grid -->
        <div class="grid md:grid-cols-3 gap-6 p-6">
            <!-- Personal Information -->
            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Personal Information</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Full Name</p>
                        <p class="font-medium">John Michael Doe</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="font-medium">john.doe@company.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Phone</p>
                        <p class="font-medium">+1 (555) 123-4567</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Date of Birth</p>
                        <p class="font-medium">May 15, 1990</p>
                    </div>
                </div>
            </div>

            <!-- Employment Details -->
            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Employment Details</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Employee ID</p>
                        <p class="font-medium">EMP-0042</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Department</p>
                        <p class="font-medium">Engineering</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Job Title</p>
                        <p class="font-medium">Software Engineer</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Hire Date</p>
                        <p class="font-medium">January 15, 2022</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Employment Type</p>
                        <p class="font-medium">Full-Time</p>
                    </div>
                </div>
            </div>

            <!-- Compensation & Performance -->
            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Compensation & Performance</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Annual Salary</p>
                        <p class="font-medium">$85,000</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Last Performance Review</p>
                        <p class="font-medium">December 2023</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Performance Rating</p>
                        <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Excellent</span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Next Salary Review</p>
                        <p class="font-medium">June 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Sections -->
        <div class="grid md:grid-cols-2 gap-6 p-6">
            <!-- Skills & Certifications -->
            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Skills & Certifications</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">JavaScript</span>
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">React</span>
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Node.js</span>
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">AWS Certified</span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Contact Information</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-600">Work Address</p>
                        <p class="font-medium">123 Tech Lane, San Francisco, CA 94105</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Emergency Contact</p>
                        <p class="font-medium">Jane Doe (Sister) - +1 (555) 987-6543</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
