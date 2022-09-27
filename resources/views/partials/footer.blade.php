<footer class="appFooter">
    <div class="footer-top">
{{--        @foreach($footLinks as $item)--}}
{{--            <div>--}}
{{--                <h3>{{$item['title']}}</h3>--}}
{{--                @foreach($item['linkName'] as $itemName)--}}
{{--                    <a href="#">{{$itemName['name']}}</a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
    <div class="footer-low">
        <a href="#" class="button">SIGN-UP NOW!</a>
        <div>
            <h2>FOLLOW US</h2>
            <a class="link">
                <img src="{{asset('img/footer-facebook.png')}}" alt="`Logo ${link.name}`">
            </a>
            <a class="link">
                <img src="{{asset('img/footer-twitter.png')}}" alt="`Logo ${link.name}`">
            </a>
            <a class="link">
                <img src="{{asset('img/footer-youtube.png')}}" alt="`Logo ${link.name}`">
            </a>
            <a class="link">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="`Logo ${link.name}`">
            </a>
            <a class="link">
                <img src="{{asset('img/footer-periscope.png')}}" alt="`Logo ${link.name}`">
            </a>
        </div>
    </div>
</footer>

