<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
</head>
<body>
    <nav class="w-full flex justify-between items-center px-8 py-4 bg-blue-400">
        <h2 class="w-1/2 text-2xl">KaptainCS3</h2>
        <div class="w-1/4 flex justify-evenly">
            <a href="#">Home</a>
            <a href="#">Feedback</a>
            <a href="#">About</a>
        </div>
    </nav>
    <main class="flex min-h-[100vh] justify-center items-center mx-auto w-1/2">
            <form action="" class="w-full">
               
                <div class="flex w-full">
                    <div class="w-full flex flex-col justify-between mr-4">
                        <div class=w-full>
                            <label for="user_name" class="block p-4">Name</label>
                            <input type="text" name="name" id="user_name" placeholder="Enter your name" class="border w-full py-3 rounded-xl outline-none px-4">
                        </div>
                        <div class=w-full>
                            <label for="user_email" class="block p-4">Email</label>
                            <input type="email" id="user_email" name="email" placeholder="Enter your email" class="border w-full py-3 rounded-xl outline-none px-4" >
                        </div>
                    </div>
                    <div class=w-full>
                        <div class="w-full h-full">
                            <textarea name="feedback" id="content" class="outline-none w-full h-full rounded-xl px-4 py-3 border" placeholder="Enter your Feedback ..................."></textarea>
                        </div>
                    </div>
                </div>
                <button class="w-full bg-blue-400 py-3 my-4 rounded-lg text-xl text-white font-medium">Send</button>
            </form>
    </main>
</body>
</html>