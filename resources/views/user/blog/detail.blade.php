@extends('user.master')
@section('title')
    {{ $blog->title }}
@endsection
@section('content')
    <div class="single-post-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-2 order-1 mb-md--30">
                    <div class="single-post-wrapper">
                        <article class="post post-details mb--30">
                            <div class="post-media">
                                <div class="image"><img src="{{ asset('storage/'.$blog->image) }}" alt="blog"></div>
                            </div>
                            <div class="post-info">
                                <header class="entry-header">
                                    <div class="entry-meta"><span class="post-author"><span class="post-by">Post
                                                        By:</span> admin</span>
                                        <span class="post-date">{{ $blog->created_at }}</span></div>
                                    <h2 class="post-title">{{ $blog->title }}</h2>
                                </header>
                                <div class="post-content">
                                    {!! $blog->content !!}
                                </div>
                                <div class="footer-meta"><a class="comment-count" href="#">0
                                        Comments</a><span>/</span>
                                    <p class="post-tags">Tags: <a href="#">HARDWARE,</a><a
                                            href="#">HIPSTER,</a><a href="#">LIGHT,</a><a href="#">MAC,</a><a
                                            href="#">VIDEO-2</a></p>
                                </div>
                                <div class="social__sharing mb--30">
                                    <h3>SHARE THIS POST</h3>
                                    <ul class="social social-round">
                                        <li class="social__item"><a href="facebook.com" class="social__link"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="social__item"><a href="twitter.com" class="social__link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="social__item"><a href="pinterest.com" class="social__link"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                        <li class="social__item"><a href="google.plus.com"
                                                                    class="social__link"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="social__item"><a href="linkedin.com" class="social__link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="related-posts-wrap">
                                <h3>RELATED POSTS</h3>
                                <div class="row">
                                    @foreach($blogs as $item)
                                        <div class="col-lg-4 mb-md--30">
                                            <div class="related-post"><a href="blog-details-image.html"
                                                                         class="related-post__thumb"><img src="{{ asset('storage/'.$item->image) }}"
                                                                                                          alt="portfolio"></a>
                                                <h4><a href="">{{ $item->title }}</a></h4><span>{{ $item->created_at }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </article>
{{--                        <div class="comment">--}}
{{--                            <div class="comment-respond">--}}
{{--                                <h3 class="comment-reply-title">LEAVE A REPLY</h3>--}}
{{--                                <ul class="comment-list">--}}
{{--                                    <li>--}}
{{--                                        <div class="single-comment">--}}
{{--                                            <div class="comment-avatar">--}}
{{--                                                <img src="{{ asset('storage/'.$blog->image) }}" alt="comment">--}}
{{--                                            </div>--}}
{{--                                            <div class="comment-info">--}}
{{--                                                <div class="comment-meta">--}}
{{--                                                    <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>--}}
{{--                                                    <span class="comment-date">30 Janurary, 2018</span><a--}}
{{--                                                        href="" class="reply">Reply</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-content">--}}
{{--                                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut--}}
{{--                                                        odit aut fugit, sed quia cntur magn lores eos qui--}}
{{--                                                        ratione voluptatem sequi nesciunt. Neque porro</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="children">--}}
{{--                                            <li>--}}
{{--                                                <div class="single-comment">--}}
{{--                                                    <div class="comment-avatar"><img--}}
{{--                                                            src="assets/img/others/comment-2.jpg" alt="comment">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-info">--}}
{{--                                                        <div class="comment-meta">--}}
{{--                                                            <h5 class="comment-author"><a href="#">Admin</a>--}}
{{--                                                            </h5><span class="comment-date">30 Janurary,--}}
{{--                                                                        2018</span><a href="" class="reply">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-content">--}}
{{--                                                            <p>enim ipsam voluptatem quia voluptas sit--}}
{{--                                                                aspernatur aut odit aut fugit, sed quia cntur--}}
{{--                                                                magn lores eos qui ratione voluptatem sequi--}}
{{--                                                                nesciunt. Neque porro</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="single-comment">--}}
{{--                                            <div class="comment-avatar"><img--}}
{{--                                                    src="assets/img/others/comment-3.jpg" alt="comment"></div>--}}
{{--                                            <div class="comment-info">--}}
{{--                                                <div class="comment-meta">--}}
{{--                                                    <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>--}}
{{--                                                    <span class="comment-date">30 Janurary, 2018</span><a--}}
{{--                                                        href="" class="reply">Reply</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-content">--}}
{{--                                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut--}}
{{--                                                        odit aut fugit, sed quia cntur magn lores eos qui--}}
{{--                                                        ratione voluptatem sequi nesciunt. Neque porro</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <form class="form comment-form">--}}
{{--                                    <p class="comment-notes"><span id="email-notes">Your email address will not--}}
{{--                                                    be published.</span>Required fields are marked <span--}}
{{--                                            class="required">*</span></p>--}}
{{--                                    <div class="form-row mb--20">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form__group"><label class="form__label"--}}
{{--                                                                            for="comment">Comment *</label><textarea name="comment"--}}
{{--                                                                                                                     id="comment"--}}
{{--                                                                                                                     class="form__input form__input--3 form__input--textarea"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row mb--20">--}}
{{--                                        <div class="col-md-4 mb-sm--20">--}}
{{--                                            <div class="form__group"><label class="form__label"--}}
{{--                                                                            for="comment_name">Name *</label><input type="text"--}}
{{--                                                                                                                    id="comment_name" name="comment_name"--}}
{{--                                                                                                                    class="form__input form__input--3"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4 mb-sm--20">--}}
{{--                                            <div class="form__group"><label class="form__label"--}}
{{--                                                                            for="comment_email">Email *</label><input type="email"--}}
{{--                                                                                                                      id="comment_email" name="comment_email"--}}
{{--                                                                                                                      class="form__input form__input--3"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="form__group"><label class="form__label"--}}
{{--                                                                            for="comment_url">Website *</label><input type="url"--}}
{{--                                                                                                                      id="comment_url" name="comment_url"--}}
{{--                                                                                                                      class="form__input form__input--3"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="col-12"><button type="submit" class="form__submit">Post--}}
{{--                                                Comment</button></div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
