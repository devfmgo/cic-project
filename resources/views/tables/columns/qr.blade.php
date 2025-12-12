@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;
    // generate URL dari route name
    $url = route('single-product', $getRecord()->slug);
@endphp

<div class="flex flex-col items-center my-20">
    <div class="my-4">
        {!! QrCode::size(80)->generate($url) !!}
    </div>
    <a href="{{ route('product.qr.download', $getRecord()->id) }}" target="_blank"
        class="text-purple-600 font-semibold text-xs bg-amber-500 hover:bg-amber-600">
        Download QR
    </a>
</div>
