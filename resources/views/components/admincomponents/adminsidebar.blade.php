{{-- <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="bg-slate-700 fixed top-0 left-0 inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button> --}}

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
    .customhover:hover {
        background-color: #333A48;
    }

    .customglow {
        color: #fff;
        text-align: center;
        animation: customglow 3s ease-in-out infinite alternate;
    }

    @-webkit-keyframes customglow {
        from {
            text-shadow: 0 0 10px #ffffff73, 0 0 20px #ffffff7a, 0 0 30px #e6dee285, 0 0 40px #d8d7d883, 0 0 50px #a5a1a367, 0 0 60px #94909277, 0 0 70px #d3d2d244;
        }

        to {
            text-shadow: 0 0 20px #ffffff5b, 0 0 30px #f8f8f83d, 0 0 40px #eeeaec3d, 0 0 50px #f7f1f44b, 0 0 60px #f1ebee34, 0 0 70prgba(248, 245, 247, 0.705)f7, 0 0 80px #f3eff156;
        }
    }
</style>
<style>
    .material-symbols-outlined {
        font-variation-settings:
            'FILL'0,
            'wght'400,
            'GRAD'0,
            'opsz'48
    }
</style>



<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto text-white" style="background-color: #1C2434">
        <ul class="space-y-2 font-medium">

            {{-- Logo --}}
            <a href="{{ route('superadmin.dashboard') }}">
                <li class="flex items-center mb-10 mt-4">
                    <span class="mr-5">
                        <img width="60px" src="{{ asset('images/logo/logo.jpg') }}" alt="">
                    </span>

                    <h1 class="customglow">
                        E-Commerce
                    </h1>
                </li>
            </a>
            {{-- Logo --}}


            <li>
                <a href="#" class="anchor default flex items-center p-2 text-white rounded-lg customhover">
                    <svg class="w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="text-white ml-3">Super Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="anchor flex items-center p-2 text-white rounded-lg customhover">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Admin Register</span>
                </a>
            </li>
            <li>
                <a href="#" class="anchor flex items-center p-2 text-white rounded-lg customhover">

                    <span class="material-symbols-outlined w-6 h-6 text-white">
                        category
                    </span>

                    <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                </a>
            </li>

            <li>
                <a href="#" class="anchor flex items-center p-2 text-white rounded-lg customhover">

                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>

                    <span class="flex-1 ml-3 whitespace-nowrap">Add Categories</span>
                </a>
            </li>
            <li>
                <a href="#" class="anchor flex items-center p-2 text-white bg rounded-lg customhover group">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 18" fill="currentColor">
                        <path
                            d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
                            fill="currentColor" />
                        <path
                            d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
                            fill="currentColor" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">0</span>
                </a>
            </li>
            <li>
                <a href="#" class="anchor flex items-center p-2 text-white rounded-lg customhover group">
                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">User Accounts</span>
                </a>
            </li>
            <li>
                <a href="#" class="anchor flex items-center p-2 text-white rounded-lg customhover group">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Admins Accounts</span>
                </a>
            </li>
        </ul>
    </div>
</aside>


{{-- <x-admincomponents.admindashboardmain/> --}}

{{-- <div class="p-4 sm:ml-64">

        <x-admincomponents.adminnavigationmenu />
        <x-admincomponents.adminheader />
        <x-admincomponents.adminregister />

    </div> --}}





{{-- <div class="p-4 sm:ml-64">

    <x-admincomponents.adminregister />

</div> --}}
