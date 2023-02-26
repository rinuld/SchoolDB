<!DOCTYPE html>
<html>
    <head>
        <title>SchoolDB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="views/assets/css/tailwind.css">
        <script type="text/javascript" src="views/js/script.js"></script>
	</head>

	<style>
		html {
            scroll-behavior: smooth;
        }
	</style>
    
    <body>
        <div id="main" class="bg-no-repeat bg-left w-full h-screen bg-fixed bg-cover" style="background-image: url('views/assets/images/college.jpg');">
            
            <!-- Navbar -->
            <nav class="fixed flex flex-col items-center justify-center py-5 w-full md:flex-row px-4 shadow-lg z-40 bg-indigo-600">
                <a href="#main" class="flex items-center font-medium text-gray-900 lg:w-auto md:mb-0">
                    <span class="mx-auto text-2xl font-bold text-white hover:text-indigo-100">SchoolDB</span>
                </a>
            </nav>
            
            <!-- White overlay -->
            <div class="bg-white w-full h-screen bg-opacity-75">

                <!-- Section 1 - Welcome! -->
                <section class="px-2 py-48">
                    <div class="items-center max-w-6xl px-8 mx-auto">
                        <div class="flex flex-wrap items-center sm:-mx-3">

                            <div class="w-full md:w-1/2 md:px-3">
                                <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                                    <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                        <span class="block xl:inline">Welcome to</span>
                                        <span class="block text-indigo-600 xl:inline">SchoolDB!</span>
                                    </h1>
                                    <p class="mx-auto font-bold text-black sm:max-w-md lg:text-xl md:max-w-3xl">
                                        A simple tailwind-powered website for managing Students and Courses.
                                    </p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                                    <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Section 2 - Database Records -->
                <section class="py-48">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-4xl font-bold text-center">Browse the records!</h2>
                        <p class="mt-2 text-lg text-center text-gray-600">Check out our database for records below.</p>
                        <div class="grid grid-cols-2 gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-2 sm:px-8 xl:px-0 lg:flex">

                            <button id="table1" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 flex flex-col items-center col-span-4 px-8 py-12 bg-gray-600 rounded-md md:w-full" onclick="showStudent()">
                                <div class="p-1 bg-indigo-600 rounded-full">
                                    <svg width="64px" height="64px" viewBox="-22.4 -22.4 108.80 108.80" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffffff" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M48.61,56.07A16.61,16.61,0,0,0,32,39.45h0A16.61,16.61,0,0,0,15.39,56.07Z"></path><path d="M39.41,28a8.11,8.11,0,0,1-8.25,8.1,8.28,8.28,0,0,1-7.95-8.37V16.45a.06.06,0,0,1,.05-.06,60.56,60.56,0,0,1,8.27-.68,54.93,54.93,0,0,1,7.91.68.06.06,0,0,1,.06.06Z"></path><path d="M23.21,20.14l-8.27-3.8a.08.08,0,0,1,0-.13L31.32,8.39h.06l16.33,7.74a.07.07,0,0,1,0,.12L39.5,20.14"></path><path d="M23.21,24.35H20.89s-2,0-2,3.1c0,2.86,2,2.86,2,2.86l2.72,0"></path><path d="M39.41,24.71h2.32s2,0,2,3.09c0,2.86-2,2.86-2,2.86H39"></path><line x1="46.85" y1="33.15" x2="46.85" y2="16.72"></line><circle cx="46.85" cy="35.28" r="2.13"></circle><path d="M39.5,23a42.89,42.89,0,0,0-7.95-.69,40.85,40.85,0,0,0-8.34.69"></path></g></svg>
                                </div>
                                <h4 class="text-xl font-medium my-2 text-white">Student</h4>
                                <p class="text-center text-white">Records of the students enrolled in our courses.</p>
                                <div id="studentRecords" class="px-2 py-5 relative hidden">

                                    <table class="min-w-full">

                                        <thead>
                                            <tr class="border border-grey-500 text-center text-white">
                                                <th class="bg-gray-600 p-2 font-bold">ID</th>
                                                <th class="bg-gray-600 p-2 font-bold">Last Name</th>
                                                <th class="bg-gray-600 p-2 font-bold">First Name</th>
                                                <th class="bg-gray-600 p-2 font-bold">Middle Initial</th>
                                                <th class="bg-gray-600 p-2 font-bold">Address</th>
                                                <th class="bg-gray-600 p-2 font-bold">Course Code</th>
                                                <th class="bg-gray-600 p-2 font-bold">Birthdate</th>
                                                <th class="bg-gray-600 p-2 font-bold">Age</th>
                                                <th class="bg-gray-600 p-2 font-bold">Gender</th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php
                                                require_once '/xampp/htdocs/SchoolDB/models/connection.php';
                                                require_once '/xampp/htdocs/SchoolDB/controllers/student_controller.php';

                                                $student = (new ctrStudent)->ctrShowStudents();
                                                
                                                foreach ($student as $key => $value){
                                                    echo '<tr class="bg-gray-300 border border-grey-500 text-center">
                                                    <td class="p-2">'.$value["id"].'</td>
                                                    <td class="p-2">'.$value["lname"].'</td>
                                                    <td class="p-2">'.$value["fname"].'</td>  
                                                    <td class="p-2">'.$value["mi"].'</td>
                                                    <td class="p-2">'.$value["address"].'</td>
                                                    <td class="p-2">'.$value["progcode"].'</td>
                                                    <td class="p-2">'.$value["bdate"].'</td>
                                                    <td class="p-2">'.$value["age"].'</td>
                                                    <td class="p-2">'.$value["gender"].'</td>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </button>

                            <button id="table2" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 flex flex-col items-center col-span-4 px-8 py-12 bg-gray-600 rounded-md md:w-full" onclick="showCourse()">
                                <div class="p-1 bg-indigo-600 rounded-full">
                                    <svg width="64px" height="64px" viewBox="-8.4 -8.4 40.80 40.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 3.25001H6.75C6.10713 3.23114 5.483 3.4679 5.01439 3.9084C4.54577 4.3489 4.2709 4.9572 4.25 5.60001V18C4.27609 18.7542 4.60027 19.4673 5.15142 19.9829C5.70258 20.4984 6.43571 20.7743 7.19 20.75H19C19.1981 20.7474 19.3874 20.6676 19.5275 20.5275C19.6676 20.3874 19.7474 20.1981 19.75 20V4.00001C19.7474 3.8019 19.6676 3.61264 19.5275 3.47254C19.3874 3.33245 19.1981 3.2526 19 3.25001ZM18.25 19.25H7.19C6.83339 19.2748 6.48151 19.1571 6.21156 18.9227C5.94161 18.6884 5.77562 18.3566 5.75 18C5.77562 17.6435 5.94161 17.3116 6.21156 17.0773C6.48151 16.843 6.83339 16.7253 7.19 16.75H18.25V19.25ZM18.25 15.25H7.19C6.68656 15.2506 6.19135 15.3778 5.75 15.62V5.60001C5.7729 5.3559 5.89028 5.13039 6.0771 4.9716C6.26392 4.8128 6.50538 4.73329 6.75 4.75001H18.25V15.25Z" fill="#000000"></path> <path d="M8.75 8.75H15.25C15.4489 8.75 15.6397 8.67098 15.7803 8.53033C15.921 8.38968 16 8.19891 16 8C16 7.80109 15.921 7.61032 15.7803 7.46967C15.6397 7.32902 15.4489 7.25 15.25 7.25H8.75C8.55109 7.25 8.36032 7.32902 8.21967 7.46967C8.07902 7.61032 8 7.80109 8 8C8 8.19891 8.07902 8.38968 8.21967 8.53033C8.36032 8.67098 8.55109 8.75 8.75 8.75Z" fill="#000000"></path> <path d="M8.75 12.25H15.25C15.4489 12.25 15.6397 12.171 15.7803 12.0303C15.921 11.8897 16 11.6989 16 11.5C16 11.3011 15.921 11.1103 15.7803 10.9697C15.6397 10.829 15.4489 10.75 15.25 10.75H8.75C8.55109 10.75 8.36032 10.829 8.21967 10.9697C8.07902 11.1103 8 11.3011 8 11.5C8 11.6989 8.07902 11.8897 8.21967 12.0303C8.36032 12.171 8.55109 12.25 8.75 12.25Z" fill="#000000"></path> </g></svg>
                                </div>
                                <h4 class="text-xl font-medium my-2 text-white">Course</h4>
                                <p class="text-center text-white">A list of our available courses.</p>
                                <div id="courseRecords" class="px-2 py-5 relative hidden">

                                    <table class="min-w-full">

                                        <thead>
                                            <tr class="border border-grey-500 text-center text-white">
                                                <th class="bg-gray-600 p-2 font-bold">ID</th>
                                                <th class="bg-gray-600 p-2 font-bold">Last Name</th>
                                                <th class="bg-gray-600 p-2 font-bold">First Name</th>
                                                <th class="bg-gray-600 p-2 font-bold">Middle Initial</th>
                                                <th class="bg-gray-600 p-2 font-bold">Address</th>
                                                <th class="bg-gray-600 p-2 font-bold">Course Code</th>
                                                <th class="bg-gray-600 p-2 font-bold">Birthdate</th>
                                                <th class="bg-gray-600 p-2 font-bold">Age</th>
                                                <th class="bg-gray-600 p-2 font-bold">Gender</th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php
                                                require_once '/xampp/htdocs/SchoolDB/models/connection.php';
                                                require_once '/xampp/htdocs/SchoolDB/controllers/student_controller.php';

                                                $student = (new ctrStudent)->ctrShowStudents();
                                                
                                                foreach ($student as $key => $value){
                                                    echo '<tr class="bg-gray-300 border border-grey-500 text-center">
                                                    <td class="p-2">'.$value["id"].'</td>
                                                    <td class="p-2">'.$value["lname"].'</td>
                                                    <td class="p-2">'.$value["fname"].'</td>  
                                                    <td class="p-2">'.$value["mi"].'</td>
                                                    <td class="p-2">'.$value["address"].'</td>
                                                    <td class="p-2">'.$value["progcode"].'</td>
                                                    <td class="p-2">'.$value["bdate"].'</td>
                                                    <td class="p-2">'.$value["age"].'</td>
                                                    <td class="p-2">'.$value["gender"].'</td>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
