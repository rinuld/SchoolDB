<!DOCTYPE html>
<html>
    <head>
        <title>Add a Student</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../assets/css/tailwind.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/student_add.js"></script>
	</head>

	<style>
		html {
            scroll-behavior: smooth;
        }
	</style>
    
    <body>
        <div id="main" class="bg-no-repeat bg-left w-full h-screen bg-fixed bg-cover" style="background-image: url('../assets/images/college.jpg');">
            <!-- Navbar -->
            <nav class="fixed flex flex-col items-center justify-center py-5 w-full md:flex-row px-4 shadow-lg z-40 bg-indigo-600">
                <a href="../../index.php" class="flex items-center font-medium text-gray-900 lg:w-auto md:mb-0">
                    <span class="mx-auto text-2xl font-bold text-white hover:text-indigo-100">SchoolDB</span>
                </a>
            </nav>
            
            <!-- Black overlay -->
            <div class="bg-black bg-opacity-75 h-screen">
                <div class="flex flex-col items-center">
                    <form class="w-full max-w-lg my-40 pt-5" role="form" id="student-form" method="POST">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Last Name
                                </label>
                                <input type="text" id="lname" name="lname" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" autocomplete=off required>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                            <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                First Name
                            </label>
                            <input type="text" id="fname" name="fname" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" autocomplete=off required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Middle Initial
                                </label>
                                <input type="text" id="mi" name="mi" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Address
                                </label>
                                <input type="text" id="address" name="address" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Course Code
                                </label>
                                <input type="text" id="coursecode" name="coursecode" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Birthdate
                                </label>
                                <input type="date" id="bdate" name="bdate" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Age
                                </label>
                                <input type="int" id="age" name="age" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="text-white block uppercase tracking-wide text-xs font-bold mb-2">
                                    Gender
                                </label>
                                <input type="text" id="gender" name="gender" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" autocomplete=off required>
                            </div>
                        </div>

                        <button type="submit" class="my-10 py-3 appearance-none block w-full bg-indigo-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none hover:bg-indigo-800 font-extrabold text-white">Enroll</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>