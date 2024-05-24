<x-app-layout>
    <section class="section dashboard">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total of Post:</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ $totalPosts }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card
            <!-- Unpublished Post Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Unpublished Post:</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ $unpublishedPosts }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Unpublished Post Card
            <!-- Published Post Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Published Post:</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ $publishedPosts }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Published Post Card -->
        
    </section>
</x-app-layout>
