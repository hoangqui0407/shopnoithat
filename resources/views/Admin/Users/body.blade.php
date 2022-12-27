<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('public/template/login/dist/images/logo.svg') }}">
                <span class="text-white text-lg ml-3"> Nội Thất Thời Trang </span> 
            </a>
            <div class="my-auto">
                <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('public/template/login/dist/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Nhấp vào đây để
                    <br>
                    đăng nhập tài khoản của bạn.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Quản lý tất cả các tài khoản thương mại điện tử của bạn ở một nơi.</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        
        <form action="{{ route('login.store') }}" method="post" style="margin-top: 125px;">
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0" >
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Đăng nhập hệ thống
                </h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Hãy click vào đây để đăng nhập vào tài khoản của bạn. Quản lý tất cả các tài khoản thương mại điện tử của bạn ở một nơi</div>
                <div class="intro-x mt-8">
                    @include('Admin.Users.alert')
                    <input type="text" name="email" class="intro-x login__input form-control py-3 px-4 block"  placeholder="Email">
                    <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                </div>
                <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <input id="remember-me" type="checkbox" name="remember" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Nhớ tài khoản của tôi</label>
                    </div>
                    @csrf
                    <a href="{{ route('register')}}">Bạn quên mật khẩu</a> 
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Đăng Nhập</button>
                    <button src="" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Đăng Ký</button>
                </div>
                <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a> </div>
            </div>
        </div>
    </form>
        <!-- END: Login Form -->
    </div>
</div>
</form>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="loginlight.blade.php" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
    <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
</div>
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
<script src="{{ asset('public/template/login/dist/js/app.js') }}"></script>