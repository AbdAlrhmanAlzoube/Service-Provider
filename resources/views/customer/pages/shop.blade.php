@extends('customer.index')

@section('content')
    <div class="site-section">
        <div class="container">

            <!-- Filter Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Sort by</h3>
                    <form action="{{ route('view-reservations') }}" method="GET">
                        <div class="form-group">
                            <select class="form-control" name="sort_by">
                                <option value="price_asc">Price, low to high</option>
                                <option value="price_desc">Price, high to low</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Apply</button>
                    </form>
                </div>
            </div>

            <div class="row mt-4">
                @forelse($serviceReservations as $reservation)
                    <div class="col-sm-6 col-lg-4 text-center item mb-4">
                        <a href="{{ route('show-party', $reservation->id) }}">
                            <img src="{{ Storage::url($reservation->picture) }}" alt="{{ $reservation->title }}" width="200px">
                        </a>
                        <h3 class="text-dark">
                            <a href="{{ route('show-party', $reservation->id) }}">{{ $reservation->title }}</a>
                        </h3>
                        <p class="price">
                            ${{ number_format($reservation->price, 2) }}
                        </p>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No reservations found.</p>
                    </div>
                @endforelse
            </div>

            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    {{ $serviceReservations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
