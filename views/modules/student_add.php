<!DOCTYPE html>
<html>
    <head>
        <title>SchoolDB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../assets/css/tailwind.css">
	</head>

	<style>
		html {
            scroll-behavior: smooth;
        }
	</style>
    
    <body>
        <div id="main" class="bg-no-repeat bg-left w-full h-screen bg-fixed bg-cover" style="background-image: url('../assets/images/college.jpg');">
            
            <!-- Navbar -->
            <nav class="fixed flex flex-col items-center justify-between py-5 w-full md:flex-row px-4 shadow-lg z-40 bg-indigo-600">
                <div class="relative flex flex-col md:flex-row">
                    <a href="../../index.php" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto md:mb-0">
                        <span class="mx-auto text-xl font-bold text-white hover:text-indigo-100">SchoolDB</span>
                    </a>
                    <div class="flex flex-wrap items-center mb-5 md:mb-0 md:border-l md:border-white md:mx-3">
                        <a href="#_" class="mx-3 font-medium text-white hover:text-indigo-100">Add Student</a>
                        <a href="#_" class="mr-3 font-medium text-white hover:text-indigo-100 s:mx-3">Edit Student</a>
                    </div>
                </div>
            </nav>
            
            <!-- White overlay -->
            <div class="bg-white w-full h-screen bg-opacity-75">

                <!-- Section 1 - Welcome! -->
                <section id="home" class="px-2 py-48">

                    <div class="flex items-center justify-center w-full">
                        <h1 class="text-4xl font-bold sm:text-3xl">
                            <span class="text-indigo-600">Student Records</span>
                        </h1>
                    </div>

                    <table class="min-w-full">

                        <thead>
                            <tr class="border border-grey-500 text-center">
                                <th class="bg-gray-600 p-2 text-white font-bold">ID</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Last Name</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">First Name</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Middle Initial</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Address</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Course Code</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Birthdate</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Age</th>
                                <th class="bg-gray-600 p-2 text-white font-bold">Gender</th>
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

                </section>
            </div>
        </div>
    </body>
</html>
