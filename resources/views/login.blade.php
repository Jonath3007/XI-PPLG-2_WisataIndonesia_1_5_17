<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FORM LOGIN</title>
</head>
<body class="bg-[rgb(131,197,219)] bg-contain bg-center bg-no-repeat h-screen w-screen flex justify-center items-center text-center" style="background-image: url('/aset/indomap.jpg')">
    <img src="/aset/WI.png" class="absolute top-5 left-[52rem] w-72">
    
    <form id="formlogin" class="bg-black bg-opacity-50 p-10 rounded-3xl shadow-xl w-[600px]">
        <div class="mb-5">
            <label for="username" class="block mb-2 text-white text-2xl font-bold">Username:</label>
            <input 
                type="text" 
                name="username" 
                id="username" 
                class="w-full px-5 py-4 border border-gray-300 rounded-full mb-3 font-roboto"
            >
        </div>
        
        <div class="mb-5">
            <label for="password" class="block mb-2 text-white text-2xl font-bold">Password:</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="w-full px-5 py-4 border border-gray-300 rounded-full mb-3 font-roboto"
            >
        </div>
        
        <button 
            type="submit" 
            class="w-1/4 py-3 bg-white text-black rounded-full text-2xl font-bold cursor-pointer transition duration-300 hover:bg-gray-200"
        >
            LOGIN
        </button>
    </form>
    <script>
        var redirectUrl = "{{ route('index') }}";
    </script>
    <script src="{{asset('aset/js/login.js') }}"></script>
</body>
</html>