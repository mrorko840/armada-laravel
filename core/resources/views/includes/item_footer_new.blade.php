@if ($sitem->item_type != 'affiliate')
    @if ($sitem->is_stock())
        <a class="btn btn-sm btn-primary product-button add_to_single_cart"  data-target="{{ $sitem->id }}" href="javascript:;"  title="{{__('To Cart')}}">
            <i class="icon-shopping-cart"></i>
        </a>
        <a class="btn btn-sm btn-primary flex-fill product-button" href="{{route('front.product',$sitem->slug)}}" title="{{__('Buy Now')}}">
            {{__('Buy Now')}}
        </a>
    @else
        <a class="btn btn-sm btn-primary flex-fill product-button" href="{{route('front.product',$sitem->slug)}}" title="{{__('Details')}}">
            {{__('Details')}}
        </a>
    @endif
@else
    <a class="btn btn-sm btn-primary flex-fill product-button" href="{{$sitem->affiliate_link}}" target="_blank" title="{{__('Buy Now')}}">
        {{__('Buy Now')}}
    </a>
@endif