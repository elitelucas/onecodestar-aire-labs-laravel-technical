<div class="review_layout">
    <div class="container">
        <div class="row">
            @foreach ($reviews as $review)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="review_box">
                        @include('components.rating', [
                            'rating' => $review[1],
                            'starsize' => 18,
                            'scoreshow' => false,
                        ])
                        <p class="content">
                            {{ $review[0] }}
                        </p>
                        <div class="reviewer_box">
                            <img src="{{ asset('/images/' . $review[4]) }}">
                            <div class="reviewer_intro">
                                <p class="reviewer_name">{{ $review[2] }}</p>
                                <p class="reviewer_position">{{ $review[3] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg_left">
        <img src="{{ asset('/images/bg_left.png') }}">
    </div>
    <div class="bg_right">
        <img src="{{ asset('/images/bg_right.png') }}" width="350px">
    </div>
    <div class="bg_right2">
        <img src="{{ asset('/images/bg_right.png') }}" width="350px">
    </div>
</div>
