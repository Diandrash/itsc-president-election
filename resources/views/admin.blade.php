<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel | ITSC</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #EFF2F7;"> 
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
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
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
        <h1 class="font-bold text-2xl mb-3">Selamat Datang Admin</h1>
      <div class="grid grid-cols-3 gap-5">
        <div class="card card-span-1 bg-white shadow-md rounded-xl">
          <div class="ml-3 mt-3 flex title">
            <div class="relative inline-flex items-center justify-center w-12 h-12 overflow-hidden bg-gray-100 rounded-full ">
              <span class="font-bold text-2xl" style="color: #0076C1;">1</span>
            </div>
            <h2 class="ml-3 bg-gray-70 self-center font-semibold text-xl" style="color: #0076C1;">Nomor Urut 01</h2>
          </div>

          <div class="flex result-votes ml-5 mt-7">
            <div class="relative inline-flex items-center justify-center w-12 h-10 overflow-hidden">
              <img src="/icons/People-Blue.svg" alt="icon" class="w-9/12">              
            </div>
            <h2 class="ml-5 bg-gray-70 self-center font-bold text-3xl">{{ $countCandidate1 }}</h2>
          </div>
          <p class="ml-5 mt-3 font-bold text-xl text-gray-500 font-sans mb-5">Total Votes</p>
        </div>
        <div class="card card-span-1 bg-white shadow-md rounded-xl">
          <div class="ml-3 mt-3 flex title">
            <div class="relative inline-flex items-center justify-center w-12 h-12 overflow-hidden bg-gray-100 rounded-full ">
              <span class="font-bold text-2xl" style="color: #F08519;">2</span>
            </div>
            <h2 class="ml-3 bg-gray-70 self-center font-semibold text-xl" style="color: #F08519;">Nomor Urut 02</h2>
          </div>

          <div class="flex result-votes ml-5 mt-7">
            <div class="relative inline-flex items-center justify-center w-12 h-10 overflow-hidden">
              <img src="/icons/PeopleOrange.svg" alt="icon" class="w-9/12">              
            </div>
            <h2 class="ml-5 bg-gray-70 self-center font-bold text-3xl">{{ $countCandidate2 }}</h2>
          </div>
          <p class="ml-5 mt-3 font-bold text-xl text-gray-500 font-sans mb-5">Total Votes</p>
        </div>
        <div class="card card-span-1 bg-white shadow-md rounded-xl">
          <div class="ml-3 mt-3 flex title">
            <div class="relative inline-flex items-center justify-center w-12 h-12 overflow-hidden bg-gray-100 rounded-full ">
              <span class="font-bold text-2xl" style="color: #9747FF;">3</span>
            </div>
            <h2 class="ml-3 bg-gray-70 self-center font-semibold text-xl" style="color: #9747FF;">Nomor Urut 03</h2>
          </div>

          <div class="flex result-votes ml-5 mt-7">
            <div class="relative inline-flex items-center justify-center w-12 h-10 overflow-hidden">
              <img src="/icons/PeoplePurple.svg" alt="icon" class="w-9/12">              
            </div>
            <h2 class="ml-5 bg-gray-70 self-center font-bold text-3xl">{{ $countCandidate3 }}</h2>
          </div>
          <p class="ml-5 mt-3 font-bold text-xl text-gray-500 font-sans mb-5">Total Votes</p>
        </div>
      </div>


    <div class="flex">

  <div class="max-w-sm w-3/6 bg-white rounded-lg shadow p-4 md:p-6 mt-5">

      <div class="flex justify-between items-start w-full">
          <div class="flex-col items-center">
            <div class="flex items-center mb-1">
                <h5 class="text-xl font-bold leading-none text-gray-900 me-1">Vote Result</h5>
                <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
                </svg>
                <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                        <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                        <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                        <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg></a>
                  </div>
                <div data-popper-arrow></div>
            </div>
          </div>
          <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown" data-dropdown-ignore-click-outside-class="datepicker" type="button" class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">17 November 2023 <svg class="w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <div id="dateRangeDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
              <div class="p-3" aria-labelledby="dateRangeButton">
                <div date-rangepicker datepicker-autohide class="flex items-center">
                    <div class="relative">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                          </svg>
                      </div>
                      <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date">
                    </div>
                    <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                    <div class="relative">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                          </svg>
                      </div>
                      <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End date">
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="flex justify-end items-center">
          <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown" data-dropdown-placement="bottom" type="button"  class="inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg class="w-3.5 h-3.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg><span class="sr-only">Open dropdown</span>
          </button>
          <div id="widgetDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="widgetDropdownButton">
                <li>
                  <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                    </svg>Edit widget
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                      <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    </svg>Download data
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5.953 7.467 6.094-2.612m.096 8.114L5.857 9.676m.305-1.192a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0ZM17 3.84a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Zm0 10.322a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Z"/>
                    </svg>Add to repository
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                      <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                    </svg>Delete widget
                  </a>
                </li>
              </ul>
        </div>
      </div>
      </div>
    
      <!-- Line Chart -->
      <div class="py-6" id="pie-chart"></div>
    
      <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
        <div class="flex justify-between items-center pt-5">
          <!-- Button -->
          <button
            id="dropdownDefaultButton"
            data-dropdown-toggle="lastDaysdropdown"
            data-dropdown-placement="bottom"
            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
            type="button">
            Last 7 days
            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                </li>
              </ul>
          </div>
          <a
            href="#"
            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
            Traffic analysis
            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
          </a>
        </div>
      </div>
  </div>
    

   <div class="max-w-sm w-full bg-white rounded-lg shadow :bg-gray-800 p-4 md:p-6 mt-5 ml-5">
    
    <div class="flex justify-between mb-3">
        <div class="flex justify-center items-center">
            <h5 class="text-xl font-bold leading-none text-gray-900 :text-white pe-1">Vote Status</h5>
            <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 :text-gray-400 hover:text-gray-900 :hover:text-white cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
            </svg>
            <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 :bg-gray-800 :border-gray-600 :text-gray-400">
                <div class="p-3 space-y-2">
                    <h3 class="font-semibold text-gray-900 :text-white">Activity growth - Incremental</h3>
                    <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                    <h3 class="font-semibold text-gray-900 :text-white">Calculation</h3>
                    <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                    <a href="#" class="flex items-center font-medium text-blue-600 :text-blue-500 :hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg></a>
                </div>
                <div data-popper-arrow></div>
            </div>
          </div>
        <div>
          <button type="button" data-tooltip-target="data-tooltip" data-tooltip-placement="bottom" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-8 h-8 :text-gray-400 hover:bg-gray-100 :hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 :focus:ring-gray-700 rounded-lg text-sm"><svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
    </svg><span class="sr-only">Download data</span>
          </button>

        </div>
    </div>

    <div>
      <div class="flex" id="devices">
        <div class="flex items-center me-4">
            <input id="desktop" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-800 focus:ring-2 :bg-gray-700 :border-gray-600">
            <label for="desktop" class="ms-2 text-sm font-medium text-gray-900 :text-gray-300">Desktop</label>
        </div>
        <div class="flex items-center me-4">
            <input id="tablet" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-800 focus:ring-2 :bg-gray-700 :border-gray-600">
            <label for="tablet" class="ms-2 text-sm font-medium text-gray-900 :text-gray-300">Tablet</label>
        </div>
        <div class="flex items-center me-4">
            <input id="mobile" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 :focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="mobile" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mobile</label>
        </div>
      </div>
    </div>

    <!-- Donut Chart -->
    <div class="py-6" id="donut-chart"></div>

    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="lastDaysdropdown"
          data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 7 days
          <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>
        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
              </li>
            </ul>
        </div>
        <a
          href="#"
          class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
          Traffic analysis
          <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </a>
      </div>
    </div>
  </div>

</div>



<script>
  // ApexCharts options and config
  window.addEventListener("load", function() {
    const getChartOptions = () => {
        return {
          series: [{{ $userCount1 }}, {{ $userCount0 }}],
          colors: ["#0E9F6E", "#F05252" ],
          chart: {
            height: 320,
            width: "100%",
            type: "donut",
          },
          stroke: {
            colors: ["transparent"],
            lineCap: "",
          },
          plotOptions: {
            pie: {
              donut: {
                labels: {
                  show: true,
                  name: {
                    show: true,
                    fontFamily: "Inter, sans-serif",
                    offsetY: 20,
                  },
                  total: {
                    showAlways: true,
                    show: true,
                    label: "Total Users",
                    fontFamily: "Inter, sans-serif",
                    formatter: function (w) {
                      const sum = w.globals.seriesTotals.reduce((a, b) => {
                        return a + b
                      }, 0)
                      return `{{ $totalUsers }}`
                    },
                  },
                  value: {
                    show: true,
                    fontFamily: "Inter, sans-serif",
                    offsetY: -20,
                    formatter: function (value) {
                      return value + "k"
                    },
                  },
                },
                size: "80%",
              },
            },
          },
          grid: {
            padding: {
              top: -2,
            },
          },
          labels: ["Has Voted", "Have not vote"],
          dataLabels: {
            enabled: false,
          },
          legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
          },
          yaxis: {
            labels: {
              formatter: function (value) {
                return value + "k"
              },
            },
          },
          xaxis: {
            labels: {
              formatter: function (value) {
                return value  + "k"
              },
            },
            axisTicks: {
              show: false,
            },
            axisBorder: {
              show: false,
            },
          },
        }
      }

      if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
        chart.render();

        // Get all the checkboxes by their class name
        const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

        // Function to handle the checkbox change event


        // Attach the event listener to each checkbox
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
        });
      }
  });
</script>

  <script>
    // ApexCharts options and config
    window.addEventListener("load", function() {
      const getChartOptions = () => {
          return {
            series: [{{ $countCandidate1 }}, {{ $countCandidate2 }}, {{ $countCandidate3 }}],
            colors: ["#0076C1", "#F08519", "#9747FF"],
            chart: {
              height: 420,
              width: "100%",
              type: "pie",
            },
            stroke: {
              colors: ["white"],
              lineCap: "",
            },
            plotOptions: {
              pie: {
                labels: {
                  show: true,
                },
                size: "100%",
                dataLabels: {
                  offset: -25
                }
              },
            },
            labels: ["No Urut 1", "No Urut 2", "No Urut 3"],
            dataLabels: {
              enabled: true,
              style: {
                fontFamily: "Inter, sans-serif",
              },
            },
            legend: {
              position: "bottom",
              fontFamily: "Inter, sans-serif",
            },
            yaxis: {
              labels: {
                formatter: function (value) {
                  return value + "%"
                },
              },
            },
            xaxis: {
              labels: {
                formatter: function (value) {
                  return value  + "%"
                },
              },
              axisTicks: {
                show: false,
              },
              axisBorder: {
                show: false,
              },
            },
          }
        }
  
        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
          const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
          chart.render();
        }
    });
  </script>
  
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