<?php
require_once("Update.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="/css/output.css" rel="stylesheet" type="text/css">

     <title>Update Data Students</title>
</head>

<body class="font-semibold bg-gray-100">
     <div class="container mx-auto">
          <div class="flex justify-center px-6 my-12">
               <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/gKXKBY-C-Dk/600x800')"></div>

                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                         <h3 class="pt-4 text-2xl text-center">Update Data Student</h3>
                         <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="" method="POST" enctype="multipart/form-data">
                              <div class="mb-4 md:flex md:justify-between">
                                   <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                             Name
                                        </label>
                                        <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="Name" id="Name" type="text" placeholder="Name" value="<?= $value['Name'] ?>" autofocus required />
                                   </div>
                                   <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="NIM">
                                             NIM
                                        </label>
                                        <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="NIM" id="NIM" type="text" placeholder="NIM" value="<?= $value['NIM'] ?>" required />
                                   </div>
                              </div>
                              <div class="mb-4">
                                   <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Email
                                   </label>
                                   <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="Email" id="Email" type="email" placeholder="Email" value="<?= $value['Email'] ?>" required />
                              </div>
                              <div class="mb-4 md:flex md:justify-between">
                                   <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="campus">
                                             Campus
                                        </label>
                                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="Campus" id="Campus" type="text" placeholder="Campus" value="<?= $value['Campus'] ?>" required />
                                   </div>
                                   <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="programs">
                                             Programs
                                        </label>
                                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="Programs" id="Programs" type="text" placeholder="Programs" value="<?= $value['Programs'] ?>" required />
                                   </div>
                              </div>

                              <!-- <div class="mb-4 md:flex md:justify-between">
                                   <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="profile">
                                             Profile
                                        </label>
                                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="Profile" id="Profile" type="file" accept="image/*" placeholder="Profile" value="<?= $value['Profile'] ?>" required />
                                   </div>
                              </div> -->

                              <div class="mb-6 text-center">
                                   <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" name="Update" id="Update">
                                        Update
                                   </button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</body>

</html>