<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
{{-- <div class="p-4">
  @@include("./logo-sidebar.html")
</div> --}}
{{-- @vite([ 'resources/css/theme.css', 'resources/js/app.js', 'resources/js/sidebarmenu.js']) --}}
@vite(['resources/js/app.js', 'resources/js/sidebarmenu.js'])
<div class="scroll-sidebar overflow-y-auto min-h-screen" data-simplebar="">
    <nav class=" w-full flex flex-col sidebar-nav px-4 mt-5">
        <ul id="sidebarnav" class="text-gray-600 text-sm">
            <li class="text-xs font-bold pb-[5px]">
                <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                <span class="text-xs text-gray-400 font-semibold">HOME</span>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full"
                    href="{{ route('dashboard') }}">
                    <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center justify-between relative rounded-md text-gray-500 w-full"
                    href="{{ route('posts.index') }}">
                    <div class="flex items-center gap-2">
                        <i class="ti ti-chart-bar ps-2 text-2xl"></i> <span>Info dan Agenda</span>
                    </div>

                </a>
            </li>
            <li class="sidebar-item">
                {{-- <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center justify-between relative rounded-md text-gray-500 w-full"
                    href="{{ route('posts.index') }}"> --}}
                    
                        <form method="POST" class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center justify-between relative rounded-md text-gray-500 w-full" action="{{ route('logout') }}">
                            @csrf
<div class="flex items-center gap-2">
                        <i class="ti ti-chart-bar ps-2 text-2xl"></i> 
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </div>
                        </form>

                {{-- </a> --}}
            </li>


        </ul>
    </nav>
</div>

<script>
    $(function() {
        "use strict";
        var url = window.location + "";
        var path = url.replace(
            window.location.protocol + "//" + window.location.host + "/",
            ""
        );
        var element = $("ul#sidebarnav a").filter(function() {
            return this.href === url || this.href === path; // || url.href.indexOf(this.href) === 0;
        });
        element.parentsUntil(".sidebar-nav").each(function(index) {
            if ($(this).is("li") && $(this).children("a").length !== 0) {
                $(this).children("a").addClass("active");
                $(this).parent("ul#sidebarnav").length === 0 ?
                    $(this).addClass("active") :
                    $(this).addClass("selected");
            } else if (!$(this).is("ul") && $(this).children("a").length === 0) {
                $(this).addClass("selected");
            } else if ($(this).is("ul")) {
                $(this).addClass("in");
            }
        });

        element.addClass("active");
        $("#sidebarnav a").on("click", function(e) {
            if (!$(this).hasClass("active")) {
                // hide any open menus and remove all other classes
                $("ul", $(this).parents("ul:first")).removeClass("in");
                $("a", $(this).parents("ul:first")).removeClass("active");

                // open our new menu and add the open class
                $(this).next("ul").addClass("in");
                $(this).addClass("active");
            } else if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).parents("ul:first").removeClass("active");
                $(this).next("ul").removeClass("in");
            }
        });
        $("#sidebarnav >li >a.has-arrow").on("click", function(e) {
            e.preventDefault();
        });
    });
</script>
