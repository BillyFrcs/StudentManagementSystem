<?php
require_once('Data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="/css/output.css" rel="stylesheet" type="text/css">

     <title>Data Students</title>
</head>

<body>
     <div class="bg-white p-8 rounded-md w-full text-medium">
          <div class=" flex items-center justify-between pb-6 text-medium">
               <div class="text-medium">
                    <h2 class="text-gray-600 font-semibold text-medium">Data Students</h2>
                    <span class="text-xs">All Data Students</span>
               </div>
               <form action="<?= $Index ?>" method="POST">
                    <div class="flex items-center justify-between">
                         <div class="flex bg-gray-50 items-center p-2 rounded-md">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                   <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                              </svg>
                              <input class="bg-gray-50 outline-none ml-1 block " type="text" name="Keyword" id="Keyword" placeholder="search..." required>
                         </div>
                         <div class="lg:ml-4 ml-1 space-x-8">
                              <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-indigo-500" type="submit" name="Search" id="Search">Search</button>
                         </div>
                    </div>
               </form>

               <div class="flex items-center justify-between mb-5">
                    <div class="lg:ml-4 ml-1 space-x-8">
                         <a href="<?= $AddData; ?>" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-indigo-500" type="submit">Add Data</a>
                    </div>
               </div>
          </div>

          <div>
               <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                         <table class="min-w-full leading-normal">
                              <thead>
                                   <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             No
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             Name
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             NIM
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             Email
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             Campus
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             Programs
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                             Actions
                                        </th>
                                   </tr>
                              </thead>

                              <tbody>
                                   <?php if ($connection->CheckRows() != null && (is_object($fetchData) || is_array($fetchData))) : ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ((array)$fetchData as $key => $value) : ?>
                                             <tr>
                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $no; ?></p>
                                                  </td>

                                                  <!-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-20 h-20">
                                                                 <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80" alt="Profile Photo" />
                                                            </div>

                                                            <div class="ml-3">
                                                                 <p class="text-gray-900 whitespace-no-wrap"><?= $value['Name']; ?></p>
                                                            </div>
                                                       </div>
                                                  </td> -->

                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $value['Name']; ?></p>
                                                  </td>
                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $value['NIM']; ?></p>
                                                  </td>
                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $value['Email']; ?></p>
                                                  </td>
                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $value['Campus']; ?></p>
                                                  </td>
                                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                                       <p class="text-gray-900 whitespace-no-wrap"><?= $value['Programs']; ?></p>
                                                  </td>
                                                  <td class="px-5 py-5">
                                                       <a href="<?= $UpdateData; ?>?ID=<?= $value['ID']; ?>" class="px-5 py-2 text-medium text-blue-700 bg-blue-300 rounded-full hover:bg-blue-200">Edit</a>
                                                       <a href="<?= $DeleteData; ?>?ID=<?= $value['ID']; ?>&request=delete" class="px-5 py-2 text-medium text-red-700 bg-red-300 rounded-full hover:bg-red-200" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                                  </td>
                                             </tr>
                                             <?php $no++; ?>
                                        <?php endforeach; ?>
                                   <?php else : ?>
                                        <tr>
                                             <td colspan="7" class="px-5 py-5 border-b border-gray-200 bg-white text-medium content-center">
                                                  <p class="text-gray-900 whitespace-no-wrap items-center">Data not found!</p>
                                             </td>
                                        </tr>
                                   <?php endif; ?>
                              </tbody>
                         </table>

                         <!-- <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                              <span class="text-xs xs:text-sm text-gray-900">
                                   Made by <a href="<?= $Index ?>">BillyFrcs</a>
                              </span>

                              <div class="inline-flex mt-2 xs:mt-0">
                                   <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                        Prev
                                   </button>
                                   &nbsp; &nbsp;
                                   <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                        Next
                                   </button>
                              </div>
                         </div> -->

                    </div>
               </div>
          </div>
     </div>
</body>

</html>