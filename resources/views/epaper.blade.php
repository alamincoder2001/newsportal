@extends('layouts.frontend_master')

@section('title')
ই-পেপার
@endsection

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group d-flex align-items-center">
                                <label for="oldnumber" style="width: 11%;font-size: 20px;font-weight: 900;">পুরোনো সংখ্যা</label>
                                <input style="width: 250px;" type="date" value="{{date('Y-m-d')}}" class="form-control shadow-none" oninput="OldNumber(event)" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row showResult">
                @if(count($epapers) > 0)
                @foreach($epapers->take(6) as $item)
                <div class="col-md-4 mt-4 epaper">
                    <a href="{{ asset($item->image != null ? $item->image : 'noImage.jpg') }}" class="spotlight">
                        <img src="{{ asset($item->image != null ? $item->image : 'noImage.jpg') }}">
                    </a>
                </div>
                @endforeach
                @else
                <div class="col-md-12 mt-3">
                    <p class="m-0 text-center bg-warning text-white">Not found data</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push("webjs")
<script>
    function OldNumber(event) {
        event.preventDefault();

        $.ajax({
            url: "/old-epaper-list",
            method: "POST",
            data: {
                oldDate: event.target.value
            },
            beforeSend: () => {
                $('.showResult').html(`<div class='text-center'><img src="/loading.gif" /></div>`);
            },
            success: res => {
                if (res.status) {
                    // setTimeout(() => {
                    $('.showResult').html("");
                    if (res.message.length > 0) {
                        $.each(res.message, (index, value) => {
                            let row = `<div class="col-md-4 mt-4 epaper">
                                                <a href="${value.image != null ? value.image : 'noImage.jpg'}" class="spotlight">
                                                    <img src="${ value.image != null ? value.image : 'noImage.jpg' }" />
                                                </a>
                                            </div>`;
                            $('.showResult').append(row);
                        })
                    } else {
                        $('.showResult').html(`<div class="col-md-12 mt-3">
                                                    <p class="m-0 text-center bg-warning text-white">Not found data</p>
                                                </div>`);
                    }
                    // }, 1000)
                }
            }
        })
    }
</script>
@endpush