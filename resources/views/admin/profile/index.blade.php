<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/{{route('admin-profile')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 22:20:17 GMT -->
<head>
    @include('admin.layout.head')
    <title>Profile</title>
</head>
<body>
    <div class="tp-main-wrapper bg-slate-100 h-screen" x-data="{ sideMenu: false }">
        @include('admin.layout.sidebar')

        <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"> </div>

        <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]"  x-data="{ searchOverlay: false }">

            @include('admin.profile.header')

            @include('admin.profile.content')
        </div>
    </div>

    @include('admin.layout.js')
</body>

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/{{route('admin-profile')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 22:20:18 GMT -->
</html>