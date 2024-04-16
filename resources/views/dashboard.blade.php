<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Wolverine_%28Gulo_gulo%29%2C_Korkeasaari.JPG/1920px-Wolverine_%28Gulo_gulo%29%2C_Korkeasaari.JPG" alt="Mario Avatar">
                    <div>
                        <h3 class="card-title mb-0"><a href="#"> Mario
                            </a></h3>
                        <span class="fs-6 text-muted">@mario</span>
                    </div>
                </div>
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> About : </h5>
                <p class="fs-6 fw-light">
                    This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                    from a line in section 1.10.32.
                </p>
                <div class="d-flex justify-content-start">
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                        </span> 120 Followers </a>
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                        </span> 2 </a>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                        </span> 2 </a>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary btn-sm"> Follow </button>
                </div>
            </div>
        </div>
    </div>
    <hr>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
