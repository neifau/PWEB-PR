<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <h1>Login</h1>
    <div class="container mx-auto">
        <form action="dashboard.php" method="post" class="form-control">
            <section class="bg-gray-50 dark:bg-gray-900">
                <div class="flex flex-col items-center justify-center px-6 pb-8 pt-0 mx-auto h-screen md:h-screen lg:py-0 w-1/2">
                    <div class="w-96 mt-12 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-700 md:text-2xl dark:text-white text-center">
                                <i class="fa-solid fa-user mr-3"> </i>Login
                            </h1>
                            <hr class="my-8 bg-gray-300 border-0 dark:bg-gray-700">
                            <div class="space-y-4 md:space-y-6">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Email Anda..." required="">
                                </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi</label>
                                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda..." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat Saya</label>
                                    </div>
                                </div>
                                    <a href="#" class="text-blue-500 text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Lupa Kata Sandi?</a>
                                </div>
                                <div class="mt-5">
                                <a href="dashboard.php" type="button" class="border-2 border-blue-600 bg-blue-500 text-white w-full h-10 py-1 rounded-md hover:bg-transparent hover:text-blue-700 font-semibold text-center">Login</a>
                                </div>
                                <p  class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                                    Belum mempunyai akun? <a href="registrasi.php" class="font-medium text-primary-600 text-blue-500 hover:underline dark:text-primary-600"><u>Registrasi</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
</body>

</html>