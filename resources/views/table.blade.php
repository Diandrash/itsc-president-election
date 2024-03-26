<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel | ITSC</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color:"> 
<div class="grid grid-cols-10">

    <div class="sidebar col-span-2">
        <span
          class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
          onclick="openSidebar()"
        >
          <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
        </span>
        <div
          class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
        >
          <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
              <img src="/img/itsc-landscape.png" class="w-12" alt="">
              <!-- <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i> -->
              <h1 class="font-bold text-gray-200 text-[15px] ml-3">ITSC Admin Panel</h1>
              <i
                class="bi bi-x cursor-pointer ml-28 lg:hidden"
                onclick="openSidebar()"
              ></i>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
          </div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          >
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold" onclick="location.href='/admin'">Home</span>
          </div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          >
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold" onclick="location.href='/admin/users'">List Users</span>
          </div>
          <div class="my-4 bg-gray-600 h-[1px]"></div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
            onclick="dropdown()"
          >
            <i class="bi bi-chat-left-text-fill"></i>
            
          </div>
          <div
            class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
            id="submenu"
          >
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Social
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Personal
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Friends
            </h1>
          </div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
            onclick="location.href='/admin/logout'"
          >
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
          </div>
        </div>
    </div>

    <div class="main col-span-8 ml-20 mr-8 mt-8" style="height: 30vh;">
        <h2 class="text-3xl ml-5 mb-5">List of Users</h2>

        

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 :text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 :text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Fullname
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Class
                </th>
                <th scope="col" class="px-6 py-3">
                    Token
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
                
            <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                    {{ $user->fullname }}
                </th>
                <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap :text-white">
                   {{$user->username}}
                </td>
                <td class="px-6 py-4 ">
                    {{ $user->class }}
                </td>
                <td class="px-6 py-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $user->token }}
                </td>
                <td class="px-6 py-4 text-center">
                    @if ($user->already_vote == 0)
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Not Yet</button>
                    @endif

                    @if ($user->already_vote == 1)
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Voted</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    </div>

</div>




<script type="text/javascript">
  function dropdown() {
    document.querySelector("#submenu").classList.toggle("hidden");
    document.querySelector("#arrow").classList.toggle("rotate-0");
  }
  dropdown();

  function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>